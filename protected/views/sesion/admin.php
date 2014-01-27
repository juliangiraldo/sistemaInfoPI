<?php
/* @var $this SesionController */
/* @var $model Sesion */

$this->breadcrumbs=array(
	'Sesions'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Sesion', 'url'=>array('index')),
	array('label'=>'Crear Sesion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sesion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Sesions</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al inicio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sesion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_sesion',
		'id_analisis',
		'session',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		/*
		'fecha_modificacion',
		'estado',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
