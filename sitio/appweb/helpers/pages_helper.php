<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Manejo de Plantillas
 *
 * Genera el codigo HTML junto con el contenido del controlador
 * para presentarlo en pantalla, helper compartido por todos
 * los controladores y vistas, las funciones declaradas en este helper
 * tienen el formato h_nombre_de_la función, para saber de donde proceden
 *
 * @access	public
 * @param	array
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('h_render'))
{
	function h_render($catalog)
	/**
	* Se encrarga de recibir la informacion y genera la pantalla de salia
	* Todos los valores se guardan en una variable de clase $Pagina_	
	* Es este metodo el que decide que vistas mostrar a partir de los paramtros recibidos
	*
	* @param array $catalogo array con las plantillas necesarias y su informacion
	*	
	*/
	{
		$vistas;
		$Pagina_;
		foreach ($catalogo as $arreglos => $nombres) {								
			$vistas[] =  $arreglos;				
		}

		foreach ($vistas as $nombre) {
			$Pagina_ = $Pagina_ . $this->load->view($nombre,$catalogo[$nombre],true);
		}

		$Pagina_ = $Pagina_ . $this->load->view('v_fpie','',true);
		print $Pagina_;

	}
}