<?php
/* @var $this BarrioController */
/* @var $data Barrio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_barrio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_barrio), array('view', 'id'=>$data->id_barrio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->id_ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>