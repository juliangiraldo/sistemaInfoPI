<?php

/**
 * This is the model class for table "diagnostico".
 *
 * The followings are the available columns in table 'diagnostico':
 * @property integer $id_diagnostico
 * @property integer $id_categoria
 * @property string $descripcion
 * @property integer $creado_por
 * @property string $fecha_creacion
 * @property integer $modificado_por
 * @property string $fecha_modificacion
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property CategoriaDiagnostico $idCategoria
 * @property Analisis[] $analisises
 * @property Anamnesis[] $anamnesises
 * @property Sintomas[] $sintomases
 */
class Diagnostico extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diagnostico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_categoria, descripcion, creado_por, fecha_creacion, estado', 'required'),
			array('id_categoria, creado_por, modificado_por, estado', 'numerical', 'integerOnly'=>true),
			array('fecha_modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_diagnostico, id_categoria, descripcion, creado_por, fecha_creacion, modificado_por, fecha_modificacion, estado', 'safe', 'on'=>'search'),
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
			'idCategoria' => array(self::BELONGS_TO, 'CategoriaDiagnostico', 'id_categoria'),
			'analisises' => array(self::MANY_MANY, 'Analisis', 'diagnostico_analisis(id_diagnostico, id_analisis)'),
			'anamnesises' => array(self::MANY_MANY, 'Anamnesis', 'diagnostico_anamnesis(id_diagnostico, id_anamnesis)'),
			'sintomases' => array(self::MANY_MANY, 'Sintomas', 'sintomas_diagnostico(id_diagnostico, id_sintoma)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_diagnostico' => 'Id Diagnostico',
			'id_categoria' => 'Id Categoria',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('id_diagnostico',$this->id_diagnostico);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('descripcion',$this->descripcion,true);
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
	 * @return Diagnostico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
