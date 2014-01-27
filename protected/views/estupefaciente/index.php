<?php
/* @var $this EstupefacienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estupefacientes',
);

$this->menu=array(
	array('label'=>'Crear Estupefaciente', 'url'=>array('create')),
	array('label'=>'Administrar Estupefaciente', 'url'=>array('admin')),
);
?>

<h1>Estupefacientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
