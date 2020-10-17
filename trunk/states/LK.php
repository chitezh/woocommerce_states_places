<?php

/**
 * Districts of Sri Lanka
 * - 25 districts
 *
 * @author  Pasindu Perera <admin@lankamarket.lk> | https://lankamarket.lk
 * @version 1.0
 *
 * @authors  Anas Rafaideen <anas@tecrocketspace.com> & Luqmaan Siddeeq <luqmaan@tecrocketspace.com> | https://tecrocketspace.com
 * @version 1.2
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['LK'] = array(
  'CMB' => 'Colombo',
  'GAM' => 'Gampaha',
  'KAL' => 'Kalutara',
  'KAN' => 'Kandy',
  'MAT' => 'Matale',
  'NUE' => 'Nuwara Eliya',
  'BAT' => 'Batticaloa',
  'TRI' => 'Trincomalee',
  'AMP' => 'Ampara',
  'JAF' => 'Jaffna',
  'MAN' => 'Mannar',
  'MUL' => 'Mullaitivu',
  'VAV' => 'Vavuniya',
  'ANU' => 'Anuradhapura',
  'POL' => 'Polonnaruwa',
  'KUR' => 'Kurunegala',
  'PUT' => 'Puttalam',
  'RAT' => 'Ratnapura',
  'KEG' => 'Kegalle',
  'GAL' => 'Galle',
  'MTR' => 'Matara',
  'HAM' => 'Hambantota',
  'BAD' => 'Badulla',
  'MON' => 'Monaragala',
  'KIL' => 'Kilinochchi',
);

// Use this filter to handle the Districts of Sri Lanka
$states['LK'] = apply_filters('scpwoo_custom_states_lk', $states['LK']);
