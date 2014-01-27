<?php
/* @var $this CategoriaDiagnosticoController */
/* @var $model CategoriaDiagnostico */

$this->breadcrumbs=array(
	'Categoria Diagnosticos'=>array('index'),
	$model->id_categoria,
);

$this->menu=array(
	array('label'=>'Listar CategoriaDiagnostico', 'url'=>array('index')),
	array('label'=>'Crear CategoriaDiagnostico', 'url'=>array('create')),
	array('label'=>'Actualizar CategoriaDiagnostico', 'url'=>array('update', 'id'=>$model->id_categoria)),
	array('label'=>'Eliminar CategoriaDiagnostico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_categoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar CategoriaDiagnostico', 'url'=>array('admin')),
);
?>

<h1>Ver CategoriaDiagnostico #<?php echo $model->id_categoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_categoria',
		'descripcion',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'estado',
	),
)); ?>
