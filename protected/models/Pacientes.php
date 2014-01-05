<?php

/**
 * Esta es la clase de modelo para la tabla "pacientes".
 *
 * Las siguientes son las columnas disponibles en la tabla 'pacientes':
 * @property integer $id_paciente
 * @property integer $identificacion
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property integer $id_genero
 * @property integer $id_nivel_escolar
 * @property integer $id_lugar_nac
 * @property string $direccion
 * @property integer $tiempo
 * @property integer $id_barrio
 * @property integer $telefono1
 * @property integer $telefono2
 * @property integer $celular
 * @property integer $estrato
 * @property integer $id_estado_civil
 * @property string $fecha_nacimiento
 * @property string $observaciones_fam
 * @property string $motivo_remision
 * @property string $nombre_remitente
 * @property integer $creado_por
 * @property string $fecha_creacion
 * @property integer $modificado_por
 * @property string $fecha_modificacion
 * @property string $nombre_padre
 * @property string $apellido1_padre
 * @property string $apellido2_padre
 * @property integer $edad_padre
 * @property integer $id_estado_civil_padre
 * @property string $nombre_madre
 * @property string $apellido1_madre
 * @property string $apellido2_madre
 * @property integer $edad_madre
 * @property integer $id_estado_civil_madre
 *
 * Las siguientes son las relaciones de modelos disponibles:
 * @property Analisis[] $analisises
 * @property Anamnesis[] $anamnesises
 * @property Antecedentes[] $antecedentes
 * @property Citas[] $citases
 * @property Enfermedades[] $enfermedades
 * @property Estupefacientes[] $estupefacientes
 * @property Familiares[] $familiares
 * @property Ocupaciones[] $ocupaciones
 * @property Ciudades $idLugarNac
 * @property Genero $idGenero
 * @property NivelEscolar $idNivelEscolar
 * @property Barrios $idBarrio
 * @property EstadoCivil $idEstadoCivil
 * @property EstadoCivil $idEstadoCivilPadre
 * @property EstadoCivil $idEstadoCivilMadre
 */
class Pacientes extends ActiveRecord
{
	/**
	 * Devuelve el modelo estático de la clase AR especificado.
	 * @param string $className active record class name.
	 * @return Pacientes the static model class
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
		return 'pacientes';
	}

	/**
	 * @return array reglas de validación de atributos del modelo.
	 */
	public function rules()
	{
		// NOTE: sólo debe definir las reglas para los atributos que
        // recibirán entradas del usuario.
		return array(
			array('identificacion, nombre, apellido1, id_genero, id_nivel_escolar, id_lugar_nac, direccion, tiempo, id_barrio, telefono1, estrato, fecha_nacimiento', 'required'),
			array('id_paciente, identificacion, id_genero, id_nivel_escolar, id_lugar_nac, tiempo, id_barrio, telefono1, telefono2, celular, estrato, id_estado_civil, creado_por, modificado_por, edad_padre, id_estado_civil_padre, edad_madre, id_estado_civil_madre', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido1, apellido2, direccion', 'length', 'max'=>100),
			array('nombre_remitente', 'length', 'max'=>200),
			array('nombre_padre, apellido1_padre, apellido2_padre, nombre_madre, apellido1_madre, apellido2_madre', 'length', 'max'=>60),
			array('observaciones_fam, motivo_remision, fecha_modificacion', 'safe'),
			// La siguiente regla es utilizada por search ().
            // Por favor quite los atributos que no se debe buscar.
			array('id_paciente, identificacion, nombre, apellido1, apellido2, id_genero, id_nivel_escolar, id_lugar_nac, direccion, tiempo, id_barrio, telefono1, telefono2, celular, estrato, id_estado_civil, fecha_nacimiento, observaciones_fam, motivo_remision, nombre_remitente, creado_por, fecha_creacion, modificado_por, fecha_modificacion, nombre_padre, apellido1_padre, apellido2_padre, edad_padre, id_estado_civil_padre, nombre_madre, apellido1_madre, apellido2_madre, edad_madre, id_estado_civil_madre', 'safe', 'on'=>'search'),
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
			'analisis' => array(self::HAS_MANY, 'Analisis', 'id_paciente'),
			'anamnesis' => array(self::HAS_MANY, 'Anamnesis', 'id_paciente'),
			'antecedentes' => array(self::HAS_MANY, 'Antecedentes', 'id_paciente'),
			'citas' => array(self::HAS_MANY, 'Citas', 'id_paciente'),
			'enfermedades' => array(self::MANY_MANY, 'Enfermedades', 'enfermedades_padres(id_paciente, id_enfermedad)'),
			'estupefacientes' => array(self::MANY_MANY, 'Estupefacientes', 'estupefacientes_padres(id_paciente, id_estupefaciente)'),
			'familiares' => array(self::HAS_MANY, 'Familiares', 'id_paciente'),
			'ocupaciones' => array(self::MANY_MANY, 'Ocupaciones', 'paciente_ocupaciones(id_paciente, id_ocupacion)'),
			'idLugarNac' => array(self::BELONGS_TO, 'Ciudades', 'id_lugar_nac'),
			'idGenero' => array(self::BELONGS_TO, 'Genero', 'id_genero'),
			'idNivelEscolar' => array(self::BELONGS_TO, 'NivelEscolar', 'id_nivel_escolar'),
			'idBarrio' => array(self::BELONGS_TO, 'Barrios', 'id_barrio'),
			'idEstadoCivil' => array(self::BELONGS_TO, 'EstadoCivil', 'id_estado_civil'),
			'idEstadoCivilPadre' => array(self::BELONGS_TO, 'EstadoCivil', 'id_estado_civil_padre'),
			'idEstadoCivilMadre' => array(self::BELONGS_TO, 'EstadoCivil', 'id_estado_civil_madre'),
		);
	}

	/**
	 * @return array etiquetas de atributos personalizados (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_paciente' => 'Id',
			'identificacion' => 'Identificación',
			'nombre' => 'Nombre',
			'apellido1' => 'Primer apellido',
			'apellido2' => 'Segundo apellido',
			'id_genero' => 'Género',
			'id_nivel_escolar' => 'Nivel académico',
			'id_lugar_nac' => 'Lugar de nacimiento',
			'direccion' => 'Dirección',
			'tiempo' => 'Tiempo',
			'id_barrio' => 'Barrio',
			'telefono1' => 'Teléfono 1',
			'telefono2' => 'Teléfono 2',
			'celular' => 'Celular',
			'estrato' => 'Estrato',
			'id_estado_civil' => 'Estado civil',
			'fecha_nacimiento' => 'Fecha de nacimiento',
			'observaciones_fam' => 'Observaciones familiares',
			'motivo_remision' => 'Motivo de remisión',
			'nombre_remitente' => 'Nombre del remitente',
			'creado_por' => 'Creado por',
			'fecha_creacion' => 'Fecha de creación',
			'modificado_por' => 'Modificado por',
			'fecha_modificacion' => 'Fecha de modificación',
			'nombre_padre' => 'Nombre del padre',
			'apellido1_padre' => 'Primer apellido del padre',
			'apellido2_padre' => 'Segundo apellido del padre',
			'edad_padre' => 'Edad del padre',
			'id_estado_civil_padre' => 'Estado civil del padre',
			'nombre_madre' => 'Nombre de la madre',
			'apellido1_madre' => 'Primer apellido de la madre',
			'apellido2_madre' => 'Segundo apellido de la madre',
			'edad_madre' => 'Edad de la madre',
			'id_estado_civil_madre' => 'Estado civil de la madre',
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

		$criteria->compare('id_paciente',$this->id_paciente);
		$criteria->compare('identificacion',$this->identificacion);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido1',$this->apellido1,true);
		$criteria->compare('apellido2',$this->apellido2,true);
		$criteria->compare('id_genero',$this->id_genero);
		$criteria->compare('id_nivel_escolar',$this->id_nivel_escolar);
		$criteria->compare('id_lugar_nac',$this->id_lugar_nac);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('tiempo',$this->tiempo);
		$criteria->compare('id_barrio',$this->id_barrio);
		$criteria->compare('telefono1',$this->telefono1);
		$criteria->compare('telefono2',$this->telefono2);
		$criteria->compare('celular',$this->celular);
		$criteria->compare('estrato',$this->estrato);
		$criteria->compare('id_estado_civil',$this->id_estado_civil);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('observaciones_fam',$this->observaciones_fam,true);
		$criteria->compare('motivo_remision',$this->motivo_remision,true);
		$criteria->compare('nombre_remitente',$this->nombre_remitente,true);
		$criteria->compare('creado_por',$this->creado_por);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('modificado_por',$this->modificado_por);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);
		$criteria->compare('nombre_padre',$this->nombre_padre,true);
		$criteria->compare('apellido1_padre',$this->apellido1_padre,true);
		$criteria->compare('apellido2_padre',$this->apellido2_padre,true);
		$criteria->compare('edad_padre',$this->edad_padre);
		$criteria->compare('id_estado_civil_padre',$this->id_estado_civil_padre);
		$criteria->compare('nombre_madre',$this->nombre_madre,true);
		$criteria->compare('apellido1_madre',$this->apellido1_madre,true);
		$criteria->compare('apellido2_madre',$this->apellido2_madre,true);
		$criteria->compare('edad_madre',$this->edad_madre);
		$criteria->compare('id_estado_civil_madre',$this->id_estado_civil_madre);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}