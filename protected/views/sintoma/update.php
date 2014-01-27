<?php
/* @var $this SintomaController */
/* @var $model Sintoma */

$this->breadcrumbs=array(
	'Sintomas'=>array('index'),
	$model->id_sintoma=>array('view','id'=>$model->id_sintoma),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Sintoma', 'url'=>array('index')),
	array('label'=>'Crear Sintoma', 'url'=>array('create')),
	array('label'=>'Ver Sintoma', 'url'=>array('view', 'id'=>$model->id_sintoma)),
	array('label'=>'Administrar Sintoma', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sintoma <?php echo $model->id_sintoma; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>