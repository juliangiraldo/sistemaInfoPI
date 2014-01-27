<?php
/* @var $this FamiliarController */
/* @var $model Familiar */

$this->breadcrumbs=array(
	'Familiars'=>array('index'),
	$model->id_familiar,
);

$this->menu=array(
	array('label'=>'Listar Familiar', 'url'=>array('index')),
	array('label'=>'Crear Familiar', 'url'=>array('create')),
	array('label'=>'Actualizar Familiar', 'url'=>array('update', 'id'=>$model->id_familiar)),
	array('label'=>'Eliminar Familiar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_familiar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Familiar', 'url'=>array('admin')),
);
?>

<h1>Ver Familiar #<?php echo $model->id_familiar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_familiar',
		'id_paciente',
		'id_tipo_familiar',
		'id_estado_civil',
		'nombre',
		'apellido1',
		'numero_hijos',
		'apellido2',
		'telefono',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
