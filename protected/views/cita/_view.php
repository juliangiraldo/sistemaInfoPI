<?php
/* @var $this CitaController */
/* @var $data Cita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cita), array('view', 'id'=>$data->id_cita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creado_por')); ?>:</b>
	<?php echo CHtml::encode($data->creado_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificado_por')); ?>:</b>
	<?php echo CHtml::encode($data->modificado_por); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>