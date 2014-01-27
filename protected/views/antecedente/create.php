<?php
/* @var $this AntecedenteController */
/* @var $model Antecedente */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Antecedente', 'url'=>array('index')),
	array('label'=>'Administrar Antecedente', 'url'=>array('admin')),
);
?>

<h1>Crear Antecedente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>