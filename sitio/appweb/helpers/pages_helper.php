<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Manejo de Plantillas
 *
 * Genera el codigo HTML junto con el contenido del controlador
 * para presentarlo en pantalla, helper compartido por todos
 * los controladores y vistas
 *
 * @access	public
 * @param	array
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('saludar'))
{
	function saludar($list = '', $attributes = '')
	{
		print 'hola mundo desde el helper';
	}
}