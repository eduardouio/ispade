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
	protected $IdPage_ = 2;
	protected $Npage_ = 'nosotros';
	protected $Columns_;
	protected $Article_ = 'article';
	protected $V_articles_ = 'v_ratings';
	protected $V_lista_ = 'v_tablon';
	protected $Data_; 

public function __construct(){
	parent::__construct();				
}	

	/**
	* genera la pagina completa, unico metodo de la clase
	*/
	public function index()
	{	

			//recuperamos la infromacion de la cabecera
		$this->Columns_ =  array(
											'id_page',
											'title',
											'controller',
											'keywords'
											);
		$this->Data_['query'] = $this->dbsitio->getRow($this->Table_,$this->Columns_,'id_page = ' . $this->IdPage_);

		//armamos el menu, enfocando la pag actual
		// $home // $nosotros // $noticias
		// $servicios 	// $contactos
		$this->Data_['menu'] = array($this->Npage_ => 'active'); 		
		$this->Data_['lateral'] = $this->dbsitio->getRows($this->V_articles_,FALSE,False,
															FALSE,FALSE,FALSE,FALSE,10);

		
		//cargamos las vistas
		$this->load->view('header',$this->Data_);
		$this->load->view('menu',$this->Data_);
		$this->load->view('lateral_menu',$this->Data_);
		$this->load->view('form');
		$this->load->view('foot');

	}


}

