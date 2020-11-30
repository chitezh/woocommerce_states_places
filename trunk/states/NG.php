<?php

/**
 * States of Nigeria
 *
 * @author Alexander Asomba <alex@asomba.com>
 * @author Kingsley Ochu <ochu.kc@gmail.com>
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * Credits: alexasomba
 */

global $states;

$states['NG'] = array(
	'LA' => 'Lagos',
	'AB' => 'Abia',
	'FC' => 'Abuja',
	'AD' => 'Adamawa',
	'AK' => 'Akwa Ibom',
	'AN' => 'Anambra',
	'BA' => 'Bauchi',
	'BY' => 'Bayelsa',
	'BE' => 'Benue',
	'BO' => 'Borno',
	'CR' => 'Cross River',
	'DE' => 'Delta',
	'EB' => 'Ebonyi',
	'ED' => 'Edo',
	'EK' => 'Ekiti',
	'EN' => 'Enugu',
	'GO' => 'Gombe',
	'IM' => 'Imo',
	'JI' => 'Jigawa',
	'KD' => 'Kaduna',
	'KN' => 'Kano',
	'KT' => 'Katsina',
	'KE' => 'Kebbi',
	'KO' => 'Kogi',
	'KW' => 'Kwara',
	'NA' => 'Nasarawa',
	'NI' => 'Niger',
	'OG' => 'Ogun',
	'ON' => 'Ondo',
	'OS' => 'Osun',
	'OY' => 'Oyo',
	'PL' => 'Plateau',
	'RI' => 'Rivers',
	'SO' => 'Sokoto',
	'TA' => 'Taraba',
	'YO' => 'Yobe',
	'ZA' => 'Zamfara',
);

// Use this filter to handle the States of Nigeria
$states['NG'] = apply_filters('scpwoo_custom_states_ng', $states['NG']);
