<?php

/**
 * States of Chile
 *
 * @author  Luis Sebastian Urrutia Fuentes <luis@urrutia.me>
 * @author  Elias Rabah
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states ['CL' ] = array (
	'CL-AP'   => 'Arica y Parinacota',
	'CL-TA'   => 'Tarapacá',
	'CL-AN'   => 'Antofagasta',
	'CL-AT'   => 'Atacama',
	'CL-CO'   => 'Coquimbo',
	'CL-VS'   => 'Valparaíso',
	'CL-RM'   => 'Metropolitana de Santiago',
	'CL-LI'   => 'Libertador General Bernardo OHiggins',
	'CL-ML'   => 'Maule',
	'CL-NB'   => 'Ñuble',
	'CL-BI'   => 'Bíobío',
	'CL-AR'   => 'La Araucanía',
	'CL-LR'   => 'Los Ríos',
	'CL-LL'   => 'Los Lagos',
	'CL-AI'   => 'Aysén del General Carlos Ibáñez del Campo',
	'CL-MA'   => 'Magallanes y Antártica Chilena',
);

// Use this filter to handle the States of Chile
$states['CL'] = apply_filters('scpwoo_custom_states_cl', $states['CL']);
