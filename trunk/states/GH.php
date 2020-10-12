<?php

/**
 * Regions of Ghana
 * - 16 administrative regions
 * 
 * Source: 
 * - [https://www.businessghana.com/site/news/general/182246/Know-the-16-regional-capitals-of-Ghana]
 *
 * @author  Edem Adjokatcher <adjokatsee@gmail.com> | https://flipmartgh.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['GH'] = array(
  'OTI' => 'Oti Region',
  'BNE' => 'Bono East Region',
  'BON' => 'Bono Region',
  'AHO' => 'Ahafo Region',
  'NHE' => 'North East Region',
  'SVH' => 'Savannah Region',
  'WSN' => 'Western North Region',
  'VOT' => 'Volta Region',
  'GRA' => 'Greater Accra Region',
  'EST' => 'Eastern Region',
  'WST' => 'Western Region',
  'CNT' => 'Central Region',
  'NTH' => 'Northern Region',
  'UPE' => 'Upper East Region',
  'UPW' => 'Upper west Region',
  'ASH' => 'Ashanti Region',
);

// Use this filter to handle the Regions of Ghana
$states['GH'] = apply_filters('scpwoo_custom_states_gh', $states['GH']);
