<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
use yii\helpers\Html;

$this->params['breadcrumbs'][] = $this->title;
$this->pageTitle=Yii::app()->name. ' - Contate-nos';
$this->breadcrumbs=array('Contatar',);
?>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
Se tiveres alguma questao de negocio ou outros, prencha o formulario para nos contatar. Obrigado
</p>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'contact-form',
'enableClientValidation'=>true,
'clientOptions'=>array(
'validateOnSubmit'=>true,
),
)); ?>


<div class="row">
<?php echo $form->labelEx($model,'nome'); ?>
<?php echo $form->textField($model,'nome'); ?>
<?php echo $form->error($model,'nome'); ?>
</div>

<div class="row">
<?php echo $form->labelEx($model,'email'); ?>
<?php echo $form->textField($model,'email'); ?>
<?php echo $form->error($model,'email'); ?>
</div>

<div class="row">
<?php echo $form->labelEx($model,'assunto'); ?>
<?php echo $form->textField($model,'assunto',array('size'=>60,'maxlength'=>128)); ?>
<?php echo $form->error($model,'assunto'); ?>
</div>

<div class="row">

<?php echo $form->textArea($model,'mensagem',array('rows'=>6, 'cols'=>50,'placeholder'=>'Adicionar uma mensagem', 'size'=>102)); ?>
<?php echo $form->error($model,'mensagem'); ?>
</div>

<?php if(CCaptcha::checkRequirements()): ?>

<div class="row">
<?php echo $form->labelEx($model,'verifyCode'); ?>
<div>&nbsp;
<?php $this->widget('CCaptcha'); ?>
</div>

<div class="form">
Insira as letras apresentadas na imagem&nbsp;&nbsp;
<?php echo $form->textField($model,'verifyCode'); ?>
</div>
<?php echo $form->error($model,'verifyCode'); ?>
</div>

<?php endif; ?>

<div class="buttonform">
<?php echo CHtml::submitButton('Enviar'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>