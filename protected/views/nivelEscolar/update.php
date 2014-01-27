<?php
/* @var $this NivelEscolarController */
/* @var $model NivelEscolar */

$this->breadcrumbs=array(
	'Nivel Escolars'=>array('index'),
	$model->id_nivel_escolar=>array('view','id'=>$model->id_nivel_escolar),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar NivelEscolar', 'url'=>array('index')),
	array('label'=>'Crear NivelEscolar', 'url'=>array('create')),
	array('label'=>'Ver NivelEscolar', 'url'=>array('view', 'id'=>$model->id_nivel_escolar)),
	array('label'=>'Administrar NivelEscolar', 'url'=>array('admin')),
);
?>

<h1>Actualizar NivelEscolar <?php echo $model->id_nivel_escolar; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>