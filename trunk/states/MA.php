<?php

/**
 * Localities of Morocco
 * Source: https://www.iso.org/obp/ui/fr/#iso:code:3166:MA
 * @author   El Karima Reda
 * @version  1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['MA'] = array(
  'MA-05' => __('Béni Mellal-Khénifra', 'states-cities-and-places-for-woocommerce'),
  'MA-06' => __('Casablanca-Settat', 'states-cities-and-places-for-woocommerce'),
  'MA-12' => __('Dakhla-Oued Ed-Dahab', 'states-cities-and-places-for-woocommerce'),
  'MA-08' => __('Drâa-Tafilalet', 'states-cities-and-places-for-woocommerce'),
  'MA-03' => __('Fès-Meknès', 'states-cities-and-places-for-woocommerce'),
  'MA-10' => __('Guelmim-Oued Noun', 'states-cities-and-places-for-woocommerce'),
  'MA-02' => __('L\'Oriental', 'states-cities-and-places-for-woocommerce'),
  'MA-11' => __('Laâyoune-Sakia El Hamra', 'states-cities-and-places-for-woocommerce'),
  'MA-07' => __('Marrakech-Safi', 'states-cities-and-places-for-woocommerce'),
  'MA-04' => __('Rabat-Salé-Kénitra', 'states-cities-and-places-for-woocommerce'),
  'MA-09' => __('Souss-Massa', 'states-cities-and-places-for-woocommerce'),
  'MA-01' => __('Tanger-Tétouan-Al Hoceïma', 'states-cities-and-places-for-woocommerce'),
);

// Use this filter to handle the Region of Morocco
$states['MA'] = apply_filters('scpwoo_custom_states_ma', $states['MA']);
