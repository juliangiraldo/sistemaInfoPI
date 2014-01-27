<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Medicamento', 'url'=>array('index')),
	array('label'=>'Administrar Medicamento', 'url'=>array('admin')),
);
?>

<h1>Crear Medicamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>