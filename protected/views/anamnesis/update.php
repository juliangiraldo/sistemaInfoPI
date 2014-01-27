<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */

$this->breadcrumbs=array(
	'Anamnesises'=>array('index'),
	$model->id_anamnesis=>array('view','id'=>$model->id_anamnesis),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Anamnesis', 'url'=>array('index')),
	array('label'=>'Crear Anamnesis', 'url'=>array('create')),
	array('label'=>'Ver Anamnesis', 'url'=>array('view', 'id'=>$model->id_anamnesis)),
	array('label'=>'Administrar Anamnesis', 'url'=>array('admin')),
);
?>

<h1>Actualizar Anamnesis <?php echo $model->id_anamnesis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>