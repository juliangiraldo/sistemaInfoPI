<?php
/* @var $this TipoFamiliarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Familiars',
);

$this->menu=array(
	array('label'=>'Crear TipoFamiliar', 'url'=>array('create')),
	array('label'=>'Administrar TipoFamiliar', 'url'=>array('admin')),
);
?>

<h1>Tipo Familiars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
