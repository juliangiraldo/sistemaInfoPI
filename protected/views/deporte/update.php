<?php
/* @var $this DeporteController */
/* @var $model Deporte */

$this->breadcrumbs=array(
	'Deportes'=>array('index'),
	$model->id_deporte=>array('view','id'=>$model->id_deporte),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Deporte', 'url'=>array('index')),
	array('label'=>'Crear Deporte', 'url'=>array('create')),
	array('label'=>'Ver Deporte', 'url'=>array('view', 'id'=>$model->id_deporte)),
	array('label'=>'Administrar Deporte', 'url'=>array('admin')),
);
?>

<h1>Actualizar Deporte <?php echo $model->id_deporte; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>