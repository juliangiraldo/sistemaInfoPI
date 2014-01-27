<?php
/* @var $this BarrioController */
/* @var $model Barrio */

$this->breadcrumbs=array(
	'Barrios'=>array('index'),
	$model->id_barrio=>array('view','id'=>$model->id_barrio),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Barrio', 'url'=>array('index')),
	array('label'=>'Crear Barrio', 'url'=>array('create')),
	array('label'=>'Ver Barrio', 'url'=>array('view', 'id'=>$model->id_barrio)),
	array('label'=>'Administrar Barrio', 'url'=>array('admin')),
);
?>

<h1>Actualizar Barrio <?php echo $model->id_barrio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>