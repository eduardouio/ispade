<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
/**
* Clase encargada de gestionar los contenidos de la pagina home del sitio
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
// variables para la identificacion de la pagina y sus articulos
	protected $Table_ = 'page';
	protected $IdPage_ = '1';
	protected $Npage_ = 'Sitio/Inicio';
	protected $Controller_ = 'home';
	protected $V_articles_ ='v_ratings';
	protected $V_lista_ = 'v_tablon';
	protected $Limit_;
	protected $Offset_ = 5;
	protected $Columns_;
	protected $Data_; 

public function __construct(){
	parent::__construct();				
}	


/**
* genera la pagina completa, unico metodo de la clase
*/
public function index()
{	
	if($this->_confirmSession()){			
		$this->_setInfo();
		$this->html_render->page_render($this->Data_);
	}		
}

private function _confirmSession(){
/**
* Confirma que exista la sesion de existir una destruye la anterior
*/
	if ($this->session->userdata('login')){
		return TRUE;
	}else{
		$this->session->sess_destroy();
	#muestra un link al formulario de login
		print '<h1><a href="'. base_url().'" > Login </a> </h1>';
	}
}

private function _setInfo(){
	$this->Data_['header'] = array('title' => 'Pagina de Inicio' );
	$this->Data_['menu'] = array($this->Controller_ => 'active');
	$this->Data_['info_page'] = array('npage' => $this->Npage_,
										'controller' => $this->Controller_);
	
}
}
