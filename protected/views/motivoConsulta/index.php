<?php
/* @var $this MotivoConsultaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Motivo Consultas',
);

$this->menu=array(
	array('label'=>'Crear MotivoConsulta', 'url'=>array('create')),
	array('label'=>'Administrar MotivoConsulta', 'url'=>array('admin')),
);
?>

<h1>Motivo Consultas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
