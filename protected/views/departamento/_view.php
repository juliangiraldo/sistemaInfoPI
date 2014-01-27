<?php
/* @var $this DepartamentoController */
/* @var $data Departamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_departamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_departamento), array('view', 'id'=>$data->id_departamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pais')); ?>:</b>
	<?php echo CHtml::encode($data->id_pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_capital')); ?>:</b>
	<?php echo CHtml::encode($data->id_capital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>