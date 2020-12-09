<?php

/**
 * Regions of Saudi Arabia
 * - 13 administrative regions
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/Regions_of_Saudi_Arabia
 * - https://en.wikipedia.org/wiki/ISO_3166-2:SA
 *
 * @author  Yordan Soares <contacto@yordansoar.es> | https://yordansoar.es/
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['SA'] = array(
  'SA-01' => _x('Riyadh', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-02' => _x('Makkah', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-03' => _x('Al Madinah', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-04' => _x('Eastern Province', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-05' => _x('Al-Qassim', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-06' => _x('Ha\'il', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-07' => _x('Tabuk', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-08' => _x('Northern Borders', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-09' => _x('Jazan', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-10' => _x('Najran', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-11' => _x('Al-Bahah Region', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-12' => _x('Al-Jawf', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),
  'SA-14' => _x('\'Asir', 'Regions of Saudi Arabia', 'states-cities-and-places-for-woocommerce'),  
);

// Use this filter to handle the Regions of Saudi Arabia
$states['SA'] = apply_filters('scpwoo_custom_states_sa', $states['SA']);
