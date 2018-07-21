<?php

namespace frontend\controllers;

use Yii;
use app\models\Blog;
use app\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Abc;
/**
 * BlogController implements the CRUD actions for Blog model.
 */
class BlogController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Blog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $blogcategoria = Blog::find()->select('*')->from('blog')->orderBy('id DESC')
              ->limit(3)->all();
        $blogpost = Blog::find()->select('*')->from('blog')->orderBy('id DESC')
              ->limit(4)->all();
        $sobABC = Abc::find()->select('*')->from('abc')->orderBy('id DESC')
              ->limit(1)->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'blogcategoria' => $blogcategoria ,
            'blogpost' => $blogpost,
            'sobABC' =>$sobABC,
        ]);
    }

    /**
     * Displays a single Blog model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Blog();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $ImgId = $model->id;
            $images= UploadedFile::getInstance($model, 'post');
            $imgName = 'img_' .$ImgId. '.' .$images->getExtension();
            $images->saveAs(Yii::getAlias('@ImgPath'). '/' .$imgName);
            $model->post = $imgName;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Blog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $ImgId = $model->id;
            $images= UploadedFile::getInstance($model, 'post');
            $imgName = 'img_' .$ImgId. '.' .$images->getExtension();
            $images->saveAs(Yii::getAlias('@ImgPath'). '/' .$imgName);
            $model->post = $imgName;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Blog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
