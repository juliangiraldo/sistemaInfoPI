<?php
/* @var $this SintomaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sintomas',
);

$this->menu=array(
	array('label'=>'Crear Sintoma', 'url'=>array('create')),
	array('label'=>'Administrar Sintoma', 'url'=>array('admin')),
);
?>

<h1>Sintomas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
