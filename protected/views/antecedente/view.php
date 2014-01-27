<?php
/* @var $this AntecedenteController */
/* @var $model Antecedente */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	$model->id_antecedente,
);

$this->menu=array(
	array('label'=>'Listar Antecedente', 'url'=>array('index')),
	array('label'=>'Crear Antecedente', 'url'=>array('create')),
	array('label'=>'Actualizar Antecedente', 'url'=>array('update', 'id'=>$model->id_antecedente)),
	array('label'=>'Eliminar Antecedente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_antecedente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Antecedente', 'url'=>array('admin')),
);
?>

<h1>Ver Antecedente #<?php echo $model->id_antecedente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_antecedente',
		'tipo_antecendente',
		'id_paciente',
		'observaciones',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
