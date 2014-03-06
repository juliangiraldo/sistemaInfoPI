<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->id_paciente=>array('view','id'=>$model->id_paciente),
	'Actualizar',
);

$this->menu=array(
//	array('label'=>'Listar Paciente', 'url'=>array('index')),
	array('label'=>'Crear paciente', 'url'=>array('create')),
	array('label'=>'Ver paciente', 'url'=>array('view', 'id'=>$model->id_paciente)),
	array('label'=>'Administrar pacientes', 'url'=>array('admin')),
);
?>

<h1>Actualizar paciente <?php echo $model->identificacion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>