<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->title = ' Ciar Sobre Nós';
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title"> Ciar Sobre Nós</h3>
    </div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div></div>
