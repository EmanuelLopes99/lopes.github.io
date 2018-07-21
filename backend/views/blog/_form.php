<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nomeBlog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'conteudo')->textArea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->fileInput() ?>

    <?= $form->field($model, 'post')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
