<?php

/**
 * Governorates of Bahrain
 * - 4 Governorates
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/Governorates_of_Bahrain
 * - https://en.wikipedia.org/wiki/ISO_3166-2:BH
 *
 * @author  Ebrahim Ahmed <ebrahim@alraneenlabs.com> | https://alraneenlabs.com/
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['BH'] = array(
  'BH-13' => _x('Capital', 'Governorate of Bahrain', 'states-cities-and-places-for-woocommerce'),
  'BH-14' => _x('Southern', 'Governorate of Bahrain', 'states-cities-and-places-for-woocommerce'),
  'BH-15' => _x('Muharraq', 'Governorate of Bahrain', 'states-cities-and-places-for-woocommerce'),
  'BH-17' => _x('Northern', 'Governorate of Bahrain', 'states-cities-and-places-for-woocommerce'),
);

// Use this filter to handle the Governorates of Bahrain
$states['BH'] = apply_filters('scpwoo_custom_states_bh', $states['BH']);
