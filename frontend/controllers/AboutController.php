<?php

namespace frontend\controllers;

use Yii;
use app\models\About;
use app\models\AboutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Abc;
use app\models\Equipe;

/**
 * AboutController implements the CRUD actions for About model.
 */
class AboutController extends Controller
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
     * Lists all About models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AboutSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $aboutInf = About::find()->select('*')->from('about')->orderBy('id DESC')->limit(1)->all();
        $aboutImg = About::find()->select('*')->from('about')->orderBy('id DESC')->limit(3)->all();
        $equipeDes = About::find()->select('descrecaoEquipe')->from('about')->limit(1)->all();
        $equipeImg = Equipe::find()->select('foto')->from('equipe')->orderBy('id DESC')->limit(4)->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'aboutInf' => $aboutInf,
            'aboutImg' => $aboutImg,
            'equipeDes' => $equipeDes,
            'equipeImg' => $equipeImg,
        ]);
    }

    /**
     * Displays a single About model.
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
     * Creates a new About model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new About();

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $ImgId = $model->id;
            $images= UploadedFile::getInstance($model, 'imagem');
            $imgName = 'img_' .$ImgId. '.' .$images->getExtension();
            $images->saveAs(Yii::getAlias('@ImgPath'). '/' .$imgName);
            $model->imegem = $imgName;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing About model.
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
            $images= UploadedFile::getInstance($model, 'imagem');
            $imgName = 'img_' .$ImgId. '.' .$images->getExtension();
            $images->saveAs(Yii::getAlias('@ImgPath'). '/' .$imgName);
            $model->imegem = $imgName;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing About model.
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
     * Finds the About model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return About the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = About::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
