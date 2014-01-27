<?php
/* @var $this EstupefacienteController */
/* @var $model Estupefaciente */

$this->breadcrumbs=array(
	'Estupefacientes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Estupefaciente', 'url'=>array('index')),
	array('label'=>'Administrar Estupefaciente', 'url'=>array('admin')),
);
?>

<h1>Crear Estupefaciente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>