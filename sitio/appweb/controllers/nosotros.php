<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends CI_Controller {
/**
* Calse encargada de gestionar la pagina que presenta aticulos
*
* @pakage App Sitio Ispade 
* @subpakage controladores
* @autor Eduardo Villota <eduardouio7@gmail.com> <@eduardouio>
* @copyrigth 2013 ISPADE <info@ispade.edu.ec>
* @license (c) ISPADE Todos Los Derechos Reservados
* @link www.ispade.edu.ec
* @version 1.0
* @views cabecera,menu, menulateral,presentacion,pie,modal
* @access public
*
*/


	// variables para la identificacion de la pagina y sus articulos
	protected $Table_ = 'page';
	protected $limit = '3';
	protected $IdPage_ = 2;
	protected $Npage_ = 'nosotros';
	protected $Columns_;
	protected $Article_ = 'article';
	protected $V_articles_ = 'v_ratings';
	protected $V_lista_ = 'v_tablon';
	protected $Data_; 

	public function __construct(){
		parent::__construct();				
		$this->load->library('pagination');
	}	

	//listamos los articulos de esta pagina
	public function index(){
		$this->Columns_ = $arrayName = array(
											'id_page',
											'title',
											'controller',
											'keywords'
											);

		$this->Data_['query'] = $this->dbsitio->getRow($this->Table_, $this->Columns_ ,'id_page = ' . $this->IdPage_);

		//armamos el menu, enfocando la pag actual
		// $home // $nosotros // $noticias
		// $servicios 	// $contactos
		$this->Data_['menu'] = array($this->Npage_ => 'active');
		//litado para el menú laterl de links
		$this->Data_['lateral'] = $this->dbsitio->getRows($this->V_articles_,FALSE,False,
															FALSE,FALSE,FALSE,FALSE,10);
		
		//listado de articulos pagina
		$this->Data_['lista'] = $this->dbsitio->getRows($this->V_lista_,FALSE,'id_page = ' . $this->IdPage_,FALSE,FALSE,FALSE,FALSE,10);

		//cargamos las vistas
		$this->load->view('cabecera',$this->Data_);
		$this->load->view('menu',$this->Data_);
		$this->load->view('menu_lateral',$this->Data_);
		$this->load->view('presentacion',$this->Data_);
		$this->config_p();
		$this->load->view('pie');
	}


	private function config_p(){

		$num_rows = $this->dbsitio->getRow('article',false,'id_page = ' . $this->id_page);
		var_dump($num_rows);

		$config['base_url'] = base_url() . 'index.php/nosotros/index';
		$config['total_rows'] = $this->dbsitio->countRows('article');
		$config['per_page'] = '5';
		$config['first_link'] = 'Inicio';
		$config['last_link'] = 'Último';
		
		$this->pagination->initialize($config);
		print $this->pagination->create_links();

		
	}

}

