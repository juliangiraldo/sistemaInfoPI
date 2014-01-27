<?php
/* @var $this TipoAntecedenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Antecedentes',
);

$this->menu=array(
	array('label'=>'Crear TipoAntecedente', 'url'=>array('create')),
	array('label'=>'Administrar TipoAntecedente', 'url'=>array('admin')),
);
?>

<h1>Tipo Antecedentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
