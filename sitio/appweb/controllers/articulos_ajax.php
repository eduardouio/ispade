<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos_ajax extends CI_Controller {
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
	 	$data = array('nombre' => 'Eduardo Villota' );
  		$string = $this->load->view('modal','',TRUE);
  		print $string;
        //$this->load->view('paginacion');
 
//

	}
}