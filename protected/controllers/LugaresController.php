<?php

class LugaresController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

// Funcion para llenar combobox dependiente de lo que seleccione el usuario en Departamento/Municipio/Corregimiento	

    public function actionDepartamentos() {
        $data = Departamentos::model()->findAll(array(
            'order'=>'descripcion',    
            'condition'=>'id_pais=:parent_id', 
            'params'=>array(':parent_id' => (int) $_POST['Paises']['id_pais'])
        ));

        $data = CHtml::listData($data, 'id_departamento', 'descripcion');
        echo CHtml::tag('option', array('value' => ''), 'Seleccione un departamento...', true);
        foreach ($data as $id => $value) {
            echo CHtml::tag('option', array('value' => $id), CHtml::encode($value), true);
        }
    }

    public function actionCiudades() {
        $data = Ciudades::model()->findAll(array(
            'order'=>'descripcion',    
            'condition'=>'id_departamento=:parent_id', 
            'params'=>array(':parent_id' => (int) $_POST['Departamentos']['id_departamento']))
        );

        $data = CHtml::listData($data, 'id_ciudad', 'descripcion');
        echo CHtml::tag('option', array('value' => ''), 'Seleccione una ciudad...', true);
        foreach ($data as $id => $value) {
            echo CHtml::tag('option', array('value' => $id), CHtml::encode($value), true);
        }
    }    
}