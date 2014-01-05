<?php
/* @var $this PacientesController */
/* @var $model Pacientes */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Crear Paciente', 'url'=>array('create')),
);

$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'pac-dialog',
    'options'=>array(
        'title'=>'Pacientes',
        'autoOpen'=>false,
        'modal'=>'true',
        'width'=>'800',
        'height'=>'540',
        'close'=>'js:function(){  
            $("#pac-frame").attr("src","");
        }',
    ),
));
?>
    <iframe id="pac-frame" width="100%" height="100%"></iframe>
<?php
$this->endWidget();

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pacientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Pacientes</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pacientes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/*'id_paciente',*/
		'identificacion',
		'nombre',
		'apellido1',
		'apellido2',
        array(
            'name'=>'id_genero',
            'value'=>'$data->idGenero->descripcion',
        ),
        array(
            'name'=>'id_nivel_escolar',
            'value'=>'$data->idNivelEscolar->descripcion',
        ),
		array(
			'class'=>'CButtonColumn',
            'template' => '{view} {update}',
            'buttons'=>array(
                'update'=>array(
                    'click'=>'js:function(){                        
//                        $("#pac-frame").attr("src",$(this).attr("href"));
//                        $("#pac-dialog").dialog("open");
//                        return false;
                    }',
                ),
                'view'=>array(
                    'click'=>'js:function(){
//                        $("#pac-frame").attr("src",$(this).attr("href"));
//                        $("#pac-dialog").dialog("open");
//                        return false;
                    }',
                ),
            ),
		),
	),
)); ?>
