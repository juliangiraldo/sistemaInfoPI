<?php
/* @var $this NivelEscolarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nivel Escolars',
);

$this->menu=array(
	array('label'=>'Crear NivelEscolar', 'url'=>array('create')),
	array('label'=>'Administrar NivelEscolar', 'url'=>array('admin')),
);
?>

<h1>Nivel Escolars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
