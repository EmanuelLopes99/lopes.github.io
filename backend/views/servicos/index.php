<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServicosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Serviços</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Servicos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'nome',
            'descricao:ntext',
            'solucoes',
            [
                'filter' => false,
                'attribute' => 'imagemSer',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->imagemSer,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            //'criatividade',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
