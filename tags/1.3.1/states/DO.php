<?php

/**
 *  Provinces of the Dominican Republic
 * - 1 national district
 * - 31 provinces
 * 
 * Sources:
 * - https://es.wikipedia.org/wiki/Provincias_de_la_Rep%C3%BAblica_Dominicana
 *
 * @author  Javier Molina <jmolina@forways.com.do> | https://forways.com.do
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['DO'] = array(
  'DO-01' => 'Distrito Nacional',
  'DO-02' => 'Azua',
  'DO-03' => 'Bahoruco',
  'DO-04' => 'Barahona',
  'DO-05' => 'Dajabón',
  'DO-06' => 'Duarte',
  'DO-07' => 'Elías Piña',
  'DO-08' => 'El Seibo',
  'DO-09' => 'Espaillat',
  'DO-30' => 'Hato Mayor',
  'DO-19' => 'Hermanas Mirabal',
  'DO-10' => 'Independencia',
  'DO-11' => 'La Altagracia',
  'DO-12' => 'La Romana',
  'DO-13' => 'La Vega',
  'DO-14' => 'María Trinidad Sánchez',
  'DO-28' => 'Monseñor Nouel',
  'DO-15' => 'Monte Cristi',
  'DO-29' => 'Monte Plata',
  'DO-16' => 'Pedernales',
  'DO-17' => 'Peravia',
  'DO-18' => 'Puerto Plata',
  'DO-20' => 'Samaná',
  'DO-21' => 'San Cristóbal',
  'DO-31' => 'San José de Ocoa',
  'DO-22' => 'San Juan',
  'DO-23' => 'San Pedro de Macorís',
  'DO-24' => 'Sánchez Ramírez',
  'DO-25' => 'Santiago',
  'DO-26' => 'Santiago Rodríguez',
  'DO-32' => 'Santo Domingo',
  'DO-27' => 'Valverde',
);

// Use this filter to handle the Provinces of the Dominican Republic
$states['DO'] = apply_filters('scpwoo_custom_states_do', $states['DO']);
