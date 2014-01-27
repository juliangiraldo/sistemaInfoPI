<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Paciente'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'Listar Paciente', 'url'=>array('index')),
	array('label'=>'Administrar Paciente', 'url'=>array('admin')),
);
?>

<h1>Crear Paciente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>