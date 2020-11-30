<?php

/**
 * Provinces and Territories of Pakistan
 * - 4 provinces
 * - 3 territories
 * 
 * Sources:
 * - https://en.wikipedia.org/wiki/Districts_of_Pakistan#Provinces_and_Territories
 *
 * @author   Faisal Basra <faisal.basra@outlook.com>
 * @version  1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * Credits: https://faisalbasra.blogspot.com/2013/11/cities-list-of-pakistan-in-excel-csv.html
 */

global $states;

$states['PK'] = array(
	'JK' => 'Azad Kashmir',
	'GB' => 'Gilgit Baltistan',
	'KP' => 'Khyber Pakhtunkhwa',
	'SD' => 'Sindh',
	'PB' => 'Punjab',
	'BA' => 'Balochistan',
	'IS' => 'Islamabad Capital Territory'
);

// Use this filter to handle the Provinces and Territories of Pakistan
$states['PK'] = apply_filters('scpwoo_custom_states_pk', $states['PK']);
