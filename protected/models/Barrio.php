<?php

/**
 * Esta es la clase de modelo para la tabla "barrios".
 *
 * Las siguientes son las columnas disponibles en la tabla 'barrios':
 * @property integer $id_barrio
 * @property integer $id_ciudad
 * @property string $descripcion
 * @property integer $estado
 *
 * Las siguientes son las relaciones de modelos disponibles:
 * @property Ciudades $idCiudad
 * @property Pacientes[] $pacientes
 */
class Barrio extends ActiveRecord
{
	/**
	 * Devuelve el modelo estático de la clase AR especificado.
	 * @param string $className active record class name.
	 * @return Barrios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string el nombre de tabla de base de datos asociados.
	 */
	public function tableName()
	{
		return 'barrios';
	}

	/**
	 * @return array reglas de validación de atributos del modelo.
	 */
	public function rules()
	{
		// NOTE: sólo debe definir las reglas para los atributos que
        // recibirán entradas del usuario.
		return array(
			array('id_ciudad, descripcion', 'required'),
			array('id_ciudad, estado', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>255),
			// La siguiente regla es utilizada por search ().
            // Por favor quite los atributos que no se debe buscar.
			array('id_barrio, id_ciudad, descripcion, estado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array reglas relacionales.
	 */
	public function relations()
	{
		// NOTA: puede que tenga que ajustar el nombre de la relación y la relacionada
        // nombre de clase para las relaciones que se generan de forma automática a continuación.
		return array(
			'Ciudades' => array(self::BELONGS_TO, 'Ciudades', 'id_ciudad'),
			'Pacientes' => array(self::HAS_MANY, 'Pacientes', 'id_barrio'),
		);
	}

	/**
	 * @return array etiquetas de atributos personalizados (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_barrio' => 'Barrio',
			'id_ciudad' => 'Ciudad',
			'descripcion' => 'Descripcion',
			'estado' => 'Estado',
		);
	}

	/**
	 * Recupera una lista de los modelos basados ​​en el criterio de búsqueda / condiciones de filtro.
	 * @return CActiveDataProvider el proveedor de datos que puede devolver los modelos basados ​​en la búsqueda / condiciones de filtro.
	 */
	public function search()
	{
		// Advertencia: Por favor, modifique el código siguiente para quitar atributos que
        // no debe ser buscado.

		$criteria=new CDbCriteria;

		$criteria->compare('id_barrio',$this->id_barrio);
		$criteria->compare('id_ciudad',$this->id_ciudad);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}