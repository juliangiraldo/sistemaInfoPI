<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	$model->id_medicamento,
);

$this->menu=array(
	array('label'=>'Listar Medicamento', 'url'=>array('index')),
	array('label'=>'Crear Medicamento', 'url'=>array('create')),
	array('label'=>'Actualizar Medicamento', 'url'=>array('update', 'id'=>$model->id_medicamento)),
	array('label'=>'Eliminar Medicamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_medicamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Medicamento', 'url'=>array('admin')),
);
?>

<h1>Ver Medicamento #<?php echo $model->id_medicamento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_medicamento',
		'descripcion',
		'fecha',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
