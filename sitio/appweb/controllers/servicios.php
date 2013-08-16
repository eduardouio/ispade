<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicios extends CI_Controller {
	
	// variables para la identificacion de la pagina y sus articulos
	protected $Table_ = 'page';
	protected $IdPage_ = '4';
	protected $Npage_ = 'servicios';
	protected $Title_ = 'Servicios';
	protected $V_articles_ ='v_ratings';
	protected $V_lista_ = 'v_tablon';
	protected $Limit_;
	protected $Offset_ = 3;
	protected $Columns_;
	protected $Data_; 

	public function __construct(){
		parent::__construct();				
	}	

	public function index(){
		$this->listar();
	}

	//listamos los articulos de esta pagina
	public function listar(){
		$this->Columns_ = $arrayName = array(
			'id_page',
			'title',
			'controller',
			'keywords'
			);
		$this->Data_['header'] = $this->dbsitio->getRow($this->Table_, $this->Columns_ ,'id_page = ' . $this->IdPage_);
		$this->Data_['menu'] = array($this->Npage_ => 'active');
		$this->Data_['lateral_menu'] = $this->dbsitio->getRows($this->V_articles_,FALSE,'id_page = ' . $this->IdPage_,
			FALSE,FALSE,FALSE,FALSE,10);
		#listamos los contenidos de la página		
		$this->Limit_ = ($this->uri->segment(3) == 0)?0:$this->uri->segment(3);		
		
		$this->Data_['presentation'] = $this->dbsitio->getRows($this->V_lista_,FALSE,'id_page = ' . $this->IdPage_,FALSE,FALSE,FALSE,FALSE,$this->Limit_,$this->Offset_);
		$this->_pagination();
		$this->html_render->page_render($this->Data_);
	}

	/**
	* Configura los detalles de la páginacion
	*/
	private function _pagination(){
				$config['base_url'] = site_url('/servicios/listar');
				$config['total_rows'] = $this->dbsitio->countRowsWhere($this->V_lista_,$this->IdPage_);	
				$config['display_pages'] = $this->Limit_;
				$config['per_page'] = $this->Offset_;
				$config['num_links'] = 5;
				$config['uri_segment'] = 3;
				$config['first_link'] = 'Primero';
				$config['last_link'] = 'Último';
				$config['prev_link'] = 'Ant.';
				$config['next_link'] = 'Sig.';
				$config['full_tag_open'] = ' <div class="pagination pull-right"><ul>';
				$config['full_tag_close'] = '</ul></div>';
				$config['last_tag_open'] = '<li>';
				$config['last_tag_close'] = '</li>';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<li><a>';
				$config['cur_tag_close'] = '</a></li>';		
				$this->pagination->initialize($config);			
	}

}