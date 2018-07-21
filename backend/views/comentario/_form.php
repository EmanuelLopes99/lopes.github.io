<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Post;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_post')->dropDownList(
        ArrayHelper::map(Post::find()->all(),'id','title'),
        ['prompt'=>'-- Selecione Post --']
        ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
