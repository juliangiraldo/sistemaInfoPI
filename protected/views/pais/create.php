<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paises'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Pais', 'url'=>array('index')),
	array('label'=>'Administrar Pais', 'url'=>array('admin')),
);
?>

<h1>Crear Pais</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>