<?php
/* @var $this PruebaController */
/* @var $model Prueba */

$this->breadcrumbs=array(
	'Pruebas'=>array('index'),
	$model->id_prueba,
);

$this->menu=array(
	array('label'=>'Listar Prueba', 'url'=>array('index')),
	array('label'=>'Crear Prueba', 'url'=>array('create')),
	array('label'=>'Actualizar Prueba', 'url'=>array('update', 'id'=>$model->id_prueba)),
	array('label'=>'Eliminar Prueba', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prueba),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Prueba', 'url'=>array('admin')),
);
?>

<h1>Ver Prueba #<?php echo $model->id_prueba; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_prueba',
		'id_analisis',
		'nombre_prueba',
		'observaciones',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
