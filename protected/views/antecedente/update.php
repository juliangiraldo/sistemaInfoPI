<?php
/* @var $this AntecedenteController */
/* @var $model Antecedente */

$this->breadcrumbs=array(
	'Antecedentes'=>array('index'),
	$model->id_antecedente=>array('view','id'=>$model->id_antecedente),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Antecedente', 'url'=>array('index')),
	array('label'=>'Crear Antecedente', 'url'=>array('create')),
	array('label'=>'Ver Antecedente', 'url'=>array('view', 'id'=>$model->id_antecedente)),
	array('label'=>'Administrar Antecedente', 'url'=>array('admin')),
);
?>

<h1>Actualizar Antecedente <?php echo $model->id_antecedente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>