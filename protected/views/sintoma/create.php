<?php
/* @var $this SintomaController */
/* @var $model Sintoma */

$this->breadcrumbs=array(
	'Sintomas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Sintoma', 'url'=>array('index')),
	array('label'=>'Administrar Sintoma', 'url'=>array('admin')),
);
?>

<h1>Crear Sintoma</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>