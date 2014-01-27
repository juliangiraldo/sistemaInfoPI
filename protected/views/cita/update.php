<?php
/* @var $this CitaController */
/* @var $model Cita */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	$model->id_cita=>array('view','id'=>$model->id_cita),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Cita', 'url'=>array('index')),
	array('label'=>'Crear Cita', 'url'=>array('create')),
	array('label'=>'Ver Cita', 'url'=>array('view', 'id'=>$model->id_cita)),
	array('label'=>'Administrar Cita', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cita <?php echo $model->id_cita; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>