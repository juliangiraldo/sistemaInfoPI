<?php
/* @var $this TipoTratamientoController */
/* @var $model TipoTratamiento */

$this->breadcrumbs=array(
	'Tipo Tratamientos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TipoTratamiento', 'url'=>array('index')),
	array('label'=>'Administrar TipoTratamiento', 'url'=>array('admin')),
);
?>

<h1>Crear TipoTratamiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>