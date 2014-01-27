<?php
/* @var $this CirujiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cirujias',
);

$this->menu=array(
	array('label'=>'Crear Cirujia', 'url'=>array('create')),
	array('label'=>'Administrar Cirujia', 'url'=>array('admin')),
);
?>

<h1>Cirujias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
