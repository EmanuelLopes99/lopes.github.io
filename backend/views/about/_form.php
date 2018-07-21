<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'missao')->textArea(['rows' => 6]) ?>

    <?= $form->field($model, 'filosofia')->textArea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'descrecaoEquipe')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imagem_about')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
