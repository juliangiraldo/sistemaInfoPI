<?php
/* @var $this FamiliarController */
/* @var $model Familiar */

$this->breadcrumbs=array(
	'Familiars'=>array('index'),
	$model->id_familiar=>array('view','id'=>$model->id_familiar),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Familiar', 'url'=>array('index')),
	array('label'=>'Crear Familiar', 'url'=>array('create')),
	array('label'=>'Ver Familiar', 'url'=>array('view', 'id'=>$model->id_familiar)),
	array('label'=>'Administrar Familiar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Familiar <?php echo $model->id_familiar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>