<?php
/* @var $this AntecedenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Antecedentes',
);

$this->menu=array(
	array('label'=>'Crear Antecedente', 'url'=>array('create')),
	array('label'=>'Administrar Antecedente', 'url'=>array('admin')),
);
?>

<h1>Antecedentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
