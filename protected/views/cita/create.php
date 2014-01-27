<?php
/* @var $this CitaController */
/* @var $model Cita */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Cita', 'url'=>array('index')),
	array('label'=>'Administrar Cita', 'url'=>array('admin')),
);
?>

<h1>Crear Cita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>