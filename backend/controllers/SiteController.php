<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\Post;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Post::find(); //definer onde quer fazer a query

        //Definir o tsmsnho msximo de dados a apresentar na tela
        $pagination = new Pagination([
            'defaultPageSize'=> 3, 
            'totalCount'=>$query->count() 
        ]);

        $mostrarPost = $query->orderBy('data_post desc')
                             ->offset($pagination->offset)
                             ->limit($pagination->limit)
                             ->all();

        //contar total de registro no banco
        $querys = new \yii\db\Query();
        $contarPost = $querys->select('*')
                    ->from('{{post}}')
                    ->count();
        $contarUsuario = $querys->select('*')
                        ->from('{{usuario}}')
                        ->count();
        $contarComentarios = $querys->select('*')
                            ->from('{{comentario}}')
                            ->count();


        //efetuar comentario no post
        $mostrarComentario = $querys->select('*')
                             ->from('{{comentario}}')
                             ->innerJoin('{{post}}','post.id = comentario.id_post')
                             ->orderBy('data desc')
                             ->offset($pagination->offset)
                             ->limit($pagination->limit)
                             ->all();
                             
        return $this->render('index',[
            'mostrarPost' => $mostrarPost,
            'pagination' => $pagination,
            'contarPost'=> $contarPost,
            'contarUsuario' => $contarUsuario,
            'contarComentarios' => $contarComentarios,
            'mostrarComentario' => $mostrarComentario,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'Entralogin';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
