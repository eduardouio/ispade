<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Modelo encargado de manejar la base de datos liposerv_ispade
* Los nombres de las tablas al igual que los valores obtenidos 
* se guardan en variable.
*
* @pakage App Sitio Ispade 
* @subpakage Modelo Base De Datos
* @autor Eduardo Villota <eduardouio7@gmail.com> <@eduardouio>
* @copyrigth 2013 ISPADE <info@ispade.edu.ec>
* @license (c) ISPADE Todos Los Derechos Reservados
* @link www.ispade.edu.ec
* @version 1.0
* @access protected
*
*/

class DbSitio extends CI_Model{

	private $Table_;
	private $Query_;
	private $Result_;

	/**
	* Iniciamos el contructor del modelo para que sea aceptado por codeigniter
	* Se craga la libreria pafa manejo de base de datos
	*/
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


	
	/**
	* Realiza una consulta tipo SELECT a la Base de datos, se arma la consulta usando funciones
	* para cadenas el objetivo es genar el SQL de la consulta a travez de parametros, existen
	* parametros opcionales indentificados con el "=0", esto se evalua para no tomar en cuenta
	* ese parametro al momento de armar la consulta.
	*
	* SELECT
    * [ALL | DISTINCT | DISTINCTROW ]      
    * [FROM table_references
    * [WHERE where_condition]
    * [GROUP BY {col_name | expr | position}
    * [ORDER BY {col_name | expr | position}
    *  [ASC | DESC], ...]
    * [LIMIT {[offset,] row_count | row_count OFFSET offset}]
	* 
	* @param str $table => Contiene el nombre de la tabla a la que se le va a hacer la consulta
	* @param str $condition => Recibe la condicion de la consulta, vale 0 cero sino se recibe el parametro
	* @param str $groupby => Agrupa los registros y retorna la consulta, sino existe es cero
	* @param str $orderby => Ordena los registros con valor (coluna-orden), si no existe es cero
	* @param int $limit => Limite de registros a obtener, vale 0 cero si no se recibe el parametro
	*/
	public function getRows($table, $condition = 0, $groupby = 0, $orderby = 0 , $limit = 0){

		sql = 'SELECT ';

	}

	
	/**
	* Realiza una consulta tipo ISERT en la Base de Datos
	*
	* INSERT
    * [INTO] tbl_name [(col_name,...)]
    * {VALUES | VALUE} ({expr | DEFAULT},...),(...),...
    *
    * @param str $table => nombre de la tabla a insertar
    * @param array $values => Diccionario (clave-valor) contiene el nombre de la columna y el valor
	*/
	public function insertRow($table, $values){
		sql = 'INSERT INTO ' . $table . ' ';


	}


	/**
	* Realiza una consulta tipo DELETE en la Base de Datos
	*
	* DELETE 
	* FROM tbl_name
    * [WHERE where_condition]
    * [LIMIT row_count]
    *
    * @param str $table => nombre de la tabla a insertar
    * @param array $values => Diccionario (clave-valor) contiene el nombre de la columna y el valor
    * @param str $condition => Condicion para eliminar reistro(s)
    * @param int $limit => Parte de la condicion de borrado, sino existe es cero
	*/
	public function deleteRow($table, $values, $condition, $limit = 0){
		


	}

	/**
	* Realiza una consulta tipo UPDATE a la Base de datos, se arma la consulta usando funciones
	* para cadenas el objetivo es genar el SQL de la consulta a travez de parametros, existen
	* parametros opcionales indentificados con el "=0", esto se evalua para no tomar en cuenta
	* ese parametro al momento de armar la consulta.
	*
	* UPDATE  table_reference
    * SET col_name1={expr1|DEFAULT} [, col_name2={expr2|DEFAULT}] ...
    * [WHERE where_condition]
    * [ORDER BY ...]
    * [LIMIT row_count]
	*	
	* 
	* @param str $table => Contiene el nombre de la tabla a la que se le va a hacer la consulta
	* @param str $condition => Recibe la condicion de la consulta, vale 0 cero sino se recibe el parametro
	* @param str $orderby => Ordena los registros con valor (coluna-orden), si no existe es cero
	* @param int $limit => Limite de registros a obtener, vale 0 cero si no se recibe el parametro
	*/
	public function updateRows($table, $condition, $orderby = 0 , $limit = 0){

		sql = 'SELECT ';

	}

	/**
	* Retorna el ultimo Id insertado en la base de datos
	*/
	public function lastId(){
		return $this->db->lastInsertId();
	}

	/**
	* Lista las tablas de la base de datos, lo retorna a manera de lista
	*/
	public function listTables(){
		$this->db->query('Show tables;');
	}

	/**
	*
	*/
	public function listColumns($table){
		$this->db->quey('describe ' . $table);
	}

	/**
	* Retorna el string del ultimo error de la base de datos
	*
	*
	*/
	public function lastError(){

	}

	/**
	* Retorna el string del ultimo query
	*
	*
	*/
	public function lastQuery(){

	}

	/**
	* Retorna el ultimo warning en la base de datos
	*
	*/
	public function lastWarning(){
		$this->db->query('show warnings;')
	}

	/**
	* Ejecuta una sentencia sql de cualquier tipo en la base de datos
	*/
	public function execQuery(){

	}

} 