<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('index'),
	$model->nombre.' '.$model->apellido1.' '.$model->apellido2,
);

$this->menu=array(
//    array('label'=>'Historial psicológico', 'url'=>array('analisis/admin', 'id'=>$model->id_paciente)),
//	array('label'=>'Listar Paciente', 'url'=>array('index')),
	array('label'=>'Crear paciente', 'url'=>array('create')),
	array('label'=>'Actualizar paciente', 'url'=>array('update', 'id'=>$model->id_paciente)),
	array('label'=>'Administrar pacientes', 'url'=>array('admin')),
//	array('label'=>'Composición familiar', 'url'=>array('admin/familiares','pac'=>$model->id_paciente)),
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'identificacion',
		'nombre',
		'apellido1',
		'apellido2',
		array(
            'label'=>$model->getAttributeLabel('id_genero'),
            'value'=>$model->idGenero->descripcion,
        ),
		array(
            'label'=>$model->getAttributeLabel('id_nivel_escolar'),
            'value'=>$model->idNivelEscolar->descripcion,
        ),
        array(
            'label'=>$model->getAttributeLabel('id_lugar_nac'),
            'value'=>$model->idLugarNac->descripcion,
        ),
		'direccion',
		'tiempo',
		array(
            'label'=>$model->getAttributeLabel('id_barrio'),
            'value'=>$model->idBarrio->descripcion,
        ),
		'telefono1',
		'telefono2',
		'celular',
		'estrato',
		array(
            'label'=>$model->getAttributeLabel('id_estado_civil'),
            'value'=>$model->idEstadoCivil->descripcion,
        ),
		'fecha_nacimiento',
		/*'observaciones_fam',
		'motivo_remision',
		'nombre_remitente',
		'creado_por',
		'fecha_creacion',
		'modificado_por',
		'fecha_modificacion',
		'nombre_padre',
		'apellido1_padre',
		'apellido2_padre',
		'edad_padre',
		'id_estado_civil_padre',
		'nombre_madre',
		'apellido1_madre',
		'apellido2_madre',
		'edad_madre',
		'id_estado_civil_madre',*/
	),
)); ?>
