<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pacientes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_paciente'); ?>
		<?php echo $form->textField($model,'id_paciente'); ?>
		<?php echo $form->error($model,'id_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido1'); ?>
		<?php echo $form->textField($model,'apellido1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido2'); ?>
		<?php echo $form->textField($model,'apellido2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_genero'); ?>
		<?php echo $form->textField($model,'id_genero'); ?>
		<?php echo $form->error($model,'id_genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nivel_escolar'); ?>
		<?php echo $form->textField($model,'id_nivel_escolar'); ?>
		<?php echo $form->error($model,'id_nivel_escolar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_lugar_nac'); ?>
		<?php echo $form->textField($model,'id_lugar_nac'); ?>
		<?php echo $form->error($model,'id_lugar_nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo'); ?>
		<?php echo $form->textField($model,'tiempo'); ?>
		<?php echo $form->error($model,'tiempo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_barrio'); ?>
		<?php echo $form->textField($model,'id_barrio'); ?>
		<?php echo $form->error($model,'id_barrio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono1'); ?>
		<?php echo $form->textField($model,'telefono1'); ?>
		<?php echo $form->error($model,'telefono1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono2'); ?>
		<?php echo $form->textField($model,'telefono2'); ?>
		<?php echo $form->error($model,'telefono2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular'); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estrato'); ?>
		<?php echo $form->textField($model,'estrato'); ?>
		<?php echo $form->error($model,'estrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado_civil'); ?>
		<?php echo $form->textField($model,'id_estado_civil'); ?>
		<?php echo $form->error($model,'id_estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento'); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_fam'); ?>
		<?php echo $form->textArea($model,'observaciones_fam',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_fam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo_remision'); ?>
		<?php echo $form->textArea($model,'motivo_remision',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'motivo_remision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_remitente'); ?>
		<?php echo $form->textField($model,'nombre_remitente',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_remitente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creado_por'); ?>
		<?php echo $form->textField($model,'creado_por'); ?>
		<?php echo $form->error($model,'creado_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificado_por'); ?>
		<?php echo $form->textField($model,'modificado_por'); ?>
		<?php echo $form->error($model,'modificado_por'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_modificacion'); ?>
		<?php echo $form->textField($model,'fecha_modificacion'); ?>
		<?php echo $form->error($model,'fecha_modificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_padre'); ?>
		<?php echo $form->textField($model,'nombre_padre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre_padre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido1_padre'); ?>
		<?php echo $form->textField($model,'apellido1_padre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'apellido1_padre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido2_padre'); ?>
		<?php echo $form->textField($model,'apellido2_padre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'apellido2_padre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edad_padre'); ?>
		<?php echo $form->textField($model,'edad_padre'); ?>
		<?php echo $form->error($model,'edad_padre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado_civil_padre'); ?>
		<?php echo $form->textField($model,'id_estado_civil_padre'); ?>
		<?php echo $form->error($model,'id_estado_civil_padre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_madre'); ?>
		<?php echo $form->textField($model,'nombre_madre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre_madre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido1_madre'); ?>
		<?php echo $form->textField($model,'apellido1_madre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'apellido1_madre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido2_madre'); ?>
		<?php echo $form->textField($model,'apellido2_madre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'apellido2_madre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edad_madre'); ?>
		<?php echo $form->textField($model,'edad_madre'); ?>
		<?php echo $form->error($model,'edad_madre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado_civil_madre'); ?>
		<?php echo $form->textField($model,'id_estado_civil_madre'); ?>
		<?php echo $form->error($model,'id_estado_civil_madre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->