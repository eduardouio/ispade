<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactos extends CI_Controller {
/**
* Calse encargada de gestionar la pagina de contactos
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

	 // variables para la identificacion de la pagina y sus articulos
protected $Table_ = 'page';
protected $IdPage_ = '5';
protected $Title_ = 'Contáctos';
protected $Npage_ = 'contactos';
protected $Columns_;
protected $Data_; 
protected $Page_;

public function __construct(){
	parent::__construct();	
	$this->load->model('html');
	
}	

	/**
	* genera la pagina completa, unico metodo de la clase
	*/
	public function index()
	{	
		$this->contents();
				
	}

	/**
	* Método que genera las vistas
	*/
	private function contents(){
		#columnas para la consulta
		$this->Columns_ =  array(
			'id_page',
			'title',
			'controller',
			'keywords'
			);
		
		$keywords = $this->dbsitio->getRows($this->Table_);
		var_dump($keywords);

		#vistas iniciales
		$this->Page_  = array(
								'header' => array('title' => $this->Title_,
												  'keywords'=> $keywords),
								'menu' => array($this->Npage_ => 'active')
			);

		print $this->html->page_render($this->Page_);
	}
 
}

