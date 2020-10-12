<?php

/**
 * Departments of Bolivia
 * - 9 departments
 * 
 * Source: 
 * - https://es.wikipedia.org/wiki/Departamentos_de_Bolivia
 *
 * @author  ionixcorp <ionixcorp@outlook.es> | https://github.com/ionixcorp
 * @author  Yordan Soares <contacto@yordansoar.es> | https://yordansoar.es/
 * @version 1.1.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['BO'] = array(
  'H' => 'Beni',
  'C' => 'Cochabamba',
  'B' => 'Chuquisaca',
  'L' => 'La Paz',
  'N' => 'Pando',
  'O' => 'Oruro',
  'P' => 'Potosí',
  'S' => 'Santa Cruz',
  'T' => 'Tarija',
);

// Use this filter to handle the Departments of Bolivia
$states['BO'] = apply_filters('scpwoo_custom_states_bo', $states['BO']);
