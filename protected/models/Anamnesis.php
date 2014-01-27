<?php

/**
 * This is the model class for table "anamnesis".
 *
 * The followings are the available columns in table 'anamnesis':
 * @property integer $id_anamnesis
 * @property integer $id_paciente
 * @property string $actividades
 * @property integer $id_tratamiento_actual
 * @property string $referido_por
 * @property string $motivo_remision
 * @property integer $creado_por
 * @property string $fecha_creacion
 * @property integer $modificado_por
 * @property string $fecha_modificacion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Pacientes $idPaciente
 * @property Tratamientos $idTratamientoActual
 * @property Cirujias[] $cirujiases
 * @property Deportes[] $deportes
 * @property Diagnostico[] $diagnosticos
 * @property Enfermedades[] $enfermedades
 * @property Estupefacientes[] $estupefacientes
 * @property Medicamentos[] $medicamentoses
 * @property Tratamientos[] $tratamientoses
 */
class Anamnesis extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anamnesis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_paciente, actividades, creado_por, fecha_creacion, estado', 'required'),
			array('id_paciente, id_tratamiento_actual, creado_por, modificado_por, estado', 'numerical', 'integerOnly'=>true),
			array('referido_por', 'length', 'max'=>200),
			array('motivo_remision, fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_anamnesis, id_paciente, actividades, id_tratamiento_actual, referido_por, motivo_remision, creado_por, fecha_creacion, modificado_por, fecha_modificacion, estado', 'safe', 'on'=>'search'),
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
			'idTratamientoActual' => array(self::BELONGS_TO, 'Tratamientos', 'id_tratamiento_actual'),
			'cirujiases' => array(self::MANY_MANY, 'Cirujias', 'cirujias_anammnesis(id_anamnesis, id_cirujia)'),
			'deportes' => array(self::MANY_MANY, 'Deportes', 'deportes_anamnesis(id_anamnesis, id_deporte)'),
			'diagnosticos' => array(self::MANY_MANY, 'Diagnostico', 'diagnostico_anamnesis(id_anamnesis, id_diagnostico)'),
			'enfermedades' => array(self::MANY_MANY, 'Enfermedades', 'enfermedades_anamnesis(id_anamnesis, id_enferm_anam)'),
			'estupefacientes' => array(self::MANY_MANY, 'Estupefacientes', 'estupefa_anamnesis(id_anamnesis, id_estupefaciente)'),
			'medicamentoses' => array(self::MANY_MANY, 'Medicamentos', 'medicamentos_anamnesis(id_anamnesis, id_medicamento)'),
			'tratamientoses' => array(self::MANY_MANY, 'Tratamientos', 'tratamientos_anammnesis(id_anamnesis, id_tratamiento)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_anamnesis' => 'Id Anamnesis',
			'id_paciente' => 'Id Paciente',
			'actividades' => 'Actividades',
			'id_tratamiento_actual' => 'Id Tratamiento Actual',
			'referido_por' => 'Referido Por',
			'motivo_remision' => 'Motivo Remision',
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

		$criteria->compare('id_anamnesis',$this->id_anamnesis);
		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('actividades',$this->actividades,true);
		$criteria->compare('id_tratamiento_actual',$this->id_tratamiento_actual);
		$criteria->compare('referido_por',$this->referido_por,true);
		$criteria->compare('motivo_remision',$this->motivo_remision,true);
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
	 * @return Anamnesis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
