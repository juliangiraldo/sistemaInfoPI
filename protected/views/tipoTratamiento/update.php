<?php
/* @var $this TipoTratamientoController */
/* @var $model TipoTratamiento */

$this->breadcrumbs=array(
	'Tipo Tratamientos'=>array('index'),
	$model->id_tipo_tratamiento=>array('view','id'=>$model->id_tipo_tratamiento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TipoTratamiento', 'url'=>array('index')),
	array('label'=>'Crear TipoTratamiento', 'url'=>array('create')),
	array('label'=>'Ver TipoTratamiento', 'url'=>array('view', 'id'=>$model->id_tipo_tratamiento)),
	array('label'=>'Administrar TipoTratamiento', 'url'=>array('admin')),
);
?>

<h1>Actualizar TipoTratamiento <?php echo $model->id_tipo_tratamiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>