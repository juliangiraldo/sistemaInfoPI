<?php
/* @var $this MedicamentoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medicamentos',
);

$this->menu=array(
	array('label'=>'Crear Medicamento', 'url'=>array('create')),
	array('label'=>'Administrar Medicamento', 'url'=>array('admin')),
);
?>

<h1>Medicamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
