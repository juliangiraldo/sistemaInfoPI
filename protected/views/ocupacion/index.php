<?php
/* @var $this OcupacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ocupacions',
);

$this->menu=array(
	array('label'=>'Crear Ocupacion', 'url'=>array('create')),
	array('label'=>'Administrar Ocupacion', 'url'=>array('admin')),
);
?>

<h1>Ocupacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
