<?php

/**
 * States and federal territories of Malaysia
 * - 13 States and 3 federal territories
 *
 * Source:
 * - https://en.wikipedia.org/wiki/States_and_federal_territories_of_Malaysia
 *
 * @author  Amirah Zainuddin<web@syscomm.cc>
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['MY'] = array(
  'JHR' => 'Johor',
  'KDH' => 'Kedah',
  'KTN' => 'Kelantan',
  'MLK' => 'Melaka',
  'NSN' => 'Negeri Sembilan',
  'PHG' => 'Pahang',
  'PRK' => 'Perak',
  'PLS' => 'Perlis',
  'PNG' => 'Penang',
  'SBH' => 'Sabah',
  'SWK' => 'Sarawak',
  'SGR' => 'Selangor',
  'TRG' => 'Terengganu',
  'KUL' => 'W.P. Kuala Lumpur',
  'LBN' => 'W.P. Labuan',
  'PJY' => 'W.P. Putrajaya',
);

// Use this filter to handle the States and federal territories of Malaysia
$states['MY'] = apply_filters('scpwoo_custom_states_my', $states['MY']);
