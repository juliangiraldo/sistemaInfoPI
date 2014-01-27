<?php

/**
 * This is the model class for table "analisis".
 *
 * The followings are the available columns in table 'analisis':
 * @property integer $id_analisis
 * @property string $numero_historia
 * @property integer $id_paciente
 * @property string $motivo_consulta
 * @property string $niveles_de_logo
 * @property string $meta_terapeutica
 * @property string $concepto
 * @property string $evolucion_paciente
 * @property string $accion_psicologica
 * @property string $observaciones
 * @property integer $creado_por
 * @property string $fecha_creacion
 * @property integer $modificado_por
 * @property string $fecha_modificacion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Pacientes $idPaciente
 * @property Diagnostico[] $diagnosticos
 * @property Enfermedades[] $enfermedades
 * @property MotivosConsulta[] $motivosConsultas
 * @property Pruebas[] $pruebases
 * @property Sesiones[] $sesiones
 */
class Analisis extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'analisis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_historia, id_paciente, motivo_consulta, creado_por, fecha_creacion, estado', 'required'),
			array('id_paciente, creado_por, modificado_por, estado', 'numerical', 'integerOnly'=>true),
			array('numero_historia', 'length', 'max'=>15),
			array('niveles_de_logo, meta_terapeutica, concepto, evolucion_paciente, accion_psicologica, observaciones, fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_analisis, numero_historia, id_paciente, motivo_consulta, niveles_de_logo, meta_terapeutica, concepto, evolucion_paciente, accion_psicologica, observaciones, creado_por, fecha_creacion, modificado_por, fecha_modificacion, estado', 'safe', 'on'=>'search'),
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
			'diagnosticos' => array(self::MANY_MANY, 'Diagnostico', 'diagnostico_analisis(id_analisis, id_diagnostico)'),
			'enfermedades' => array(self::MANY_MANY, 'Enfermedades', 'enfermedades_analisis(id_analisis, id_enfermedad)'),
			'motivosConsultas' => array(self::MANY_MANY, 'MotivosConsulta', 'motivos_analisis(id_analisis, id_motivo)'),
			'pruebases' => array(self::HAS_MANY, 'Pruebas', 'id_analisis'),
			'sesiones' => array(self::HAS_MANY, 'Sesiones', 'id_analisis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_analisis' => 'Id Analisis',
			'numero_historia' => 'Numero Historia',
			'id_paciente' => 'Id Paciente',
			'motivo_consulta' => 'Motivo Consulta',
			'niveles_de_logo' => 'Niveles De Logo',
			'meta_terapeutica' => 'Meta Terapeutica',
			'concepto' => 'Concepto',
			'evolucion_paciente' => 'Evolucion Paciente',
			'accion_psicologica' => 'Accion Psicologica',
			'observaciones' => 'Observaciones',
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

		$criteria->compare('id_analisis',$this->id_analisis);
		$criteria->compare('numero_historia',$this->numero_historia,true);
		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('motivo_consulta',$this->motivo_consulta,true);
		$criteria->compare('niveles_de_logo',$this->niveles_de_logo,true);
		$criteria->compare('meta_terapeutica',$this->meta_terapeutica,true);
		$criteria->compare('concepto',$this->concepto,true);
		$criteria->compare('evolucion_paciente',$this->evolucion_paciente,true);
		$criteria->compare('accion_psicologica',$this->accion_psicologica,true);
		$criteria->compare('observaciones',$this->observaciones,true);
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
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Analisis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
