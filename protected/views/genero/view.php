<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Generos'=>array('index'),
	$model->id_genero,
);

$this->menu=array(
	array('label'=>'Listar Genero', 'url'=>array('index')),
	array('label'=>'Crear Genero', 'url'=>array('create')),
	array('label'=>'Actualizar Genero', 'url'=>array('update', 'id'=>$model->id_genero)),
	array('label'=>'Eliminar Genero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_genero),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Genero', 'url'=>array('admin')),
);
?>

<h1>Ver Genero #<?php echo $model->id_genero; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_genero',
		'descripcion',
	),
)); ?>
