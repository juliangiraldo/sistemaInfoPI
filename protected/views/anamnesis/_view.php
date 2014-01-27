<?php
/* @var $this AnamnesisController */
/* @var $data Anamnesis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_anamnesis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_anamnesis), array('view', 'id'=>$data->id_anamnesis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actividades')); ?>:</b>
	<?php echo CHtml::encode($data->actividades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tratamiento_actual')); ?>:</b>
	<?php echo CHtml::encode($data->id_tratamiento_actual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referido_por')); ?>:</b>
	<?php echo CHtml::encode($data->referido_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_remision')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_remision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creado_por')); ?>:</b>
	<?php echo CHtml::encode($data->creado_por); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificado_por')); ?>:</b>
	<?php echo CHtml::encode($data->modificado_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>