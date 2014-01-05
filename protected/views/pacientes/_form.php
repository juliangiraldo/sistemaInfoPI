<?php
/* @var $this PacientesController */
/* @var $model Pacientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pacientes-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
    
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion'); ?>
		<?php echo $form->textField($model,'identificacion'); ?>
		<?php echo $form->error($model,'identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido1'); ?>
		<?php echo $form->textField($model,'apellido1',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido2'); ?>
		<?php echo $form->textField($model,'apellido2',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'apellido2'); ?>
	</div>

	<div class="column">
        <?php echo $form->labelEx($model,'id_genero'); ?>
        <?php echo $form->dropDownList($model,'id_genero', CHtml::listData(Genero::model()->findAll(), 'id_genero', 'descripcion'), array('empty'=>'Seleccione...')); ?>
        <?php echo $form->error($model,'id_genero'); ?>
	</div>

	<div class="column">
        <?php echo $form->labelEx($model,'id_nivel_escolar'); ?>
        <?php echo $form->dropDownList($model,'id_nivel_escolar', CHtml::listData(NivelEscolar::model()->findAll(), 'id_nivel_escolar', 'descripcion'), array('empty'=>'Seleccione..')); ?>
        <?php echo $form->error($model,'id_nivel_escolar'); ?>
	</div>
    <div style="clear: both"></div>
    <!-- INICIO COMBOS DEPENDIENTES -->
    <div class="column">
        <?php 

        echo $form->labelEx(Paises::model(), 'id_pais'); ?>
        <?php
        $pais = new CDbCriteria;
        $pais->order = 'descripcion ASC';

        echo $form->dropDownList(Paises::model(), 'id_pais', CHtml::listData(Paises::model()->findAll(), 'id_pais', 'descripcion'), array(
                'ajax' => array(
                    'type' => 'POST',
                    'url' => CController::createUrl('lugares/departamentos'),
                    'update' => '#Departamentos_id_departamento'
                ), 'prompt' => 'Seleccione un país...'
            )
        );
        ?>
        <?php echo $form->error(Paises::model(), 'id_pais'); ?>
    </div>

    <div class="column">
        <?php echo $form->labelEx(Departamentos::model(), 'id_departamento'); 

        $departamento = new CDbCriteria;
        $departamento->order = 'descripcion ASC';

        echo $form->dropDownList(Departamentos::model(), 'id_departamento', array(), array(
                'ajax' => array(
                    'type' => 'POST',
                    'url' => CController::createUrl('lugares/Ciudades'),
                    'update' => '#Pacientes_id_lugar_nac'
                ), 'prompt' => 'Seleccione...'
            )
        );
        echo $form->error(Departamentos::model(), 'id_departamento'); ?>
    </div>
    <div class="column">
        <?php 
        echo $form->labelEx($model, 'id_lugar_nac'); 
        if (! $model->isNewRecord) {
            echo $form->dropDownList($model, 'id_lugar_nac', array('Seleccione...',$model->id_lugar_nac => $model->idLugarNac->descripcion));
        } else {
            echo $form->dropDownList($model, 'id_lugar_nac', array('Seleccione...'));
        }
        echo $form->error($model, 'id_lugar_nac'); 
        ?>
    </div>
    <!-- FIN COMBOS DEPENDIENTES -->
    <div style="clear: both"></div>
	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo'); ?>
		<?php echo $form->textField($model,'tiempo'); ?>
		<?php echo $form->error($model,'tiempo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_barrio'); ?>
        <?php echo $form->dropDownList($model,'id_barrio', CHtml::listData(Barrios::model()->findAll(), 'id_barrio', 'descripcion'), array('empty'=>'Seleccione..')); ?>		
		<?php echo $form->error($model,'id_barrio'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'telefono1'); ?>
		<?php echo $form->textField($model,'telefono1'); ?>
		<?php echo $form->error($model,'telefono1'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'telefono2'); ?>
		<?php echo $form->textField($model,'telefono2'); ?>
		<?php echo $form->error($model,'telefono2'); ?>
	</div>

	<div class="column">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular'); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>
    <div style="clear: both"></div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'id_estado_civil'); ?>
		<?php echo $form->dropDownList($model,'id_estado_civil', CHtml::listData(EstadoCivil::model()->findAll(), 'id_estado_civil', 'descripcion'), array('empty'=>'Seleccione..')); ?>
		<?php echo $form->error($model,'id_estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'=>$model,
            'name'=>'fecha_nacimiento',
            'attribute'=>'fecha_nacimiento',
            // additional javascript options for the date picker plugin
            'options'=>array(
                'showAnim'=>'fold',   
                'showOn' => 'both',             // also opens with a button
                'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
                'showOtherMonths' => true,      // show dates in other months
                'selectOtherMonths' => true,    // can seelect dates in other months
                'changeYear' => true,           // can change year
                'changeMonth' => true,          // can change month
                'yearRange' => '1930:'.date("Y"),     // range of year
                'minDate' => '1930-01-01',      // minimum date
                'maxDate' => date("Y-m-d"),      // maximum date
//                'showButtonPanel' => true,      // show button panel
            ),
            'htmlOptions'=>array(
                'style'=>'height:20px;',                
            ),            
            'language'=>'es',
        ));
        ?>
        <?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'estrato'); ?>
        <?php echo $form->dropDownList($model,'estrato',  
                array(
                    ''=>'Seleccione..',
                    '1'=>'1',
                    '2'=>'2',
                    '3'=>'3',
                    '4'=>'4',
                    '5'=>'5',
                    '6'=>'6',
                )); ?>
		<?php echo $form->error($model,'estrato'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->