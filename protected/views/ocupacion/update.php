<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */

$this->breadcrumbs=array(
	'Ocupacions'=>array('index'),
	$model->id_ocupacion=>array('view','id'=>$model->id_ocupacion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Ocupacion', 'url'=>array('index')),
	array('label'=>'Crear Ocupacion', 'url'=>array('create')),
	array('label'=>'Ver Ocupacion', 'url'=>array('view', 'id'=>$model->id_ocupacion)),
	array('label'=>'Administrar Ocupacion', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ocupacion <?php echo $model->id_ocupacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>