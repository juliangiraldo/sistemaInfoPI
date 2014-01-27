<?php
/* @var $this MotivoConsultaController */
/* @var $model MotivoConsulta */

$this->breadcrumbs=array(
	'Motivo Consultas'=>array('index'),
	$model->id_motivo=>array('view','id'=>$model->id_motivo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar MotivoConsulta', 'url'=>array('index')),
	array('label'=>'Crear MotivoConsulta', 'url'=>array('create')),
	array('label'=>'Ver MotivoConsulta', 'url'=>array('view', 'id'=>$model->id_motivo)),
	array('label'=>'Administrar MotivoConsulta', 'url'=>array('admin')),
);
?>

<h1>Actualizar MotivoConsulta <?php echo $model->id_motivo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>