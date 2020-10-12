<?php

/**
 * Provinces of Spain
 *
 * @author  Javier Esteban <correo@javieresteban.org> | https://javieresteban.org
 * @version 1.0.1
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['ES'] = array(
  'C'  => 'A Coruña',
  'VI' => 'Araba/Álava',
  'AB' => 'Albacete',
  'A'  => 'Alicante',
  'AL' => 'Almería',
  'O'  => 'Asturias',
  'AV' => 'Ávila',
  'BA' => 'Badajoz',
  'PM' => 'Baleares',
  'B'  => 'Barcelona',
  'BU' => 'Burgos',
  'CC' => 'Cáceres',
  'CA' => 'Cádiz',
  'S'  => 'Cantabria',
  'CS' => 'Castellón',
  'CE' => 'Ceuta',
  'CR' => 'Ciudad Real',
  'CO' => 'Córdoba',
  'CU' => 'Cuenca',
  'GI' => 'Girona',
  'GR' => 'Granada',
  'GU' => 'Guadalajara',
  'SS' => 'Gipuzkoa',
  'H'  => 'Huelva',
  'HU' => 'Huesca',
  'J'  => 'Jaén',
  'LO' => 'La Rioja',
  'GC' => 'Las Palmas',
  'LE' => 'León',
  'L'  => 'Lleida',
  'LU' => 'Lugo',
  'M'  => 'Madrid',
  'MA' => 'Málaga',
  'ML' => 'Melilla',
  'MU' => 'Murcia',
  'NA' => 'Navarra',
  'OR' => 'Ourense',
  'P'  => 'Palencia',
  'PO' => 'Pontevedra',
  'SA' => 'Salamanca',
  'TF' => 'Santa Cruz de Tenerife',
  'SG' => 'Segovia',
  'SE' => 'Sevilla',
  'SO' => 'Soria',
  'T'  => 'Tarragona',
  'TE' => 'Teruel',
  'TO' => 'Toledo',
  'V'  => 'Valencia',
  'VA' => 'Valladolid',
  'BI' => 'Biscay',
  'ZA' => 'Zamora',
  'Z'  => 'Zaragoza',
);

// Use this filter to handle the Provinces of Spain
$states['ES'] = apply_filters('scpwoo_custom_states_es', $states['ES']);
