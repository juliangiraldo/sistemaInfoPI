<?php
/* @var $this SintomaController */
/* @var $model Sintoma */

$this->breadcrumbs=array(
	'Sintomas'=>array('index'),
	$model->id_sintoma,
);

$this->menu=array(
	array('label'=>'Listar Sintoma', 'url'=>array('index')),
	array('label'=>'Crear Sintoma', 'url'=>array('create')),
	array('label'=>'Actualizar Sintoma', 'url'=>array('update', 'id'=>$model->id_sintoma)),
	array('label'=>'Eliminar Sintoma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sintoma),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Sintoma', 'url'=>array('admin')),
);
?>

<h1>Ver Sintoma #<?php echo $model->id_sintoma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sintoma',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
