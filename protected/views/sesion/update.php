<?php
/* @var $this SesionController */
/* @var $model Sesion */

$this->breadcrumbs=array(
	'Sesions'=>array('index'),
	$model->id_sesion=>array('view','id'=>$model->id_sesion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Sesion', 'url'=>array('index')),
	array('label'=>'Crear Sesion', 'url'=>array('create')),
	array('label'=>'Ver Sesion', 'url'=>array('view', 'id'=>$model->id_sesion)),
	array('label'=>'Administrar Sesion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sesion <?php echo $model->id_sesion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>