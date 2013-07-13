<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	// variables para la identificacion de la pagina y sus articulos
	protected $Table_ = 'page';
	protected $IdPage_ = 3;
	protected $Npage_ = 'noticias';
	protected $Columns_;
	protected $Limit_;
	protected $Offset_ = 3;
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
		$this->Limit_ = ($this->uri->segment(3) == 0)?0:$this->uri->segment(3);		
		$this->Data_['lista'] = $this->dbsitio->getRows($this->V_lista_,FALSE,'id_page = ' . $this->IdPage_,FALSE,FALSE,FALSE,FALSE,$this->Limit_,$this->Offset_);

		//$this->Data_['query'] = $this->dbsitio->getRows($this->Table_, $this->Columns_ ,'id_page = ' . $this->IdPage_,
														

		$this->config_p();
		//cargamos las vistas
		$html = $this->load->view('cabecera',$this->Data_,TRUE);
		$html = $html . $this->load->view('menu',$this->Data_,TRUE);
		$html = $html . $this->load->view('menu_lateral',$this->Data_,TRUE);
		$html = $html . $this->load->view('presentacion',$this->Data_,TRUE);	
		$html = $html . $this->pagination->create_links();	
		$html = $html . $this->load->view('pie','', TRUE);

		print $html;
	}

		private function config_p(){

		$num_rows = $this->dbsitio->getRow('article',false,'id_page = ' . $this->IdPage_);		
		$Config_['base_url'] = base_url() . 'index.php/'.$this->Npage_.'/index';
		$Config_['total_rows'] = count($num_rows);
		$Config_['per_page'] = $this->Limit_;
		$Config_['first_link'] = 'Inicio';
		$Config_['last_link'] = 'Último';
		$Config_['display_pages'] = '5';
		$Config_['per_page'] = '3';
		$Config_['full_tag_open'] = '<div class="pagination pull-right container"><ul>';
		$Config_['full_tag_close'] = '</ul></div>';
		$Config_['last_tag_open'] = '<li>';
		$Config_['last_tag_close'] = '</li>';
		$Config_['next_tag_open'] = '<li>';
		$Config_['next_tag_close'] = '</li>';
		$Config_['num_tag_open'] = '<li>';
		$Config_['num_tag_close'] = '</li>';
		$Config_['cur_tag_open'] = '<li><a>';
		$Config_['cur_tag_close'] = '</a></li>';	
		$this->pagination->initialize($Config_);		
	}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */