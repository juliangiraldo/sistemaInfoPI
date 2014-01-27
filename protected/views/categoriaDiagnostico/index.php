<?php
/* @var $this CategoriaDiagnosticoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoria Diagnosticos',
);

$this->menu=array(
	array('label'=>'Crear CategoriaDiagnostico', 'url'=>array('create')),
	array('label'=>'Administrar CategoriaDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Categoria Diagnosticos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
