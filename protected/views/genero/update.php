<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Generos'=>array('index'),
	$model->id_genero=>array('view','id'=>$model->id_genero),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Genero', 'url'=>array('index')),
	array('label'=>'Crear Genero', 'url'=>array('create')),
	array('label'=>'Ver Genero', 'url'=>array('view', 'id'=>$model->id_genero)),
	array('label'=>'Administrar Genero', 'url'=>array('admin')),
);
?>

<h1>Actualizar Genero <?php echo $model->id_genero; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>