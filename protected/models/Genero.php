<?php

/**
 * Esta es la clase de modelo para la tabla "genero".
 *
 * Las siguientes son las columnas disponibles en la tabla 'genero':
 * @property integer $id_genero
 * @property string $descripcion
 *
 * Las siguientes son las relaciones de modelos disponibles:
 * @property Pacientes[] $pacientes
 */
class Genero extends ActiveRecord
{
	/**
	 * Devuelve el modelo estático de la clase AR especificado.
	 * @param string $className active record class name.
	 * @return Genero the static model class
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
		return 'genero';
	}

	/**
	 * @return array reglas de validación de atributos del modelo.
	 */
	public function rules()
	{
		// NOTE: sólo debe definir las reglas para los atributos que
        // recibirán entradas del usuario.
		return array(
			array('descripcion', 'required'),
			array('descripcion', 'length', 'max'=>45),
			// La siguiente regla es utilizada por search ().
            // Por favor quite los atributos que no se debe buscar.
			array('id_genero, descripcion', 'safe', 'on'=>'search'),
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
			'pacientes' => array(self::HAS_MANY, 'Pacientes', 'id_genero'),
		);
	}

	/**
	 * @return array etiquetas de atributos personalizados (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_genero' => 'Id Genero',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('id_genero',$this->id_genero);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}