<?php
/* @var $this TipoAntecedenteController */
/* @var $model TipoAntecedente */

$this->breadcrumbs=array(
	'Tipo Antecedentes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TipoAntecedente', 'url'=>array('index')),
	array('label'=>'Administrar TipoAntecedente', 'url'=>array('admin')),
);
?>

<h1>Crear TipoAntecedente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>