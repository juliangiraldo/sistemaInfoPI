<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */

$this->breadcrumbs=array(
	'Estado Civils'=>array('index'),
	$model->id_estado_civil,
);

$this->menu=array(
	array('label'=>'Listar EstadoCivil', 'url'=>array('index')),
	array('label'=>'Crear EstadoCivil', 'url'=>array('create')),
	array('label'=>'Actualizar EstadoCivil', 'url'=>array('update', 'id'=>$model->id_estado_civil)),
	array('label'=>'Eliminar EstadoCivil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_estado_civil),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar EstadoCivil', 'url'=>array('admin')),
);
?>

<h1>Ver EstadoCivil #<?php echo $model->id_estado_civil; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_estado_civil',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
