<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Anamnesis', 'url'=>array('index')),
	array('label'=>'Administrar Anamnesis', 'url'=>array('admin')),
);
?>

<h1>Crear Anamnesis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>