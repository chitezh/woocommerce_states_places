<?php

/**
 * Trinidad & Tobago
 * - 9 regions, 5 municipalities and 1 ward.
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/ISO_3166-2:TT
 *
 * @author  Marlon Dyce <marlon@dycedesigns.com>
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['TT'] = array(
  'Tobago' => 'Tobago',
  'Arima' => 'Arima',
  'Chaguanas' => 'Chaguanas',
  'Couva/Tabaquite/Talparo' => 'Couva/Tabaquite/Talparo',
  'Diego Martin' => 'Diego Martin',
  'Mayaro/Rio Claro' => 'Mayaro/Rio Claro',
  'Penal/Debe' => 'Penal/Debe',
  'Point Fortin' => 'Point Fortin',
  'Port of Spain' => 'Port of Spain',
  'Princes Town' => 'Princes Town',
  'San Fernando' => 'San Fernando',
  'San Juan/Laventille' => 'San Juan/Laventille',
  'Sangre Grande' => 'Sangre Grande',
  'Siparia' => 'Siparia',
  'Tunapuna/Piarco' => 'Tunapuna/Piarco'
);

// Use this filter to handle the Borough / City / Regional Corporations of Trinidad & Tobago
$states['TT'] = apply_filters('scpwoo_custom_states_tt', $states['TT']);