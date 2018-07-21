<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EquipeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equipes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Equipes</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Equipe', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'filter' => false,
                'attribute' => 'foto',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->foto,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            'nome',
            'funcao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div>
