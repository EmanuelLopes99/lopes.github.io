<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Blogs</h3>
    </div>
        <div class="panel-body">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Blog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'nomeBlog',
            'categoria',
            'conteudo',
            'tags',
            [
                'filter' => false,
                'attribute' => 'post',
                'format' => 'html',
                'value' => function($model){
                    return Html::img(Yii::getAlias('@ImgUrl'). '/' .$model->post,
                    ['width' => 70, 'height' => 55]);
                },
            ],
            //'dataBlog',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>