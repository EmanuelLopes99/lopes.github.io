<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Servicos */

$this->title = 'Criar Servicos';
$this->params['breadcrumbs'][] = ['label' => 'Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Criar Serviços</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>
