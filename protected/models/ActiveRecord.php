<?php

/**
 * Description of MasterAdmin
 *
 * @author jgiraldo
 */
class ActiveRecord extends CActiveRecord {
    public $defaultAction = '';
    public function beforeSave() {
        if ($this->isNewRecord) { // only if adding new record
            if ($this->hasAttribute('fecha_creacion')) // if model have createdDate Field
                $this->fecha_creacion = new CDbExpression('NOW()'); // set createdDate value   
            if ($this->hasAttribute('estado')) // if model have createdDate Field
                $this->estado = 1; // set createdDate value   
            if ($this->hasAttribute('creado_por')) // if model have createdDate Field
                $this->creado_por = 1; // set createdDate value   
//            if ($this->hasAttribute('createdIp')) // if model have createdIp Field
//                $this->createdIp = CHttpRequest::getUserHostAddress(); // set user's ip
        } else {

            if ($this->hasAttribute('fecha_modificacion')) // if model have updatedDate Field
                $this->fecha_modificacion = new CDbExpression('NOW()'); // set updatedDate value   
    //        if ($this->hasAttribute('updatedIp')) // if model have updatedIp Field
    //            $this->updatedIp = CHttpRequest::getUserHostAddress(); // set user's ip
        }
        return parent::beforeSave();
    }

}

?>
