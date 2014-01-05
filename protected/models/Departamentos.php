<?php

/**
 * Esta es la clase de modelo para la tabla "departamentos".
 *
 * Las siguientes son las columnas disponibles en la tabla 'departamentos':
 * @property integer $id_departamento
 * @property integer $id_pais
 * @property string $descripcion
 * @property integer $estado
 *
 * Las siguientes son las relaciones de modelos disponibles:
 * @property Ciudades[] $ciudades
 * @property Paises $idPais
 */
class Departamentos extends ActiveRecord
{
	/**
	 * Devuelve el modelo estático de la clase AR especificado.
	 * @param string $className active record class name.
	 * @return Departamentos the static model class
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
		return 'departamentos';
	}

	/**
	 * @return array reglas de validación de atributos del modelo.
	 */
	public function rules()
	{
		// NOTE: sólo debe definir las reglas para los atributos que
        // recibirán entradas del usuario.
		return array(
			array('id_pais, descripcion', 'required'),
			array('id_pais, estado', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>255),
			// La siguiente regla es utilizada por search ().
            // Por favor quite los atributos que no se debe buscar.
			array('id_departamento, id_pais, descripcion, estado', 'safe', 'on'=>'search'),
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
			'ciudades' => array(self::HAS_MANY, 'Ciudades', 'id_departamento'),
			'idPais' => array(self::BELONGS_TO, 'Paises', 'id_pais'),
		);
	}

	/**
	 * @return array etiquetas de atributos personalizados (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_departamento' => 'Departamento',
			'id_pais' => 'Id Pais',
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

		$criteria->compare('id_departamento',$this->id_departamento);
		$criteria->compare('id_pais',$this->id_pais);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}