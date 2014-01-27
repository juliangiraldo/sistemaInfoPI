<?php
/* @var $this CirujiaController */
/* @var $model Cirujia */

$this->breadcrumbs=array(
	'Cirujias'=>array('index'),
	$model->id_cirujia,
);

$this->menu=array(
	array('label'=>'Listar Cirujia', 'url'=>array('index')),
	array('label'=>'Crear Cirujia', 'url'=>array('create')),
	array('label'=>'Actualizar Cirujia', 'url'=>array('update', 'id'=>$model->id_cirujia)),
	array('label'=>'Eliminar Cirujia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cirujia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cirujia', 'url'=>array('admin')),
);
?>

<h1>Ver Cirujia #<?php echo $model->id_cirujia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cirujia',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
