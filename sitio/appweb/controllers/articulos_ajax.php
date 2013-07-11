<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articulos_ajax extends CI_Controller {
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
* @access public
*
*/
	public function __construct(){
		parent::__construct();				
		}	

	/**
	* genera la pagina completa, unico metodo de la clase
	*/
	public function articulo()
	{	
		$article = $this->uri->segment(3,'articulo_borrado');

		$columnas = array('title','article','image','content','counter','create_date');

	 	$articulo['modal'] = $this->dbsitio->getRow('article',$columnas,'article = \'' . $article . '\'');
	 	


	 	if (empty($articulo['modal'])){
	 		
	 		$datos['0'] = array('title'=>'Artículo No encontrado!',
	 								   'article' => 'El artículo que busca no existe!.',
	 								   'image' => 'img/sitio/delete.png',
	 								   'content' => 'El artículo que busca no existe!.',
	 								   'counter'=>rand(123,9876),
	 								   'create_date' => '1987-07-01 12:00:00');
			$articulo['modal'] = $datos;	 		
	 	}
	 		$string = $this->load->view('modal',$articulo,TRUE);


  		$this->rating($article,$articulo);
  		print $string; 

	}

	/**
	* Suma un punto a cada articulo leido
	*
	*/
	private function rating($article,$articulo){
		$exepciones = array('bienvenidos','nosotros','servicios','contactos','articulo_borrado');
		$data = array('counter' =>  'valor');

		var_dump($articulo['modal']['counter']);
		//$this->dbsitio->updateRow('article');


	}
}
