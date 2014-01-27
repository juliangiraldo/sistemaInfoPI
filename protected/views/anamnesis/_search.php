<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_anamnesis'); ?>
		<?php echo $form->textField($model,'id_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actividades'); ?>
		<?php echo $form->textArea($model,'actividades',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tratamiento_actual'); ?>
		<?php echo $form->textField($model,'id_tratamiento_actual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'referido_por'); ?>
		<?php echo $form->textField($model,'referido_por',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivo_remision'); ?>
		<?php echo $form->textArea($model,'motivo_remision',array('rows'=>6, 'cols'=>50)); ?>
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