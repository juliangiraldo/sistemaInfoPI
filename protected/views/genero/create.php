<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Generos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Genero', 'url'=>array('index')),
	array('label'=>'Administrar Genero', 'url'=>array('admin')),
);
?>

<h1>Crear Genero</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>