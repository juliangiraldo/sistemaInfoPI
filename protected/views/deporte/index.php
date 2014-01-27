<?php
/* @var $this DeporteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Deportes',
);

$this->menu=array(
	array('label'=>'Crear Deporte', 'url'=>array('create')),
	array('label'=>'Administrar Deporte', 'url'=>array('admin')),
);
?>

<h1>Deportes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
