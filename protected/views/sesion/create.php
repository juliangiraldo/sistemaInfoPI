<?php
/* @var $this SesionController */
/* @var $model Sesion */

$this->breadcrumbs=array(
	'Sesions'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Sesion', 'url'=>array('index')),
	array('label'=>'Administrar Sesion', 'url'=>array('admin')),
);
?>

<h1>Crear Sesion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>