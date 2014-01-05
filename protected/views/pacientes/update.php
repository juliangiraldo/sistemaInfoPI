<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id_paciente=>array('view','id'=>$model->id_paciente),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Pacientes', 'url'=>array('index')),
	array('label'=>'Crear Pacientes', 'url'=>array('create')),
	array('label'=>'Ver Pacientes', 'url'=>array('view', 'id'=>$model->id_paciente)),
	array('label'=>'Administrar Pacientes', 'url'=>array('admin')),
);
?>

<h1>Actualizar paciente <?php echo $model->identificacion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>