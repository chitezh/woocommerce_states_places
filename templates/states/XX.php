<?php

/**
 * $country states/provinces/regions
 * - $count states/provinces/regions
 * 
 * Source: 
 * - [Please add the source(s) link(s) to check the list of places]
 *
 * @author  Your Name Here <yourname@here.com> | https://yourwebsite.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

// Replace 'XX' code for your Country Code. E.g. 'NG' for Nigeria, 'CO' for Colombia, 'VE' for Venezuela, etc.
// Please refer to WooCommerce country codes : https://github.com/woocommerce/woocommerce/blob/master/i18n/countries.php
$states['XX'] = array(
  // Some countries like Denmark or Belgium do not use the state field, 
  // if your country doesn't use it either, leave the array empty.
  // E.g. $states['DK'] = array();

  // Otherwise, if the state field is used in your country:
  // Add a State Code to each State Name using a logic sense. 
  // E.g. 'FA' => 'Florida'
  // You can use any standar like ISO, ANSI, etc. There is no an mandatory standar or system and you can use your own.
  // Please see the U.S. state abbreviations to see an example:
  // https://en.wikipedia.org/wiki/List_of_U.S._state_abbreviations
  'AA' => 'State 1',
  'BB' => 'State 2',
  'CC' => 'State 3',
);
