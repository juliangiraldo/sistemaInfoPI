<?php
/* @var $this CategoriaDiagnosticoController */
/* @var $model CategoriaDiagnostico */

$this->breadcrumbs=array(
	'Categoria Diagnosticos'=>array('index'),
	$model->id_categoria=>array('view','id'=>$model->id_categoria),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar CategoriaDiagnostico', 'url'=>array('index')),
	array('label'=>'Crear CategoriaDiagnostico', 'url'=>array('create')),
	array('label'=>'Ver CategoriaDiagnostico', 'url'=>array('view', 'id'=>$model->id_categoria)),
	array('label'=>'Administrar CategoriaDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Actualizar CategoriaDiagnostico <?php echo $model->id_categoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>