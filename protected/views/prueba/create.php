<?php
/* @var $this PruebaController */
/* @var $model Prueba */

$this->breadcrumbs=array(
	'Pruebas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Prueba', 'url'=>array('index')),
	array('label'=>'Administrar Prueba', 'url'=>array('admin')),
);
?>

<h1>Crear Prueba</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>