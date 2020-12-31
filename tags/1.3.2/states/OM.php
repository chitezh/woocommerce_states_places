<?php

/**
 * Governorates of Oman
 * - 11 governorate
 * 
 * Sources: 
 * - https://en.wikipedia.org/wiki/Governorates_of_Oman
 * @author  iAlwardi <alwardiamur@gmail.com>
 * @author  Moayid Al Subhi <moayidalsubhi@gmail.com>  
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['OM'] = array(
  'MC' => _x('Muscat', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'AD' => _x('Ad Dakhiliyah', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'BN' => _x('Al Batinah North', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'BS' => _x('Al Batinah South', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'BU' => _x('Al Buraymi', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'DH' => _x('Ad Dhahirah', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'WS' => _x('Al Wusta', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'MN' => _x('Musandam', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'SN' => _x('Ash Sharqiyah North', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'SS' => _x('Ash Sharqiyah South', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce'),
  'DO' => _x('Dhofar', 'Governorates of Oman', 'states-cities-and-places-for-woocommerce')
);

// Use this filter to handle the Governorates of Oman
$states['OM'] = apply_filters('scpwoo_custom_states_om', $states['OM']);
