<?php

/**
 * Provinces of Lebanon
 * - 6 provinces
 * 
 * Source: 
 * - Liban Post Back End
 *
 * @author  Mohamad Ali MAKKEH <makkehma@hotmail.fr> | https://gmartgroup.com/
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['LB'] = array(
  'BA' => 'Beirut',
  'AS' => 'North Lebanon',
  'JL' => 'Mount Lebanon',
  'JA' => 'South Lebanon',
  'BI' => 'Bikaa',
  'NB' => 'Nabatieh',
);

// Use this filter to handle the Provinces of Lebanon
$states['LB'] = apply_filters('scpwoo_custom_states_lb', $states['LB']);
