<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->id_pais,
);

$this->menu=array(
	array('label'=>'Listar Pais', 'url'=>array('index')),
	array('label'=>'Crear Pais', 'url'=>array('create')),
	array('label'=>'Actualizar Pais', 'url'=>array('update', 'id'=>$model->id_pais)),
	array('label'=>'Eliminar Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pais),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Pais', 'url'=>array('admin')),
);
?>

<h1>Ver Pais #<?php echo $model->id_pais; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pais',
		'descripcion',
		'dominio',
		'indicativo',
	),
)); ?>
