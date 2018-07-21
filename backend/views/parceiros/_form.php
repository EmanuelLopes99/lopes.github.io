<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parceiros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parceiros-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
