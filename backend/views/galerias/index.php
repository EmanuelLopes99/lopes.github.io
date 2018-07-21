<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GaleriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galerias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Galerias</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Galerias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'titulo',
            'fotoG',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
