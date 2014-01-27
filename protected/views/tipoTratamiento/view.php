<?php
/* @var $this TipoTratamientoController */
/* @var $model TipoTratamiento */

$this->breadcrumbs=array(
	'Tipo Tratamientos'=>array('index'),
	$model->id_tipo_tratamiento,
);

$this->menu=array(
	array('label'=>'Listar TipoTratamiento', 'url'=>array('index')),
	array('label'=>'Crear TipoTratamiento', 'url'=>array('create')),
	array('label'=>'Actualizar TipoTratamiento', 'url'=>array('update', 'id'=>$model->id_tipo_tratamiento)),
	array('label'=>'Eliminar TipoTratamiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_tratamiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar TipoTratamiento', 'url'=>array('admin')),
);
?>

<h1>Ver TipoTratamiento #<?php echo $model->id_tipo_tratamiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_tratamiento',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
