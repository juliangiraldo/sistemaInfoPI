<?php
/* @var $this EstupefacienteController */
/* @var $model Estupefaciente */

$this->breadcrumbs=array(
	'Estupefacientes'=>array('index'),
	$model->id_estupefaciente,
);

$this->menu=array(
	array('label'=>'Listar Estupefaciente', 'url'=>array('index')),
	array('label'=>'Crear Estupefaciente', 'url'=>array('create')),
	array('label'=>'Actualizar Estupefaciente', 'url'=>array('update', 'id'=>$model->id_estupefaciente)),
	array('label'=>'Eliminar Estupefaciente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_estupefaciente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estupefaciente', 'url'=>array('admin')),
);
?>

<h1>Ver Estupefaciente #<?php echo $model->id_estupefaciente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_estupefaciente',
		'descripcion',
		'fecha',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
