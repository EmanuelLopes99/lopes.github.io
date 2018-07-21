<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AbcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ABC';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">ABC</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Abc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'missao:ntext',
            'valores:ntext',
            'endereco',
            'movel_A',
            //'movel_B',
            //'tel_A',
            //'tel_B',
            //'email:email',
            'visao',
            //'novidades',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
