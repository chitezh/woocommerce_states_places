<?php

/**
 * $country states/provinces/regions
 * - $count states/provinces/regions
 * 
 * Source: 
 * - [https://en.wikipedia.org/wiki/List_of_cities_in_Jordan]
 *
 * @author  Saed A. Haroon <s.haroon@5edmat.com> | https://5edmat.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

// Replace 'XX' code for your Country Code. E.g. 'NG' for Nigeria, 'CO' for Colombia, 'VE' for Venezuela, etc.
// Please refer to WooCommerce country codes : https://github.com/woocommerce/woocommerce/blob/master/i18n/countries.php
$states['JO'] = array(
  // Some countries like Denmark or Belgium do not use the state field, 
  // if your country doesn't use it either, leave the array empty.
  // E.g. $states['DK'] = array();

  // Otherwise, if the state field is used in your country:
  // Add a State Code to each State Name using a logic sense. 
  // E.g. 'FA' => 'Florida'
  // You can use any standar like ISO, ANSI, etc. There is no an mandatory standar or system and you can use your own.
  // Please see the U.S. state abbreviations to see an example:
  // https://en.wikipedia.org/wiki/List_of_U.S._state_abbreviations
  'AJ' => 'Ajloun',
  'BA' => 'Al-Balqa',
  'AQ' => 'Aqaba',
  'AM' => 'Amman',
  'JA' => 'Jerash',
  'IR' => 'Irbid',
  'KA' => 'Al-Karak',
  'MA' => "Ma'an",
  'MD' => 'Madaba',
  'MF' => 'Mafraq',
  'TA' => 'Tafilah',
  'ZA' => 'Zarqa',

);
