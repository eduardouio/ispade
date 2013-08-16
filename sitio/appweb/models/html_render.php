<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Modelo encargado de manejar las vistas del sitio
*
* @pakage App Sitio Ispade 
* @subpakage Modelo Base De Datos
* @autor Eduardo Villota <eduardouio7@gmail.com> <@eduardouio>
* @copyrigth 2013 ISPADE <info@ispade.edu.ec>
* @license (c) ISPADE Todos Los Derechos Reservados
* @link www.ispade.edu.ec
* @version 1.0
* @access protected
*
*/

class Html_render extends CI_Model{

	protected $Vistas_;
	/**
	* Iniciamos el contructor del modelo para que sea aceptado por codeigniter
	* Se craga la libreria pafa manejo de base de datos
	*/
	public function __construct(){
		parent::__construct();		
	}

	/**
	* Se encrarga de recibir la informacion y genera la pantalla de salia
	* Todos los valores se guardan en una variable de clase $Pagina_	
	* Es este metodo el que decide que vistas mostrar a partir de los paramtros recibidos
	*
	* @param array $catalogo array con las plantillas necesarias y su informacion
	*	
	*/
	public function page_render($catalogo){			
		#separamos los nombre de las vistas
		foreach ($catalogo as $arreglos => $nombres) {								
			$this->Vistas_[] =  $arreglos;				
		}
		#cargamos las vistas con sus datos
		foreach ($this->Vistas_ as $nombre_vista) {			
			$this->load->view($nombre_vista,$catalogo,false);
		}
		#cargamos el pie de página
		$this->load->view('foot','',false);			
	}
}