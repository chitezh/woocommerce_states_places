<?php

/**
 * Governorates of Egypt
 *
 * Source:
 * https://github.com/Tech-Labs/egypt-governorates-and-cities-db
 *
 * @author  Heba Fareed
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['EG'] = array(
  'ISK' => _x('Alexandria', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'ASU' => _x('Assiut', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'ASW' => _x('Aswan', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'BHR' => _x('Beheira', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'BNS' => _x('Beni Suef', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'CAI' => _x('Cairo', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'DMI' => _x('Damietta', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'DQH' => _x('Dakahlia', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'FYM' => _x('Fayoum', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'GHB' => _x('Gharbiya', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'GIZ' => _x('Giza', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'ISM' => _x('Ismailia', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'KAS' => _x('Kafr Al sheikh', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'LUX' => _x('Luxor', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'MAT' => _x('Matrouh', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'MIN' => _x('Minya', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'MNF' => _x('Monofia', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'NEV' => _x('New Valley', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'NSI' => _x('North Sinai', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'POS' => _x('Port Said', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'QLY' => _x('Qaliubiya', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'QNA' => _x('Qena', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'BAH' => _x('Red Sea', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'SHA' => _x('Sharkia', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'SOH' => _x('Sohag', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'SSI' => _x('South Sinai', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
  'SUZ' => _x('Suez', 'Governorate of Egypt', 'states-cities-and-places-for-woocommerce'),
);

// Use this filter to handle the Governorates of Egypt
$states['EG'] = apply_filters('scpwoo_custom_states_eg', $states['EG']);
