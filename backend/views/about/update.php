<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->title = 'Atualizar Sobre Nós: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title"> Atualizar Sobre Nós</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
