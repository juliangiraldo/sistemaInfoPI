<?php
/* @var $this NivelEscolarController */
/* @var $model NivelEscolar */

$this->breadcrumbs=array(
	'Nivel Escolars'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar NivelEscolar', 'url'=>array('index')),
	array('label'=>'Administrar NivelEscolar', 'url'=>array('admin')),
);
?>

<h1>Crear NivelEscolar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>