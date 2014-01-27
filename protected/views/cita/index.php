<?php
/* @var $this CitaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Citas',
);

$this->menu=array(
	array('label'=>'Crear Cita', 'url'=>array('create')),
	array('label'=>'Administrar Cita', 'url'=>array('admin')),
);
?>

<h1>Citas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
