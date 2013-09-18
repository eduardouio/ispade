<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	/**
	* Se encarga de gestionar los artículos del home
	*
	* @pakage App Administracion del sitio Ispade 
	* @subpakage controladores
	* @autor Eduardo Villota <eduardouio7@gmail.com> <@eduardouio>
	* @copyrigth 2013 ISPADE <info@ispade.edu.ec>
	* @license (c) ISPADE Todos Los Derechos Reservados
	* @link www.ispade.edu.ec
	* @version 1.0
	* @access public
	*/

	protected $Table_ = 'article';
	protected $IdPage_ = '1';
	protected $Controller_ = 'home';
	protected $Data_; 
	protected $Limit_;
	protected $Offset_ = 5;


	 function __construct() {
	/**
	* Inicializa la clase como objeto CI
	*/
		parent::__construct();	
		$this->load->library('form_validation');
		$this->load->model('sesiones');
		}	


	public function index(){
	/* Presenta un listado de los articulos de la página*/
		if($this->sesiones->isLogged()){
			$this->_setInfo();
			$data1 = $this->dbsitio->getRows($this->Table_,FALSE,
												'id_page=' . $this->IdPage_);
			$data2 = array('controller' => $this->Controller_ );
			$this->Data_['table'] = array_merge($data1,$data2);
			$this->html_render->page_render($this->Data_);
			}
		}

	public function present(){
	/*Presenta un artículo determinado, si no existe lista todos los artículos*/
		$idarticle = $this->uri->segment(3,0);
		if($this->sesiones->isLogged() && ($idarticle > 0)){			
			$this->_setInfo();
			$data1 = $this->dbsitio->getRows($this->Table_,FALSE,'id_article = ' . $idarticle);
			$data2 = array('controller' => $this->Controller_);
			$this->Data_['presentation'] = array_merge($data1,$data2);
			$this->html_render->page_render($this->Data_);
		}else{
			$this->index();
			}
		}

	public function edit(){
	/* Muestra un formulario con los datos del artículo */
		$idarticle = $this->uri->segment(3,0);
		if($this->sesiones->isLogged() && ($idarticle > 0)){								
			$this->_setInfo();
			$data1 = $this->dbsitio->getRows($this->Table_,FALSE,'id_article = ' . $idarticle);
			$data2 = array('controller' => $this->Controller_);
			$this->Data_['form'] = array_merge($data1,$data2);
			$this->html_render->page_render($this->Data_);
			}
	}

	public function create(){
	/* Muestra un formulario vacio para crear un artículo */
		if($this->sesiones->isLogged()){								
			$this->_setInfo();				
			$this->Data_['form'] = array('controller' => $this->Controller_,
										'id_article' => '0');
			$this->html_render->page_render($this->Data_);
		}
	}

	public function saveForm(){
	/*guarda los datos del formulario en la base de datos, no importa si es de editar o crear.*/
		if(($this->sesiones->isLogged()) && ($this->_validateForm())){
			
		}else{			
			$this->_returnForm();
		}
	}

	private function _validateForm(){
	/*valida los datos del formulario de acuerdo a reglas establecidas en CI*/
		$this->form_validation->set_rules('id_article', 'Identificador Articulo', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('title', 'Titulo Articulo', 'trim|required|min_length[2]|xss_clean');		
		$this->form_validation->set_rules('image', 'Imagen Articulo', 'trim|required|min_length[2]|xss_clean');
		$this->form_validation->set_rules('content', 'Contenido Artículo', 'trim|required|min_length[10]|xss_clean');
		if ($this->form_validation->run()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	private function _returnForm(){
	/*Retorna un formulario con los datos ingresados por el usuario, solo se ejecuta esta 
	funcion cuando _validateForm retorna false, se retorna el formulario como crear o editar 
	dependiendo del parámetro id_article*/
		if($this->sesiones->isLogged()){								
			$this->_setInfo();				
			$this->Data_['form'] = array('controller' => $this->Controller_,
										'id_article' => '0');
			$this->html_render->page_render($this->Data_);
		}

	}

	private function _setInfo(){
	/* Hubica la información básica de la pagina como cabeceras y menús */
	$this->Data_['header'] = array('title' => 'Pagina de Inicio' );
	$this->Data_['menu'] = array($this->Controller_ => 'active');
	$this->Data_['info_page'] = array('controller' => $this->Controller_);
	}
}
