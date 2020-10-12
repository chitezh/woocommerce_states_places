<?php

/**
 * Departments of Honduras
 * - 18 departments
 * 
 * Source:
 * - https://es.wikipedia.org/wiki/Anexo:Municipios_de_Honduras
 * 
 * Updated: April 20, 2020
 * By Jesus Bermudez | https://mintec.co
 * 
 * @author  Jesus Bermudez <jbermudez01@gmail.com> | http://mintec.co
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * 
 */

global $states;

$states ['HN' ] = array (
	'HN1' => 'Cortés' ,
	'HN2' => 'Francisco Morazán' ,
	'HN3' => 'Atlántida' ,
	'HN4' => 'Colón' ,
	'HN5' => 'Gracias a Dios' ,
	'HN6' => 'Copán' ,
	'HN7' => 'Santa Barbara' ,
	'HN8' => 'Yoro' ,
	'HN9' => 'Olancho' ,
	'HN10' => 'Ocotepeque' ,
	'HN11' => 'Lempira' ,
	'HN12' => 'Intibucá' ,
	'HN13' => 'Comayagua' ,
	'HN14' => 'Valle' ,
	'HN15' => 'La Paz' ,
	'HN16' => 'El Paraíso' ,
	'HN17' => 'Choluteca' ,
	'HN18' => 'Islas de la Bahía' ,
	);
return $states;

// Use this filter to handle the Departments of Honduras
$states['HN'] = apply_filters('scpwoo_custom_states_hn', $states['HN']);
