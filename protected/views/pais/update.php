<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->id_pais=>array('view','id'=>$model->id_pais),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Pais', 'url'=>array('index')),
	array('label'=>'Crear Pais', 'url'=>array('create')),
	array('label'=>'Ver Pais', 'url'=>array('view', 'id'=>$model->id_pais)),
	array('label'=>'Administrar Pais', 'url'=>array('admin')),
);
?>

<h1>Actualizar Pais <?php echo $model->id_pais; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>