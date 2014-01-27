<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */

$this->breadcrumbs=array(
	'Estado Civils'=>array('index'),
	$model->id_estado_civil=>array('view','id'=>$model->id_estado_civil),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar EstadoCivil', 'url'=>array('index')),
	array('label'=>'Crear EstadoCivil', 'url'=>array('create')),
	array('label'=>'Ver EstadoCivil', 'url'=>array('view', 'id'=>$model->id_estado_civil)),
	array('label'=>'Administrar EstadoCivil', 'url'=>array('admin')),
);
?>

<h1>Actualizar EstadoCivil <?php echo $model->id_estado_civil; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>