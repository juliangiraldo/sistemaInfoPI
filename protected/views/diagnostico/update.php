<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */

$this->breadcrumbs=array(
	'Diagnosticos'=>array('index'),
	$model->id_diagnostico=>array('view','id'=>$model->id_diagnostico),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Diagnostico', 'url'=>array('index')),
	array('label'=>'Crear Diagnostico', 'url'=>array('create')),
	array('label'=>'Ver Diagnostico', 'url'=>array('view', 'id'=>$model->id_diagnostico)),
	array('label'=>'Administrar Diagnostico', 'url'=>array('admin')),
);
?>

<h1>Actualizar Diagnostico <?php echo $model->id_diagnostico; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>