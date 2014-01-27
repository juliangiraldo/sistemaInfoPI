<?php
/* @var $this PruebaController */
/* @var $model Prueba */

$this->breadcrumbs=array(
	'Pruebas'=>array('index'),
	$model->id_prueba=>array('view','id'=>$model->id_prueba),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Prueba', 'url'=>array('index')),
	array('label'=>'Crear Prueba', 'url'=>array('create')),
	array('label'=>'Ver Prueba', 'url'=>array('view', 'id'=>$model->id_prueba)),
	array('label'=>'Administrar Prueba', 'url'=>array('admin')),
);
?>

<h1>Actualizar Prueba <?php echo $model->id_prueba; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>