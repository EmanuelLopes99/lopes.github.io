<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Equipe */

$this->title = 'Criar Equipe';
$this->params['breadcrumbs'][] = ['label' => 'Equipes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Criar Equipes</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>
