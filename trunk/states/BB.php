<?php

/**
 * Barbados
 * - 11 Parishes
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/ISO_3166-2:BB
 *
 * @author  Damien Alleyne <damien.alleyne@gmail.com>
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['BB'] = array(
  'BB-01' => 'Christ Church',
  'BB-02' => 'Saint Andrew',
  'BB-03' => 'Saint George',
  'BB-04' => 'Saint James',
  'BB-05' => 'Saint John',
  'BB-06' => 'Saint Joseph',
  'BB-07' => 'Saint Lucy',
  'BB-08' => 'Saint Michael',
  'BB-09' => 'Saint Peter',
  'BB-10' => 'Saint Philip',
  'BB-11' => 'Saint Thomas'
);

// Use this filter to handle the Parishes of Barbados
$states['BB'] = apply_filters('scpwoo_custom_states_bb', $states['BB']);
