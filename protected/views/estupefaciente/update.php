<?php
/* @var $this EstupefacienteController */
/* @var $model Estupefaciente */

$this->breadcrumbs=array(
	'Estupefacientes'=>array('index'),
	$model->id_estupefaciente=>array('view','id'=>$model->id_estupefaciente),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Estupefaciente', 'url'=>array('index')),
	array('label'=>'Crear Estupefaciente', 'url'=>array('create')),
	array('label'=>'Ver Estupefaciente', 'url'=>array('view', 'id'=>$model->id_estupefaciente)),
	array('label'=>'Administrar Estupefaciente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Estupefaciente <?php echo $model->id_estupefaciente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>