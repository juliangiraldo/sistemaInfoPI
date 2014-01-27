<?php
/* @var $this TipoFamiliarController */
/* @var $model TipoFamiliar */

$this->breadcrumbs=array(
	'Tipo Familiars'=>array('index'),
	$model->id_tipo_familiar,
);

$this->menu=array(
	array('label'=>'Listar TipoFamiliar', 'url'=>array('index')),
	array('label'=>'Crear TipoFamiliar', 'url'=>array('create')),
	array('label'=>'Actualizar TipoFamiliar', 'url'=>array('update', 'id'=>$model->id_tipo_familiar)),
	array('label'=>'Eliminar TipoFamiliar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_familiar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar TipoFamiliar', 'url'=>array('admin')),
);
?>

<h1>Ver TipoFamiliar #<?php echo $model->id_tipo_familiar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_familiar',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
