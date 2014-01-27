<?php
/* @var $this EnfermedadController */
/* @var $model Enfermedad */

$this->breadcrumbs=array(
	'Enfermedads'=>array('index'),
	$model->id_enfermedad,
);

$this->menu=array(
	array('label'=>'Listar Enfermedad', 'url'=>array('index')),
	array('label'=>'Crear Enfermedad', 'url'=>array('create')),
	array('label'=>'Actualizar Enfermedad', 'url'=>array('update', 'id'=>$model->id_enfermedad)),
	array('label'=>'Eliminar Enfermedad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_enfermedad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Enfermedad', 'url'=>array('admin')),
);
?>

<h1>Ver Enfermedad #<?php echo $model->id_enfermedad; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_enfermedad',
		'descripcion',
		'fecha',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
