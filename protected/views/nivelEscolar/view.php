<?php
/* @var $this NivelEscolarController */
/* @var $model NivelEscolar */

$this->breadcrumbs=array(
	'Nivel Escolars'=>array('index'),
	$model->id_nivel_escolar,
);

$this->menu=array(
	array('label'=>'Listar NivelEscolar', 'url'=>array('index')),
	array('label'=>'Crear NivelEscolar', 'url'=>array('create')),
	array('label'=>'Actualizar NivelEscolar', 'url'=>array('update', 'id'=>$model->id_nivel_escolar)),
	array('label'=>'Eliminar NivelEscolar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_nivel_escolar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar NivelEscolar', 'url'=>array('admin')),
);
?>

<h1>Ver NivelEscolar #<?php echo $model->id_nivel_escolar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_nivel_escolar',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
