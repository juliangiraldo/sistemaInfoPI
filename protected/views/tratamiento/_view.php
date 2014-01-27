<?php
/* @var $this TratamientoController */
/* @var $data Tratamiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tratamiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tratamiento), array('view', 'id'=>$data->id_tratamiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_tratamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>