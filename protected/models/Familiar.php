<?php

/**
 * This is the model class for table "familiares".
 *
 * The followings are the available columns in table 'familiares':
 * @property integer $id_familiar
 * @property integer $id_paciente
 * @property integer $id_tipo_familiar
 * @property integer $id_estado_civil
 * @property string $nombre
 * @property string $apellido1
 * @property integer $numero_hijos
 * @property string $apellido2
 * @property integer $telefono
 * @property integer $creado_por
 * @property string $fecha_creacion
 * @property integer $modificado_por
 * @property string $fecha_modificacion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Ocupaciones[] $ocupaciones
 * @property EstadoCivil $idEstadoCivil
 * @property Pacientes $idPaciente
 * @property TipoFamiliar $idTipoFamiliar
 */
class Familiar extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'familiares';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_paciente, id_tipo_familiar, id_estado_civil, nombre, apellido1, numero_hijos, creado_por, fecha_creacion, estado', 'required'),
			array('id_paciente, id_tipo_familiar, id_estado_civil, numero_hijos, telefono, creado_por, modificado_por, estado', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido1, apellido2', 'length', 'max'=>60),
			array('fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_familiar, id_paciente, id_tipo_familiar, id_estado_civil, nombre, apellido1, numero_hijos, apellido2, telefono, creado_por, fecha_creacion, modificado_por, fecha_modificacion, estado', 'safe', 'on'=>'search'),
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
			'ocupaciones' => array(self::MANY_MANY, 'Ocupaciones', 'familiar_ocupaciones(id_familiar, id_ocupacion)'),
			'idEstadoCivil' => array(self::BELONGS_TO, 'EstadoCivil', 'id_estado_civil'),
			'idPaciente' => array(self::BELONGS_TO, 'Pacientes', 'id_paciente'),
			'idTipoFamiliar' => array(self::BELONGS_TO, 'TipoFamiliar', 'id_tipo_familiar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_familiar' => 'Id Familiar',
			'id_paciente' => 'Id Paciente',
			'id_tipo_familiar' => 'Id Tipo Familiar',
			'id_estado_civil' => 'Id Estado Civil',
			'nombre' => 'Nombre',
			'apellido1' => 'Apellido1',
			'numero_hijos' => 'Numero Hijos',
			'apellido2' => 'Apellido2',
			'telefono' => 'Telefono',
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

		$criteria->compare('id_familiar',$this->id_familiar);
		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('id_tipo_familiar',$this->id_tipo_familiar);
		$criteria->compare('id_estado_civil',$this->id_estado_civil);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido1',$this->apellido1,true);
		$criteria->compare('numero_hijos',$this->numero_hijos);
		$criteria->compare('apellido2',$this->apellido2,true);
		$criteria->compare('telefono',$this->telefono);
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
	 * @return Familiar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
