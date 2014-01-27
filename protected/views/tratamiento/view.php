<?php
/* @var $this TratamientoController */
/* @var $model Tratamiento */

$this->breadcrumbs=array(
	'Tratamientos'=>array('index'),
	$model->id_tratamiento,
);

$this->menu=array(
	array('label'=>'Listar Tratamiento', 'url'=>array('index')),
	array('label'=>'Crear Tratamiento', 'url'=>array('create')),
	array('label'=>'Actualizar Tratamiento', 'url'=>array('update', 'id'=>$model->id_tratamiento)),
	array('label'=>'Eliminar Tratamiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tratamiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tratamiento', 'url'=>array('admin')),
);
?>

<h1>Ver Tratamiento #<?php echo $model->id_tratamiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tratamiento',
		'id_tipo_tratamiento',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
