<?php

/**
 * Departments of Peru
 * - 2 provinces (Lima and Callao)
 * - 24 departaments
 * 
 * Updated: September 18th, 2020
 * By Yordan Soares <contact@yordansoar.es> | https://yordansoar.es
 *
 * Source:
 * - https://es.db-city.com/Per%C3%BA
 *
 * @author  David Soto <ddiods@hotmail.com>
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['PE'] = array(
  'AMA' => 'Amazonas',
  'ANC' => 'Áncash',
  'APU' => 'Apurímac',
  'ARE' => 'Arequipa',
  'AYA' => 'Ayacucho',
  'CAJ' => 'Cajamarca',
  'CAL' => 'Callao',
  'CUS' => 'Cusco',
  'HUV' => 'Huancavelica',
  'HUC' => 'Huánuco',
  'ICA' => 'Ica',
  'JUN' => 'Junín',
  'LAL' => 'La Libertad',
  'LAM' => 'Lambayeque',
  'LIM' => 'Lima Metropolitana',
  'LMA' => 'Lima Provincia',
  'LOR' => 'Loreto',
  'MDD' => 'Madre de Dios',
  'MOQ' => 'Moquegua',
  'PAS' => 'Pasco',
  'PIU' => 'Piura',
  'PUN' => 'Puno',
  'SAM' => 'San Martín',
  'TAC' => 'Tacna',
  'TUM' => 'Tumbes',
  'UCA' => 'Ucayali'
);

// Use this filter to handle the Departments of Peru
$states['PE'] = apply_filters('scpwoo_custom_states_pe', $states['PE']);
