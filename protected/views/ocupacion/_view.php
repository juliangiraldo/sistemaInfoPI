<?php
/* @var $this OcupacionController */
/* @var $data Ocupacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ocupacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ocupacion), array('view', 'id'=>$data->id_ocupacion)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>