<?php
/* @var $this PruebaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pruebas',
);

$this->menu=array(
	array('label'=>'Crear Prueba', 'url'=>array('create')),
	array('label'=>'Administrar Prueba', 'url'=>array('admin')),
);
?>

<h1>Pruebas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
