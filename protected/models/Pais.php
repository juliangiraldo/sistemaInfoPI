<?php

/**
 * This is the model class for table "paises".
 *
 * The followings are the available columns in table 'paises':
 * @property integer $id_pais
 * @property string $descripcion
 * @property string $dominio
 * @property string $indicativo
 */
class Pais extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paises';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, dominio, indicativo', 'required'),
			array('descripcion', 'length', 'max'=>35),
			array('dominio', 'length', 'max'=>2),
			array('indicativo', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pais, descripcion, dominio, indicativo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pais' => 'Id Pais',
			'descripcion' => 'Descripcion',
			'dominio' => 'Dominio',
			'indicativo' => 'Indicativo',
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

		$criteria->compare('id_pais',$this->id_pais);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('dominio',$this->dominio,true);
		$criteria->compare('indicativo',$this->indicativo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your ActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pais the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
