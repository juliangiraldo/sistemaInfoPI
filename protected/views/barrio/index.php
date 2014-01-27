<?php
/* @var $this BarrioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barrios',
);

$this->menu=array(
	array('label'=>'Crear Barrio', 'url'=>array('create')),
	array('label'=>'Administrar Barrio', 'url'=>array('admin')),
);
?>

<h1>Barrios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
