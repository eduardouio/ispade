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
	protected $IdPage_ = 1;
	protected $Npage_ = 'home';
	protected $Article_ = 'article';
	protected $Columns_;
	protected $Data_; 

public function __construct(){
	parent::__construct();				}	

	/**
	* genera la pagina completa, unico metodo de la clase
	*/
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('alert');
		$this->load->view('presentation');
		$this->load->view('foot');

		
		
		}
}
