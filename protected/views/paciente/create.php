<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'Listar Paciente', 'url'=>array('index')),
	array('label'=>'Administrar pacientes', 'url'=>array('admin')),
);
?>

<h1>Crear paciente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>