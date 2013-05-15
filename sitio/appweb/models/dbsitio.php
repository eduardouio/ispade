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


	public function __construct(){
		parent::__construct();
	}

	public function getRows($table,$condition){

	}
	

}