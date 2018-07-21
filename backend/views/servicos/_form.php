<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Servicos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicos-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solucoes')->textArea(['rows' => 4]) ?>

    <?= $form->field($model, 'criatividade')->textArea(['rows' => true]) ?>

    <?= $form->field($model, 'imagemSer')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
