<?php

/**
 * States and territories of Australia
 * - 8 states and territories
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/States_and_territories_of_Australia
 *
 * @author  Gopinath N A <viratgopinath@gmail.com>
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['AU'] = array(
  'ACT' => 'Australian Capital Territory',
  'NSW' => 'New South Wales',
  'NT' => 'Northern Territory',
  'QLD' => 'Queensland',
  'SA' => 'South Australia',
  'TAS' => 'Tasmania',
  'VIC' => 'Victoria',
  'WA' => 'Western Australia',
);

// Use this filter to handle the States and territories of Australia
$states['AU'] = apply_filters('scpwoo_custom_states_au', $states['AU']);
