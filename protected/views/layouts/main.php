<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body class="body-color">

        <div class="container" id="page">

            <div id="header">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/psicologia.png', 'PsicoInfo', array('style'=>'float:left;padding-left:5px;','width' => '75')) ?>
                <div id="logo">                    
                    <?php echo CHtml::encode(Yii::app()->name); ?>
                </div>
            </div><!-- header -->

            <div id="mainmenu" style="clear: both;">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Inicio', 'url' => array('/site/index')),
                        array('label' => 'Pacientes', 'url' => array('/paciente/index'), 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Anamnesis', 'url' => array('/anamnesis/index')),
//                                array('label' => 'Categoría diagnóstico', 'url' => array('/categoriaDiagnostico/index')),
                            ),),
//                        array('label' => 'Anamnesis', 'url' => array('/anamnesis/index'), 'visible' => !Yii::app()->user->isGuest),
                        //				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>!Yii::app()->user->isGuest),
                        //				array('label'=>'Contact', 'url'=>array('/site/contact'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label' => 'Diagnósticos', 'url' => array('/diagnostico/index'), 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Síntomas', 'url' => array('/sintoma/index')),
                                array('label' => 'Categoría diagnóstico', 'url' => array('/categoriaDiagnostico/index')),
                            ),),
                        array('label' => 'Configuración clínica', 'url' => array(''), 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Antecedentes', 'url' => array('/antecedente/index')),
                                array('label' => 'Deportes', 'url' => array('/deporte/index')),
                                array('label' => 'Ocupaciones', 'url' => array('/ocupación/index')),
                                array('label' => 'Cirujías', 'url' => array('/cirujia/index')),
                                array('label' => 'Enfermedades', 'url' => array('/enfermedad/index')),
                                array('label' => 'Estupefacientes', 'url' => array('/estupefaciente/index')),
                                array('label' => 'Medicamentos', 'url' => array('/medicamento/index')),
                                array('label' => 'Motivos de consulta', 'url' => array('/motivoConsulta/index')),
                                array('label' => 'Tipo tratamientos', 'url' => array('/tipoTratamiento/index')),
                                array('label' => 'Tratamientos', 'url' => array('/tratamiento/index')),
                                array('label' => 'Tipo antecedentes', 'url' => array('/tipoAntecedente/index')),
                            ),),
                        array('label' => 'Reportes', 'url' => '#', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Síntomas', 'url' => array('/sintoma/index')),
                                array('label' => 'Categoría diagnóstico', 'url' => array('/categoriaDiagnostico/index')),
                            ),),
                        array('label' => 'Agenda', 'url' => array('/agenda/index'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Configuración', 'url' => '#', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Admin usuarios', 'url' => array('/usuario/index')),
                                array('label' => 'Estados civiles', 'url' => array('/estadoCivil/index')),
                                array('label' => 'Niveles escolares', 'url' => array('/nivelEscolar/index')),
                                array('label' => 'Tipo familiares', 'url' => array('/tipoFamiliar/index')),
                                array('label' => 'Género', 'url' => array('/genero/index')),
                                array('label' => 'Barrios', 'url' => array('/barrio/index')),
                                array('label' => 'Ciudades', 'url' => array('/ciudad/index')),
                                array('label' => 'Departamentos', 'url' => array('/departamento/index')),
                                array('label' => 'Países', 'url' => array('/pais/index')),
                            ),),            
                        array('label' => 'Iniciar sesión', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Cerrar sesión (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by <?php echo CHtml::encode(Yii::app()->name); ?>.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
