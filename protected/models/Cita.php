<?php

/**
 * This is the model class for table "citas".
 *
 * The followings are the available columns in table 'citas':
 * @property integer $id_cita
 * @property integer $id_paciente
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property integer $creado_por
 * @property string $fecha_creacion
 * @property integer $modificado_por
 * @property string $fecha_modificacion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Pacientes $idPaciente
 */
class Cita extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'citas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_paciente, fecha_inicio, fecha_fin, creado_por, fecha_creacion, estado', 'required'),
			array('id_paciente, creado_por, modificado_por, estado', 'numerical', 'integerOnly'=>true),
			array('fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cita, id_paciente, fecha_inicio, fecha_fin, creado_por, fecha_creacion, modificado_por, fecha_modificacion, estado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idPaciente' => array(self::BELONGS_TO, 'Pacientes', 'id_paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cita' => 'Id Cita',
			'id_paciente' => 'Id Paciente',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'creado_por' => 'Creado Por',
			'fecha_creacion' => 'Fecha Creacion',
			'modificado_por' => 'Modificado Por',
			'fecha_modificacion' => 'Fecha Modificacion',
			'estado' => 'Estado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_cita',$this->id_cita);
		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('creado_por',$this->creado_por);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('modificado_por',$this->modificado_por);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your ActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
