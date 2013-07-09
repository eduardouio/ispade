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
	// variables para la identificacion de la pagina y sus articulos
	protected $Table_ = 'page';
	protected $IdPage_ = 1;
	protected $Npage_ = 'home';
	protected $Columns_;
	protected $Article = 'article';
	protected $Data_; 


	/**
	* genera la pagina completa, unico metodo de la clase
	*/
	public function index()
	{	

		//recuperamos la infromacion de la cabecera
		$this->Columns_ = $arrayName = array(
											'id_page',
											'title',
											'controller',
											'keywords'
											);
		$this->Data_['query'] = $this->dbsitio->getRow($this->Table_,$this->Columns_,'id_page = ' . $this->IdPage_);

		//armamos el menu, enfocando la pag act
			// $activehome
			// $activenosotros
			// $activenoticias
			// $activeservicios
			// $activecontactos

		$this->Data_['menu'] = array('controlador' => 'home'); 

		
		$this->load->view('cabecera',$this->Data_);
		$this->load->view('menu',$this->Data_);

		

	}
}
