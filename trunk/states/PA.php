<?php

/**
 * Provinces of Panama
 * - 10 Provinces
 * - 3 Comarcas (provincial-level indigenous regions)
 * 
 * Source:
 * - https://es.wikipedia.org/wiki/Anexo:Provincias_y_comarcas_ind%C3%ADgenas_de_Panam%C3%A1
 *
 * @author  Yordan Soares <contacto@yordansoar.es> | https://yordansoar.es
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['PA'] = array(
  'PAN-1' => 'Provincia de Bocas del Toro',
  'PAN-2' => 'Provincia de Coclé',
  'PAN-3' => 'Provincia de Colón',
  'PAN-4' => 'Provincia de Chiriquí',
  'PAN-5' => 'Provincia del Darién',
  'PAN-6' => 'Provincia de Herrera',
  'PAN-7' => 'Provincia de Los Santos',
  'PAN-8' => 'Provincia de Panamá',
  'PAN-9' => 'Provincia de Panamá Oeste',
  'PAN-10' => 'Provincia de Veraguas',
  'PAN-EW' => 'Comarca Emberá-Wounaan',
  'PAN-KY' => 'Comarca Guna Yala',
  'PAN-NB' => 'Comarca Ngäbe-Buglé'
);

// Use this filter to handle the Provinces of Panama
$states['PA'] = apply_filters('scpwoo_custom_states_pa', $states['PA']);
