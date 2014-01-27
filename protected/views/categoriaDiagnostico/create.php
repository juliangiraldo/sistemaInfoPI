<?php
/* @var $this CategoriaDiagnosticoController */
/* @var $model CategoriaDiagnostico */

$this->breadcrumbs=array(
	'Categoria Diagnosticos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar CategoriaDiagnostico', 'url'=>array('index')),
	array('label'=>'Administrar CategoriaDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Crear CategoriaDiagnostico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>