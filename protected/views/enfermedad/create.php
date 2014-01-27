<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */

$this->breadcrumbs=array(
	'Enfermedads'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Enfermedad', 'url'=>array('index')),
	array('label'=>'Administrar Enfermedad', 'url'=>array('admin')),
);
?>

<h1>Crear Enfermedad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>