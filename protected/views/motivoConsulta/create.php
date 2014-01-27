<?php
/* @var $this MotivoConsultaController */
/* @var $model MotivoConsulta */

$this->breadcrumbs=array(
	'Motivo Consultas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar MotivoConsulta', 'url'=>array('index')),
	array('label'=>'Administrar MotivoConsulta', 'url'=>array('admin')),
);
?>

<h1>Crear MotivoConsulta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>