<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudads'=>array('index'),
	$model->id_ciudad,
);

$this->menu=array(
	array('label'=>'Listar Ciudad', 'url'=>array('index')),
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
	array('label'=>'Actualizar Ciudad', 'url'=>array('update', 'id'=>$model->id_ciudad)),
	array('label'=>'Eliminar Ciudad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ciudad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Ciudad', 'url'=>array('admin')),
);
?>

<h1>Ver Ciudad #<?php echo $model->id_ciudad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ciudad',
		'id_departamento',
		'descripcion',
	),
)); ?>
