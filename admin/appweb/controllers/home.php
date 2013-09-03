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
protected $Table_ = 'article';
protected $IdPage_ = '1';
protected $Npage_ = 'Sitio/Inicio';
protected $Controller_ = 'home';
protected $V_lista_ = 'article';
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
#obtenemos los registros de los artículos de la página	
		$this->Data_['info_page'] = array('npage' => $this->Npage_,'controller' => $this->Controller_);
		$midata1 = $this->dbsitio->getRows($this->V_lista_,FALSE,'id_page=' . $this->IdPage_);
		$midata2 = array('controller' => $this->Controller_);
		$this->Data_['table'] = array_merge($midata1,$midata2);
		$this->html_render->page_render($this->Data_);
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
*Retorna un formulario con los datos del artículo
*/
	$idarticle = $this->uri->segment(3,0);
	if (($idarticle > 0) && ($this->_confirmSession())){
		if(!$_POST){
			$this->_setInfo();
			$midata1 = $this->dbsitio->getRows($this->Table_,FALSE,'id_article = ' . $idarticle);
			$midata2 = array('controller' => $this->Controller_);
			$this->Data_['form'] = array_merge($midata1,$midata2);
			$this->html_render->page_render($this->Data_);
		}else{
			
		}
	}else{
		$this->index();
	}



}

public function delete(){
/**
*Elimina un artículo
*/
}

public function crear(){
/**
*funcion deshabilitada redirecciona a index
*/
$this->index();
}

private function _ok(){
/**
*retorna un mensaje de acciones ejecutadas correctamente
*/
}

private function _returnForm(){
/**
* Retorna un formulario al cliente
*/
}

private function _porcessForm(){
/**
* procesa un formulario
*/
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
/**
* 
*/
$this->Data_['header'] = array('title' => 'Pagina de Inicio' );
$this->Data_['menu'] = array($this->Controller_ => 'active');
}


}
