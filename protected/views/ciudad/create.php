<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudads'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Ciudad', 'url'=>array('index')),
	array('label'=>'Administrar Ciudad', 'url'=>array('admin')),
);
?>

<h1>Crear Ciudad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>