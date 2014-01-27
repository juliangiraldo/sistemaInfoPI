<?php
/* @var $this MotivoConsultaController */
/* @var $model MotivoConsulta */

$this->breadcrumbs=array(
	'Motivo Consultas'=>array('index'),
	$model->id_motivo,
);

$this->menu=array(
	array('label'=>'Listar MotivoConsulta', 'url'=>array('index')),
	array('label'=>'Crear MotivoConsulta', 'url'=>array('create')),
	array('label'=>'Actualizar MotivoConsulta', 'url'=>array('update', 'id'=>$model->id_motivo)),
	array('label'=>'Eliminar MotivoConsulta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_motivo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar MotivoConsulta', 'url'=>array('admin')),
);
?>

<h1>Ver MotivoConsulta #<?php echo $model->id_motivo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_motivo',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
