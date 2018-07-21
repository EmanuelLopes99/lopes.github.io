<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AbcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'missao') ?>

    <?= $form->field($model, 'valores') ?>

    <?= $form->field($model, 'endereco') ?>

    <?= $form->field($model, 'movel_A') ?>

    <?php // echo $form->field($model, 'movel_B') ?>

    <?php // echo $form->field($model, 'tel_A') ?>

    <?php // echo $form->field($model, 'tel_B') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'visao') ?>

    <?php // echo $form->field($model, 'novidades') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
