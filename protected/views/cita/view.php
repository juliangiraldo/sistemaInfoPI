<?php
/* @var $this CitaController */
/* @var $model Cita */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	$model->id_cita,
);

$this->menu=array(
	array('label'=>'Listar Cita', 'url'=>array('index')),
	array('label'=>'Crear Cita', 'url'=>array('create')),
	array('label'=>'Actualizar Cita', 'url'=>array('update', 'id'=>$model->id_cita)),
	array('label'=>'Eliminar Cita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cita', 'url'=>array('admin')),
);
?>

<h1>Ver Cita #<?php echo $model->id_cita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cita',
		'id_paciente',
		'fecha_inicio',
		'fecha_fin',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
