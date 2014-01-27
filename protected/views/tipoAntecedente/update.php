<?php
/* @var $this TipoAntecedenteController */
/* @var $model TipoAntecedente */

$this->breadcrumbs=array(
	'Tipo Antecedentes'=>array('index'),
	$model->id_tipo_antecedente=>array('view','id'=>$model->id_tipo_antecedente),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TipoAntecedente', 'url'=>array('index')),
	array('label'=>'Crear TipoAntecedente', 'url'=>array('create')),
	array('label'=>'Ver TipoAntecedente', 'url'=>array('view', 'id'=>$model->id_tipo_antecedente)),
	array('label'=>'Administrar TipoAntecedente', 'url'=>array('admin')),
);
?>

<h1>Actualizar TipoAntecedente <?php echo $model->id_tipo_antecedente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>