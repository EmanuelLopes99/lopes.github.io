<?php

namespace backend\controllers;

use Yii;
use app\models\Parceiros;
use app\models\ParceirosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * ParceirosController implements the CRUD actions for Parceiros model.
 */
class ParceirosController extends Controller
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
     * Lists all Parceiros models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ParceirosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Parceiros::find();
        /*Definir tamanho maximo de dados a presentra na tela*/
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 7,
            ]
        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Parceiros model.
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
     * Creates a new Parceiros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Parceiros();

        if ($model->load(Yii::$app->request->post())) {
            //$model->save();
            $images= UploadedFile::getInstance($model, 'logo');
            $ImgName = $images->baseName. '.' .$images->extension;
            $images->saveAs(Yii::getAlias('@ImgPath'). '/' .$ImgName);
            $model->logo = $ImgName;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Parceiros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            //$model->save();
            $images= UploadedFile::getInstance($model, 'logo');
            $ImgName = $images->baseName. '.' .$images->extension;
            $images->saveAs(Yii::getAlias('@ImgPath'). '/' .$ImgName);
            $model->logo = $ImgName;
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Parceiros model.
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
     * Finds the Parceiros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parceiros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Parceiros::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
