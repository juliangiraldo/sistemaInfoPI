<?php
/* @var $this DeporteController */
/* @var $model Deporte */

$this->breadcrumbs=array(
	'Deportes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Deporte', 'url'=>array('index')),
	array('label'=>'Administrar Deporte', 'url'=>array('admin')),
);
?>

<h1>Crear Deporte</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>