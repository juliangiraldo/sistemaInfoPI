<?php
/* @var $this BarrioController */
/* @var $model Barrio */

$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Barrio', 'url'=>array('index')),
	array('label'=>'Administrar Barrio', 'url'=>array('admin')),
);
?>

<h1>Crear Barrio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>