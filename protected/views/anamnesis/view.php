<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	$model->id_anamnesis,
);

$this->menu=array(
	array('label'=>'Listar Anamnesis', 'url'=>array('index')),
	array('label'=>'Crear Anamnesis', 'url'=>array('create')),
	array('label'=>'Actualizar Anamnesis', 'url'=>array('update', 'id'=>$model->id_anamnesis)),
	array('label'=>'Eliminar Anamnesis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_anamnesis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Anamnesis', 'url'=>array('admin')),
);
?>

<h1>Ver Anamnesis #<?php echo $model->id_anamnesis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_anamnesis',
		'id_paciente',
		'actividades',
		'id_tratamiento_actual',
		'referido_por',
		'motivo_remision',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
