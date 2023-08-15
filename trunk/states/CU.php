<?php

/**
 * Provinces of Cuba
 * - 16 provinces
 *
 * Source:
 * -https://www.directoriocubano.info/postales/
 *
 * @author   Ramiro Rodpa <www.rmr@gmail.com>
 * @version  1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['CU'] = array(
	'CH' => 'La Habana',
	'AR' => 'Artemisa',
	'CM' => 'Camagüey',
	'CA' => 'Ciego de Ávila',
	'CF' => 'Cienfuegos',
	'GR' => 'Granma',
	'GU' => 'Guantánamo',
	'HO' => 'Holguín',
	'IJ' => 'Isla de la Juventud',
	'LT' => 'Las Tunas',
	'MA' => 'Matanzas',
	'MQ' => 'Mayabeque',
	'PD' => 'Pinar del Río',
	'SS' => 'Sancti Spíritus',
	'SC' => 'Santiago de Cuba',
	'VC' => 'Villa Clara',
);

// Use this filter to handle the Provinces of Cuba
$states['CU'] = apply_filters('scpwoo_custom_states_cu', $states['CU']);
