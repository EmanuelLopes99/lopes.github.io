<?php

namespace frontend\controllers;

use Yii;
use app\models\Servicos;
use app\models\ServicosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Abc;

/**
 * ServicosController implements the CRUD actions for Servicos model.
 */
class ServicosController extends Controller
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
     * Lists all Servicos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ServicosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $sobABC = Abc::find()->select('*')->from('abc')->orderBy('id DESC')
              ->limit(2)->all();
        $servico = Servicos::find()->select('*')->from('servicos')->orderBy('id DESC')
              ->limit(1)->all();
        $servicoss = Servicos::find()->select('*')->from('servicos')->orderBy('id DESC')
              ->limit(6)->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'sobABC' => $sobABC,
            'servico' => $servico,
            'servicoss' => $servicoss,
        ]);
    }

    /**
     * Displays a single Servicos model.
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
     * Creates a new Servicos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Servicos();

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
     * Updates an existing Servicos model.
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
     * Deletes an existing Servicos model.
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
     * Finds the Servicos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Servicos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Servicos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
