<?php

/**
 * This is the model class for table "pruebas".
 *
 * The followings are the available columns in table 'pruebas':
 * @property integer $id_prueba
 * @property integer $id_analisis
 * @property string $nombre_prueba
 * @property string $observaciones
 * @property integer $creado_por
 * @property string $fecha_creacion
 * @property integer $modificado_por
 * @property string $fecha_modificacion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Analisis $idAnalisis
 */
class Prueba extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pruebas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_analisis, nombre_prueba, observaciones, creado_por, fecha_creacion, estado', 'required'),
			array('id_analisis, creado_por, modificado_por, estado', 'numerical', 'integerOnly'=>true),
			array('nombre_prueba', 'length', 'max'=>100),
			array('fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_prueba, id_analisis, nombre_prueba, observaciones, creado_por, fecha_creacion, modificado_por, fecha_modificacion, estado', 'safe', 'on'=>'search'),
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
			'idAnalisis' => array(self::BELONGS_TO, 'Analisis', 'id_analisis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_prueba' => 'Id Prueba',
			'id_analisis' => 'Id Analisis',
			'nombre_prueba' => 'Nombre Prueba',
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

		$criteria->compare('id_prueba',$this->id_prueba);
		$criteria->compare('id_analisis',$this->id_analisis);
		$criteria->compare('nombre_prueba',$this->nombre_prueba,true);
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
	 * Please note that you should have this exact method in all your ActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Prueba the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
