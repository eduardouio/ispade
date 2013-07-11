<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicios extends CI_Controller {

	// variables para la identificacion de la pagina y sus articulos
	protected $Table_ = 'page';
	protected $IdPage_ = 4;
	protected $Npage_ = 'servicio';
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
		$this->dbsitio->lastQuery();
		//listado de articulos pagina
		$this->Data_['lista'] = $this->dbsitio->getRows($this->V_lista_,FALSE,'id_page = ' . $this->IdPage_,FALSE,FALSE,FALSE,FALSE,10);

		//cargamos las vistas
		$this->load->view('cabecera',$this->Data_);
		$this->load->view('menu',$this->Data_);
		$this->load->view('menu_lateral',$this->Data_);
		$this->load->view('presentacion',$this->Data_);
		$this->load->view('pie');
	}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */