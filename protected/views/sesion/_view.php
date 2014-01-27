<?php
/* @var $this SesionController */
/* @var $data Sesion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sesion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sesion), array('view', 'id'=>$data->id_sesion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_analisis')); ?>:</b>
	<?php echo CHtml::encode($data->id_analisis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session')); ?>:</b>
	<?php echo CHtml::encode($data->session); ?>
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