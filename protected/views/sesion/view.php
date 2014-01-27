<?php
/* @var $this SesionController */
/* @var $model Sesion */

$this->breadcrumbs=array(
	'Sesions'=>array('index'),
	$model->id_sesion,
);

$this->menu=array(
	array('label'=>'Listar Sesion', 'url'=>array('index')),
	array('label'=>'Crear Sesion', 'url'=>array('create')),
	array('label'=>'Actualizar Sesion', 'url'=>array('update', 'id'=>$model->id_sesion)),
	array('label'=>'Eliminar Sesion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sesion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Sesion', 'url'=>array('admin')),
);
?>

<h1>Ver Sesion #<?php echo $model->id_sesion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sesion',
		'id_analisis',
		'session',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
