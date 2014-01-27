<?php
/* @var $this FamiliarController */
/* @var $model Familiar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_familiar'); ?>
		<?php echo $form->textField($model,'id_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_familiar'); ?>
		<?php echo $form->textField($model,'id_tipo_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado_civil'); ?>
		<?php echo $form->textField($model,'id_estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido1'); ?>
		<?php echo $form->textField($model,'apellido1',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_hijos'); ?>
		<?php echo $form->textField($model,'numero_hijos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido2'); ?>
		<?php echo $form->textField($model,'apellido2',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creado_por'); ?>
		<?php echo $form->textField($model,'creado_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modificado_por'); ?>
		<?php echo $form->textField($model,'modificado_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_modificacion'); ?>
		<?php echo $form->textField($model,'fecha_modificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->