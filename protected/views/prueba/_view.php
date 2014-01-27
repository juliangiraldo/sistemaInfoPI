<?php
/* @var $this PruebaController */
/* @var $data Prueba */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prueba')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_prueba), array('view', 'id'=>$data->id_prueba)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_analisis')); ?>:</b>
	<?php echo CHtml::encode($data->id_analisis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_prueba')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_prueba); ?>
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