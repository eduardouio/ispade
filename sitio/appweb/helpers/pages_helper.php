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
if ( ! function_exists('h_saludar'))
{
	function h_saludar($list = '', $attributes = '')
	{
		print 'hola mundo desde el helper';
	}
}