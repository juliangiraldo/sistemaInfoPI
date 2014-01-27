<?php
/* @var $this PaisController */
/* @var $data Pais */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pais')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pais), array('view', 'id'=>$data->id_pais)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dominio')); ?>:</b>
	<?php echo CHtml::encode($data->dominio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicativo')); ?>:</b>
	<?php echo CHtml::encode($data->indicativo); ?>
	<br />


</div>