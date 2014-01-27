<?php
/* @var $this MedicamentoController */
/* @var $model Medicamento */

$this->breadcrumbs=array(
	'Medicamentos'=>array('index'),
	$model->id_medicamento=>array('view','id'=>$model->id_medicamento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Medicamento', 'url'=>array('index')),
	array('label'=>'Crear Medicamento', 'url'=>array('create')),
	array('label'=>'Ver Medicamento', 'url'=>array('view', 'id'=>$model->id_medicamento)),
	array('label'=>'Administrar Medicamento', 'url'=>array('admin')),
);
?>

<h1>Actualizar Medicamento <?php echo $model->id_medicamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>