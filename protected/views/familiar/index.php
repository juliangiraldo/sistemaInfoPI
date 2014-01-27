<?php
/* @var $this FamiliarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Familiars',
);

$this->menu=array(
	array('label'=>'Crear Familiar', 'url'=>array('create')),
	array('label'=>'Administrar Familiar', 'url'=>array('admin')),
);
?>

<h1>Familiars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
