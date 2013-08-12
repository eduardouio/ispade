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
	// variables para la identificacion de la pagina y sus articulos
	protected $Table_ = 'page';
	protected $IdPage_ = 1;
	protected $Npage_ = 'home';
	protected $Columns_;
	protected $Article_ = 'article';
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
		$this->Columns_ = $arrayName = array(
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
		$this->Data_['carrusel'] = $this->dbsitio->getRow($this->Article_,FALSE,'id_page = ' . $this->IdPage_ . ' AND id_article < 5');
		//articulos del home
		$this->Data_['article'] = $this->dbsitio->getRows($this->Article_, FALSE ,'id_article > 37 AND id_article < 42');
		
		//llamada de vistas
		$this->load->view('header',$this->Data_);
		$this->load->view('menu',$this->Data_);
		$this->load->view('carrusel',$this->Data_);
		$this->load->view('articles_home',$this->Data_);
		$this->load->view('foot');	
	}
}
