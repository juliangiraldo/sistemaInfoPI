<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Diagnostico', 'url'=>array('index')),
	array('label'=>'Administrar Diagnostico', 'url'=>array('admin')),
);
?>

<h1>Crear Diagnostico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>