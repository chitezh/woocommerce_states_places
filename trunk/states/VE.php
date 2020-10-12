<?php

/**
 *  States of Venezuela
 * - 1 Capital District
 * - 23 States
 * 
 * Sources:
 * - https://es.wikipedia.org/wiki/Anexo:Estados_federales_de_Venezuela
 * - https://es.wikipedia.org/wiki/Distrito_Capital_(Venezuela)
 *
 * @author  Yordan Soares <contacto@yordansoar.es> | https://yordansoar.es
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['VE'] = array(
  'AM' => 'Amazonas',
  'AN' => 'Anzoátegui',
  'AP' => 'Apure',
  'AR' => 'Aragua',
  'BA' => 'Barinas',
  'BO' => 'Bolívar',
  'CA' => 'Carabobo',
  'CO' => 'Cojedes',
  'DE' => 'Delta Amacuro',
  'DC' => 'Distrito Capital',
  'FA' => 'Falcón',
  'GU' => 'Guárico',
  'LA' => 'Lara',
  'LG' => 'La Guaira',
  'ME' => 'Mérida',
  'MI' => 'Miranda',
  'MO' => 'Monagas',
  'NE' => 'Nueva Esparta',
  'PO' => 'Portuguesa',
  'SU' => 'Sucre',
  'TA' => 'Táchira',
  'TR' => 'Trujillo',
  'YA' => 'Yaracuy',
  'ZU' => 'Zulia',
);

// Use this filter to handle the States of Venezuela
$states['VE'] = apply_filters('scpwoo_custom_states_ve', $states['VE']);
