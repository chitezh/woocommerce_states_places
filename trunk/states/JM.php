<?php

/**
 * Parishes in Jamaica (Equivalent of States or Provinces in other countries)
 * - 14 Parishes
 * 
 * Source: 
 * - https://www.iso.org/obp/ui/#iso:code:3166:JM
 *
 * @author  Ryon Whyte <ryon@sitepact.com> | https://sitepactja.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['JM'] = array(
  'JM-01' => 'Kingston & Saint Andrew',
  'JM-03' => 'Saint Thomas',
  'JM-04' => 'Portland',
  'JM-05' => 'Saint Mary',
  'JM-06' => 'Saint Ann',
  'JM-07' => 'Trelawny',
  'JM-08' => 'Saint James',
  'JM-09' => 'Hanover',
  'JM-10' => 'Westmoreland',
  'JM-11' => 'Saint Elizabeth',
  'JM-12' => 'Manchester',
  'JM-13' => 'Clarendon',
  'JM-14' => 'Saint Catherine',
);

// Use this filter to handle the Parishes of Jamaica
$states['JM'] = apply_filters('scpwoo_custom_states_jm', $states['JM']);