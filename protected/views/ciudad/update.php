<?php
/* @var $this CiudadController */
/* @var $model Ciudad */

$this->breadcrumbs=array(
	'Ciudads'=>array('index'),
	$model->id_ciudad=>array('view','id'=>$model->id_ciudad),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Ciudad', 'url'=>array('index')),
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
	array('label'=>'Ver Ciudad', 'url'=>array('view', 'id'=>$model->id_ciudad)),
	array('label'=>'Administrar Ciudad', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ciudad <?php echo $model->id_ciudad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>