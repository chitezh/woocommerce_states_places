<?php

/**
 * Regions of Niger
 * - 7 regions
 *
 * Source:
 * - https://en.wikipedia.org/wiki/Regions_of_Niger
 *
 * @author  Ibrahim Nasir <ni1886@gmail.com> | https://howdoyou.tech
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;


$states['NE'] = array(
  'AG' => 'Agadez',
  'DF' => 'Diffa',
  'DS' => 'Dosso',
  'MA' => 'Maradi',
  'NI' => 'Niamey',
  'TH' => 'Tahoa',
  'TL' => 'Tillaberi',
  'ZI' => 'Zinder'
);

// Use this filter to handle the Districts of Mauritius
$states['NE'] = apply_filters('scpwoo_custom_states_ne', $states['NE']);
