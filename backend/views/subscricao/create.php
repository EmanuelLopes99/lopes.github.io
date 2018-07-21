<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subscricao */

$this->title = 'Criar Subscricao';
$this->params['breadcrumbs'][] = ['label' => 'Subscricaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Criar Subscrição</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>