<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */

$this->breadcrumbs=array(
	'Estado Civils'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar EstadoCivil', 'url'=>array('index')),
	array('label'=>'Administrar EstadoCivil', 'url'=>array('admin')),
);
?>

<h1>Crear EstadoCivil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>