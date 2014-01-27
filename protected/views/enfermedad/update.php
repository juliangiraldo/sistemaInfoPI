<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */

$this->breadcrumbs=array(
	'Enfermedads'=>array('index'),
	$model->id_enfermedad=>array('view','id'=>$model->id_enfermedad),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Enfermedad', 'url'=>array('index')),
	array('label'=>'Crear Enfermedad', 'url'=>array('create')),
	array('label'=>'Ver Enfermedad', 'url'=>array('view', 'id'=>$model->id_enfermedad)),
	array('label'=>'Administrar Enfermedad', 'url'=>array('admin')),
);
?>

<h1>Actualizar Enfermedad <?php echo $model->id_enfermedad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>