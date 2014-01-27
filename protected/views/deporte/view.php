<?php
/* @var $this DeporteController */
/* @var $model Deporte */

$this->breadcrumbs=array(
	'Deportes'=>array('index'),
	$model->id_deporte,
);

$this->menu=array(
	array('label'=>'Listar Deporte', 'url'=>array('index')),
	array('label'=>'Crear Deporte', 'url'=>array('create')),
	array('label'=>'Actualizar Deporte', 'url'=>array('update', 'id'=>$model->id_deporte)),
	array('label'=>'Eliminar Deporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_deporte),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Deporte', 'url'=>array('admin')),
);
?>

<h1>Ver Deporte #<?php echo $model->id_deporte; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_deporte',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
