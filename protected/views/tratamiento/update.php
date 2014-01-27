<?php
/* @var $this TratamientoController */
/* @var $model Tratamiento */

$this->breadcrumbs=array(
	'Tratamientos'=>array('index'),
	$model->id_tratamiento=>array('view','id'=>$model->id_tratamiento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Tratamiento', 'url'=>array('index')),
	array('label'=>'Crear Tratamiento', 'url'=>array('create')),
	array('label'=>'Ver Tratamiento', 'url'=>array('view', 'id'=>$model->id_tratamiento)),
	array('label'=>'Administrar Tratamiento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tratamiento <?php echo $model->id_tratamiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>