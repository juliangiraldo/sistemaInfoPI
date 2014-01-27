<?php
/* @var $this EnfermedadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enfermedads',
);

$this->menu=array(
	array('label'=>'Crear Enfermedad', 'url'=>array('create')),
	array('label'=>'Administrar Enfermedad', 'url'=>array('admin')),
);
?>

<h1>Enfermedads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
