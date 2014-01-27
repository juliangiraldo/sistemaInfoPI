<?php
/* @var $this PaisController */
/* @var $model Pais */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pais-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dominio'); ?>
		<?php echo $form->textField($model,'dominio',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'dominio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indicativo'); ?>
		<?php echo $form->textField($model,'indicativo',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'indicativo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->