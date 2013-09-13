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
protected $Columns_;
protected $Data_; 
protected $Limit_;
protected $Offset_ = 5;


public function __construct(){
/**
* Inicializa la clase como objeto CI
*/
	parent::__construct();	
	$this->load->model('sesiones');
}	


public function index(){
/* Presenta un listado de los articulos de la página*/
if($this->sesiones->isLogged()){
	print('arg');
}
}


public function present(){
/**
*presenta la informacion de un artículo, si no existe 
*/
$idarticle = $this->uri->segment(3,0);
if (($idarticle > 0) && ($this->_confirmSession())){
	$this->_setInfo();
	$midata1 = $this->dbsitio->getRows($this->Table_,FALSE,'id_article = ' . $idarticle);
	$midata2 = array('controller' => $this->Controller_);
	$this->Data_['presentation'] = array_merge($midata1,$midata2);
	$this->html_render->page_render($this->Data_);
}else{
	$this->index();
}

}

public function edit(){
/**
* Método encargado de modificar el contenido de los artículos 
* Si no recibe nada muestra el listado de todas los artículos de la página
* Si recibe id_article retorna un formulario con esos datos
* Si recibe algo por POST graba la información en la BD y retorna una mensaje
* 	--Si la información está incompleta retorna el formulario con los mismos datos
*/
	$idarticle = $this->uri->segment(3,0);

	#muestra la pantalla de inicio
	if (($idarticle == 0) || (!$this->_confirmSession()) || (!$_POST)){
		$this->index();
	}
	#no se reciben datos por post
	if (($idarticle > 0) && (!$_POST)){		
			$this->_setInfo();
			$midata1 = $this->dbsitio->getRows($this->Table_,FALSE,'id_article = ' . $idarticle);
			$midata2 = array('controller' => $this->Controller_);
			$this->Data_['form'] = array_merge($midata1,$midata2);
			$this->html_render->page_render($this->Data_);
		}else{
			print 'recibiendo informacion por post';
		}

}

private function _setInfo(){
/**
* 
*/
$this->Data_['header'] = array('title' => 'Pagina de Inicio' );
$this->Data_['menu'] = array($this->Controller_ => 'active');
}


}
