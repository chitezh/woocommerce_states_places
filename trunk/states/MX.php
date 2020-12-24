<?php

/**
* States of Mexico
* - 32 states
*
* Source:
* - Wikipedia
*
* @author  Carlos Velasco <carlos.xvlsc@gmail.com>
* @version 1.0.0
* @license http://www.gnu.org/licenses/gpl-2.0.html
*/

global $states;

$states['MX'] = array(
    'AGU' => 'Aguascalientes',
    'BCN' => 'Baja California Norte',
    'BCS' => 'Baja California Sur',
    'CAM' => 'Campeche',
    'CHP' => 'Chiapas',
    'CHH' => 'Chihuahua',
    'CMX' => 'Ciudad de México',
    'COA' => 'Coahuila de Zaragoza',
    'COL' => 'Colima',
    'DUR' => 'Durango',
    'GUA' => 'Guanajuato',
    'GRO' => 'Guerrero',
    'HID' => 'Hidalgo',
    'JAL' => 'Jalisco',
    'MEX' => 'México',
    'MIC' => 'Michoacán de Ocampo',
    'MOR' => 'Morelos',
    'NAY' => 'Nayarit',
    'NLE' => 'Nuevo León',
    'OAX' => 'Oaxaca',
    'PUE' => 'Puebla',
    'QUE' => 'Querétaro',
    'ROO' => 'Quintana Roo',
    'SLP' => 'San Luis Potosí',
    'SIN' => 'Sinaloa',
    'SON' => 'Sonora',
    'TAB' => 'Tabasco',
    'TAM' => 'Tamaulipas',
    'TLA' => 'Tlaxcala',
    'VER' => 'Veracruz de Ignacio de la Llave',
    'YUC' => 'Yucatán',
    'ZAC' => 'Zacatecas',
);

// Use this filter to handle the States of Mexico
$states['MX'] = apply_filters('scpwoo_custom_states_mx', $states['MX']);
