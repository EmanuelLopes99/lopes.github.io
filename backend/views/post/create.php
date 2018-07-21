<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Criar Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Criar Post</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>
