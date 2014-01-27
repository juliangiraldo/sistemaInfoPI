<?php
/* @var $this AntecedenteController */
/* @var $data Antecedente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_antecedente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_antecedente), array('view', 'id'=>$data->id_antecedente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_antecendente')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_antecendente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::encode($data->id_paciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
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