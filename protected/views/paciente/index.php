<?php
/* @var $this PacienteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paciente',
);

$this->menu=array(
	array('label'=>'Crear paciente', 'url'=>array('create')),
	array('label'=>'Administrar pacientes', 'url'=>array('admin')),
);
?>

<h1>Paciente</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'ajaxUpdate'=>true,   
    'sortableAttributes'=>array(
        'identificacion',
        'nombre',
        'apellido1'
    ),
)); ?>
