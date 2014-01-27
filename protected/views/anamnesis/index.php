<?php
/* @var $this AnamnesisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anamnesises',
);

$this->menu=array(
	array('label'=>'Crear Anamnesis', 'url'=>array('create')),
	array('label'=>'Administrar Anamnesis', 'url'=>array('admin')),
);
?>

<h1>Anamnesises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
