<?php
/* @var $this PruebaController */
/* @var $model Prueba */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_prueba'); ?>
		<?php echo $form->textField($model,'id_prueba'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_analisis'); ?>
		<?php echo $form->textField($model,'id_analisis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_prueba'); ?>
		<?php echo $form->textField($model,'nombre_prueba',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
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