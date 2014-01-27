<?php
/* @var $this FamiliarController */
/* @var $model Familiar */

$this->breadcrumbs=array(
	'Familiars'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Familiar', 'url'=>array('index')),
	array('label'=>'Administrar Familiar', 'url'=>array('admin')),
);
?>

<h1>Crear Familiar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>