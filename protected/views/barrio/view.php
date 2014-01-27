<?php
/* @var $this BarrioController */
/* @var $model Barrio */

$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	$model->id_barrio,
);

$this->menu=array(
	array('label'=>'Listar Barrio', 'url'=>array('index')),
	array('label'=>'Crear Barrio', 'url'=>array('create')),
	array('label'=>'Actualizar Barrio', 'url'=>array('update', 'id'=>$model->id_barrio)),
	array('label'=>'Eliminar Barrio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_barrio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Barrio', 'url'=>array('admin')),
);
?>

<h1>Ver Barrio #<?php echo $model->id_barrio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_barrio',
		'id_ciudad',
		'descripcion',
		'estado',
	),
)); ?>
