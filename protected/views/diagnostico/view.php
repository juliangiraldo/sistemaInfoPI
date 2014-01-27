<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	$model->id_diagnostico,
);

$this->menu=array(
	array('label'=>'Listar Diagnostico', 'url'=>array('index')),
	array('label'=>'Crear Diagnostico', 'url'=>array('create')),
	array('label'=>'Actualizar Diagnostico', 'url'=>array('update', 'id'=>$model->id_diagnostico)),
	array('label'=>'Eliminar Diagnostico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_diagnostico),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Diagnostico', 'url'=>array('admin')),
);
?>

<h1>Ver Diagnostico #<?php echo $model->id_diagnostico; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_diagnostico',
		'id_categoria',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
