<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */

$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Ocupacion', 'url'=>array('index')),
	array('label'=>'Administrar Ocupacion', 'url'=>array('admin')),
);
?>

<h1>Crear Ocupacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>