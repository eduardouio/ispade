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
public function __construct(){
	parent::__construct();				
}	
	// variables para la identificacion de la pagina y sus articulos
	protected $Table_ = 'page';
	protected $IdPage_ = 1;
	protected $Columns_;
	protected $Article = 'article';
	protected $Result_;
	protected $Data_;


	/**
	* genera la pagina completa, unico metodo de la clase
	*/
	public function index()
	{	

		//recuperamos la infromacion de la pantalla home

		$this->Columns_ = $arrayName = array(
											'id_page',
											'title',
											'controller',
											'keywords'
											);
		$this->Result_['query'] = $this->dbsitio->getRows($this->Table_,$this->Columns_,'id_page = ' . $this->IdPage_);
		$this->Result_['datos'] =  array('nombre' => 'Eduardo Villota', 'telefono' => '2303023' );
		
		$this->load->view('cabecera',$this->Result_);

		//var_dump($this->Result_);

	}
}
