<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Ver Blogs</h3>
    </div>
        <div class="panel-body">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'conteudo',
            'categoria',
            'nomeBlog',
            'dataBlog',
            [
                'attribute' => 'post',
                'value' => Yii::getAlias('@ImgUrl'). '/' .$model->post,
                'format' =>['image',['width' => 250, 'height' => 180]],
            ],
            [
                'attribute' => 'tags',
                'value' => Yii::getAlias('@ImgUrl'). '/' .$model->tags,
                'format' =>['image',['width' => 100, 'height' => 100]],
            ]
        ],
    ]) ?>

</div></div>
