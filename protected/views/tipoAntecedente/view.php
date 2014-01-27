<?php
/* @var $this TipoAntecedenteController */
/* @var $model TipoAntecedente */

$this->breadcrumbs=array(
	'Tipo Antecedentes'=>array('index'),
	$model->id_tipo_antecedente,
);

$this->menu=array(
	array('label'=>'Listar TipoAntecedente', 'url'=>array('index')),
	array('label'=>'Crear TipoAntecedente', 'url'=>array('create')),
	array('label'=>'Actualizar TipoAntecedente', 'url'=>array('update', 'id'=>$model->id_tipo_antecedente)),
	array('label'=>'Eliminar TipoAntecedente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo_antecedente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar TipoAntecedente', 'url'=>array('admin')),
);
?>

<h1>Ver TipoAntecedente #<?php echo $model->id_tipo_antecedente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo_antecedente',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
