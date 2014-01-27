<?php
/* @var $this TipoFamiliarController */
/* @var $model TipoFamiliar */

$this->breadcrumbs=array(
	'Tipo Familiars'=>array('index'),
	$model->id_tipo_familiar=>array('view','id'=>$model->id_tipo_familiar),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TipoFamiliar', 'url'=>array('index')),
	array('label'=>'Crear TipoFamiliar', 'url'=>array('create')),
	array('label'=>'Ver TipoFamiliar', 'url'=>array('view', 'id'=>$model->id_tipo_familiar)),
	array('label'=>'Administrar TipoFamiliar', 'url'=>array('admin')),
);
?>

<h1>Actualizar TipoFamiliar <?php echo $model->id_tipo_familiar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>