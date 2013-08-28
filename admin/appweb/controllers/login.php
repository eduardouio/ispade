<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
/**
* Clase encargada de mantener la secion en el sitio
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
	protected $IdPage_ = 1;
	protected $Npage_ = 'home';
	protected $Article_ = 'article';
	protected $Columns_;
	protected $Data_; 

public function __construct(){
	parent::__construct();				}	

	/**
	* Presentamos el formulario
	*/
	public function index()
	{	
		if (!$_POST){
		$this->load->view('header');
		$this->load->view('alert');
		$this->load->view('login');
		$this->load->view('foot');				
		}
	}

	/**
	* Recibe los datos del formulario los procesa he inicia la sesion
	*/
	private function recibir(){
		if ($_POST){
			
		}else{
			$this->index();
		}
	}
}
