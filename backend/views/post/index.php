<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Post</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //'id',
            'title',
            'content:ntext',
            'capa',
            [
                'filter' => false,
                'attribute' => 'imagemPost',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->imagemPost,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            //'noticias',
            //'data_post',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
