<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */

$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	$model->id_ocupacion,
);

$this->menu=array(
	array('label'=>'Listar Ocupacion', 'url'=>array('index')),
	array('label'=>'Crear Ocupacion', 'url'=>array('create')),
	array('label'=>'Actualizar Ocupacion', 'url'=>array('update', 'id'=>$model->id_ocupacion)),
	array('label'=>'Eliminar Ocupacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ocupacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Ocupacion', 'url'=>array('admin')),
);
?>

<h1>Ver Ocupacion #<?php echo $model->id_ocupacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ocupacion',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
