<?php

/**
 * Governorates of Tunisia
 * - 24 gorvenorates
 *
 * Source:
 * - https://en.wikipedia.org/wiki/Subdivisions_of_Tunisia
 * 
 * Updated: March 22, 2020
 * By Yordan Soares <contact@yordansoar.es> | https://yordansoar.es
 * 
 * @author   anouarbensaad <bensaad.tig@gmail.com>
 * @version  1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * Credits: alexasomba
 */

global $states;

$states['TN'] = array(
	'AR' => 'Ariana',
	'BA' => 'Ben Arous',
	'BZ' => 'Bizerte',
	'BE' => 'Béja',
	'GB' => 'Gabes',
	'GF' => 'Gafsa',
	'JD' => 'Jendouba',
	'KR' => 'Kairouan',
	'KS' => 'Kasserine',
	'KB' => 'Kebili',
	'LM' => 'La Manouba',
	'LK' => 'Le Kef',
	'MH' => 'Mahdia',
	'MN' => 'Monastir',
	'MD' => 'Médenine',
	'NB' => 'Nabeul',
	'SF' => 'Sfax',
	'SB' => 'Sidi Bouzid',
	'SI' => 'Siliana',
	'SS' => 'Sousse',
	'TT' => 'Tataouine',
	'TZ' => 'Tozeur',
	'TS' => 'Tunis',
	'ZG' => 'Zaghouan',
);

// Use this filter to handle the Governorates of Tunisia
$states['TN'] = apply_filters('scpwoo_custom_states_tn', $states['TN']);
