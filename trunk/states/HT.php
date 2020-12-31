<?php

/**
 * Departments of Haiti
 * - 10 departments
 *
 * Source:
 * - https://fr.wikipedia.org/wiki/ISO_3166-2:HT
 *
 * @author  Edner Zephir <zephiredner@hotmail.com> | https://achetertelephone.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['HT'] = array(
  'AR' => 'Artibonite',
  'CE' => 'Centre',
  'GA' => 'Grand\'Anse',
  'NI' => 'Nippes',
  'ND' => 'Nord',
  'NE' => 'Nord-Est',
  'NO' => 'Nord-Ouest',
  'OU' => 'Ouest',
  'SD' => 'Sud',
  'SE' => 'Sud-Est',
);

// Use this filter to handle the Departments of Haiti
$states['HT'] = apply_filters('scpwoo_custom_states_ht', $states['HT']);
