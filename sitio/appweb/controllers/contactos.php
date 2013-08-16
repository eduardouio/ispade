<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactos extends CI_Controller {
/**
* Calse encargada de gestionar la pagina de contactos
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
protected $IdPage_ = '5';
protected $Npage_ = 'contactos';
protected $Title_ = 'Contáctos';
protected $V_articles_ ='v_ratings';
protected $Columns_;
protected $Data_; 
protected $Page_;

public function __construct(){
	parent::__construct();
	$this->load->model('html_render');
}	

	/**
	* genera la pagina completa, la página esta compuesta por varios elementos
	*/
	public function index()
	{
		if(!$_POST){
		#columnas para la consulta
			$this->Columns_ =  array(
				'id_page',
				'title',
				'controller',
				'keywords'
				);
			#recuperamos la información de la vista
			$this->Data_['header'] = $this->dbsitio->getRows($this->Table_,$this->Columns_,
				'id_page = ' . $this->IdPage_);
			#cargamos el menú
			$this->Data_['menu'] = array($this->Npage_ => 'active');
			#cargamos la barra laterál del menu
			$this->Data_['lateral_menu'] = $this->dbsitio->getRows($this->V_articles_,FALSE,False,
				FALSE,FALSE,FALSE,FALSE,10);
			#Cargamos el formulario	
			$this->Data_['form'] = array('form'=>'form');
			$this->html_render->page_render($this->Data_);	

		}else{
			print "recibo algo por post";
		}
	}
}