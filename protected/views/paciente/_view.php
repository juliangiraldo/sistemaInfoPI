<?php
/* @var $this PacienteController */
/* @var $data Paciente */
?>

<div class="view">
    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_paciente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_paciente), array('view', 'id'=>$data->id_paciente)); ?>
	<br />
    */ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido1')); ?>:</b>
	<?php echo CHtml::encode($data->apellido1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido2')); ?>:</b>
	<?php echo CHtml::encode($data->apellido2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_genero')); ?>:</b>
	<?php echo CHtml::encode($data->idGenero->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nivel_escolar')); ?>:</b>
	<?php echo CHtml::encode($data->idNivelEscolar->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lugar_nac')); ?>:</b>
	<?php echo CHtml::encode($data->idLugarNac->descripcion); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />
    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tiempo')); ?>:</b>
	<?php echo CHtml::encode($data->tiempo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_barrio')); ?>:</b>
	<?php echo CHtml::encode($data->id_barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono1')); ?>:</b>
	<?php echo CHtml::encode($data->telefono1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono2')); ?>:</b>
	<?php echo CHtml::encode($data->telefono2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estrato')); ?>:</b>
	<?php echo CHtml::encode($data->estrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones_fam')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones_fam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo_remision')); ?>:</b>
	<?php echo CHtml::encode($data->motivo_remision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_remitente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_remitente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creado_por')); ?>:</b>
	<?php echo CHtml::encode($data->creado_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificado_por')); ?>:</b>
	<?php echo CHtml::encode($data->modificado_por); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_padre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_padre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido1_padre')); ?>:</b>
	<?php echo CHtml::encode($data->apellido1_padre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido2_padre')); ?>:</b>
	<?php echo CHtml::encode($data->apellido2_padre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad_padre')); ?>:</b>
	<?php echo CHtml::encode($data->edad_padre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado_civil_padre')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado_civil_padre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_madre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_madre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido1_madre')); ?>:</b>
	<?php echo CHtml::encode($data->apellido1_madre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido2_madre')); ?>:</b>
	<?php echo CHtml::encode($data->apellido2_madre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad_madre')); ?>:</b>
	<?php echo CHtml::encode($data->edad_madre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado_civil_madre')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado_civil_madre); ?>
	<br />

	*/ ?>

</div>