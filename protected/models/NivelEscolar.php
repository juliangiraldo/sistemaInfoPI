<?php

/**
 * Esta es la clase de modelo para la tabla "nivel_escolar".
 *
 * Las siguientes son las columnas disponibles en la tabla 'nivel_escolar':
 * @property integer $id_nivel_escolar
 * @property string $descripcion
 * @property integer $creado_por
 * @property string $fecha_creacion
 * @property integer $modificado_por
 * @property string $fecha_modificacion
 * @property integer $estado
 *
 * Las siguientes son las relaciones de modelos disponibles:
 * @property Pacientes[] $pacientes
 */
class NivelEscolar extends ActiveRecord
{
	/**
	 * Devuelve el modelo estático de la clase AR especificado.
	 * @param string $className active record class name.
	 * @return NivelEscolar the static model class
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
		return 'nivel_escolar';
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
			array('creado_por, modificado_por, estado', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>200),
			array('fecha_modificacion', 'safe'),
			// La siguiente regla es utilizada por search ().
            // Por favor quite los atributos que no se debe buscar.
			array('id_nivel_escolar, descripcion, creado_por, fecha_creacion, modificado_por, fecha_modificacion, estado', 'safe', 'on'=>'search'),
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
			'pacientes' => array(self::HAS_MANY, 'Pacientes', 'id_nivel_escolar'),
		);
	}

	/**
	 * @return array etiquetas de atributos personalizados (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_nivel_escolar' => 'Id Nivel Escolar',
			'descripcion' => 'Descripcion',
			'creado_por' => 'Creado Por',
			'fecha_creacion' => 'Fecha Creacion',
			'modificado_por' => 'Modificado Por',
			'fecha_modificacion' => 'Fecha Modificacion',
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

		$criteria->compare('id_nivel_escolar',$this->id_nivel_escolar);
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
}