<?php
/* @var $this CirujiaController */
/* @var $model Cirujia */

$this->breadcrumbs=array(
	'Cirujias'=>array('index'),
	$model->id_cirujia=>array('view','id'=>$model->id_cirujia),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Cirujia', 'url'=>array('index')),
	array('label'=>'Crear Cirujia', 'url'=>array('create')),
	array('label'=>'Ver Cirujia', 'url'=>array('view', 'id'=>$model->id_cirujia)),
	array('label'=>'Administrar Cirujia', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cirujia <?php echo $model->id_cirujia; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>