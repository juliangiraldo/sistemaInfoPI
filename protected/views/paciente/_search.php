<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

    <?php /*
	<div class="row">
		<?php echo $form->label($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
	</div>
    */ ?>
	<div class="row">
		<?php echo $form->label($model,'identificacion'); ?>
		<?php echo $form->textField($model,'identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido1'); ?>
		<?php echo $form->textField($model,'apellido1',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido2'); ?>
		<?php echo $form->textField($model,'apellido2',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_genero'); ?>
		<?php echo $form->textField($model,'id_genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_nivel_escolar'); ?>
		<?php echo $form->textField($model,'id_nivel_escolar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_lugar_nac'); ?>
		<?php echo $form->textField($model,'id_lugar_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo'); ?>
		<?php echo $form->textField($model,'tiempo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_barrio'); ?>
		<?php echo $form->textField($model,'id_barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono1'); ?>
		<?php echo $form->textField($model,'telefono1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono2'); ?>
		<?php echo $form->textField($model,'telefono2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'celular'); ?>
		<?php echo $form->textField($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estrato'); ?>
		<?php echo $form->textField($model,'estrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado_civil'); ?>
		<?php echo $form->textField($model,'id_estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento'); ?>
	</div>

    <?php /*
	<div class="row">
		<?php echo $form->label($model,'observaciones_fam'); ?>
		<?php echo $form->textArea($model,'observaciones_fam',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivo_remision'); ?>
		<?php echo $form->textArea($model,'motivo_remision',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_remitente'); ?>
		<?php echo $form->textField($model,'nombre_remitente',array('size'=>60,'maxlength'=>200)); ?>
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
		<?php echo $form->label($model,'nombre_padre'); ?>
		<?php echo $form->textField($model,'nombre_padre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido1_padre'); ?>
		<?php echo $form->textField($model,'apellido1_padre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido2_padre'); ?>
		<?php echo $form->textField($model,'apellido2_padre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edad_padre'); ?>
		<?php echo $form->textField($model,'edad_padre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado_civil_padre'); ?>
		<?php echo $form->textField($model,'id_estado_civil_padre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_madre'); ?>
		<?php echo $form->textField($model,'nombre_madre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido1_madre'); ?>
		<?php echo $form->textField($model,'apellido1_madre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido2_madre'); ?>
		<?php echo $form->textField($model,'apellido2_madre',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edad_madre'); ?>
		<?php echo $form->textField($model,'edad_madre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado_civil_madre'); ?>
		<?php echo $form->textField($model,'id_estado_civil_madre'); ?>
	</div>
    */?>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->