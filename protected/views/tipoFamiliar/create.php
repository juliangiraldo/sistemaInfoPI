<?php
/* @var $this TipoFamiliarController */
/* @var $model TipoFamiliar */

$this->breadcrumbs=array(
	'Tipo Familiars'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TipoFamiliar', 'url'=>array('index')),
	array('label'=>'Administrar TipoFamiliar', 'url'=>array('admin')),
);
?>

<h1>Crear TipoFamiliar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>