<?php
/* @var $this CirujiaController */
/* @var $model Cirujia */

$this->breadcrumbs=array(
	'Cirujias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Cirujia', 'url'=>array('index')),
	array('label'=>'Administrar Cirujia', 'url'=>array('admin')),
);
?>

<h1>Crear Cirujia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>