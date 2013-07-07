<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
/**
* Calse encargada de gestionar la pagina home del sitio
*
* @pakage App Sitio Ispade 
* @subpakage controladores
* @autor Eduardo Villota <eduardouio7@gmail.com> <@eduardouio>
* @copyrigth 2013 ISPADE <info@ispade.edu.ec>
* @license (c) ISPADE Todos Los Derechos Reservados
* @link www.ispade.edu.ec
* @version 1.0
* @views cabecera,menu,carrusel,articulos_home,pie
* @access public
*
*/
public function __construct(){
	parent::__construct();				
}	

	/**
	* genera la pagina completa, unico metodo de la clase
	*/
	public function index()
	{	
		//recuperamos la infromacion de la pantalla home

		$columnas = array('id_article','article','image','content');		
		$articulo = $this->dbsitio->getRows('article',$columnas,'id_page = 1');
	 	//var_dump($articulo);
		$this->load->view('cabecera');
		$this->load->view('menu');
		//$this->load->view('menu_lateral');
		$this->load->view('formulario');
		$this->load->view('paginacion');
		$this->load->view('pie');

	}
}
