<?php

/**
 * Departments of El Salvador
 * - 14 departments
 *
 * Source:
 * - https://en.wikipedia.org/wiki/Departments_of_El_Salvador
 *
 * @author  Guillermo Contreras <guillermojcontreras@gmail.com> | https://binario.com.sv
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['SV'] = array(
	'SV-AH' => 'Ahuachapan',
	'SV-CA' => 'Cabañas',
	'SV-CH' => 'Chalatenango',
	'SV-CU' => 'Cuscatlan',
	'SV-LI' => 'La Libertad',
	'SV-PA' => 'La Paz',
	'SV-UN' => 'La Union',
	'SV-MO' => 'Morazan',
	'SV-SM' => 'San Miguel',
	'SV-SS' => 'San Salvador',
	'SV-SV' => 'San Vicente',
	'SV-SA' => 'Santa Ana',
	'SV-SO' => 'Sonsonate',
	'SV-US' => 'Usulutan'
);

// Use this filter to handle the Departments of El Salvador
$states['SV'] = apply_filters('scpwoo_custom_states_sv', $states['SV']);
