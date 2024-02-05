<?php

/**
 * States and union territories of India
 * - 37 locations
 *
 * @author  Roni Mondal | https://github.com/ronimondal
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['IN'] = array(	
	'WB' => 'West Bengal',
	'AP' => 'Andra Pradesh',
	'AR' => 'Arunachal Pradesh',
	'AS' => 'Assam',
	'BR' => 'Bihar',
	'CT' => 'Chhattisgarh',
	'GA' => 'Goa',
	'GJ' => 'Gujarat',
	'HR' => 'Haryana',
	'HP' => 'Himachal Pradesh',
	'JK' => 'Jammu and Kashmir',
	'JH' => 'Jharkhand',
	'KA' => 'Karnataka',
	'KL' => 'Kerala',
	'MP' => 'Madhya Pradesh',
	'MH' => 'Maharashtra',
	'MN' => 'Manipur',
	'ML' => 'Meghalaya',
	'MZ' => 'Mizoram',
	'NL' => 'Nagaland',
	'OR' => 'Orissa',
	'PB' => 'Punjab',
	'RJ' => 'Rajasthan',
	'SK' => 'Sikkim',
	'TN' => 'Tamil Nadu',
	'TL' => 'Telangana',
	'TR' => 'Tripura',
	'UK' => 'Uttarakhand',
	'UP' => 'Uttar Pradesh',
	'AN' => 'Andaman and Nicobar Islands',
	'CH' => 'Chandigarh',
	'DN' => 'Dadar and Nagar Haveli',
	'DD' => 'Daman and Diu',
	'DL' => 'Delhi',
	'LK' => 'Ladakh',
	'LD' => 'Lakshadeep',
	'PY' => 'Pondicherry (Puducherry)',
);

// Use this filter to handle the States and union territories of India
$states['IN'] = apply_filters('scpwoo_custom_places_in', $states['IN']);
