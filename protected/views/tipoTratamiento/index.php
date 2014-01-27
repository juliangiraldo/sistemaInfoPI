<?php
/* @var $this TipoTratamientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Tratamientos',
);

$this->menu=array(
	array('label'=>'Crear TipoTratamiento', 'url'=>array('create')),
	array('label'=>'Administrar TipoTratamiento', 'url'=>array('admin')),
);
?>

<h1>Tipo Tratamientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
