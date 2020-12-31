<?php

/**
 * Districts of Mauritius
 * - 10 districts
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/Districts_of_Mauritius
 * - http://nourmedia.com/world/MP/
 * - http://www.tageo.com/index-e-mp.htm
 *
 * @author  Audrey <info@pongo.io> | https://pongo.io
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['MU'] = array(
  'BL' => 'Black River',
  'FL' => 'Flacq',
  'GP' => 'Grand Port',
  'MO' => 'Moka',
  'PA' => 'Pamplemousses',
  'PW' => 'Plaines Wilhems',
  'PL' => 'Port Louis',
  'RR' => 'Rivière du Rempart',
  'RO' => 'Rodrigues',
  'SA' => 'Savanne',
);

// Use this filter to handle the Districts of Mauritius
$states['MU'] = apply_filters('scpwoo_custom_states_mu', $states['MU']);