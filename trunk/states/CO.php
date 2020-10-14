<?php

/**
 * Departments of Colombia
 * - 32 departments
 * - 1  Capital District
 *
 * Source:
 * - https://www.iso.org/obp/ui/#iso:code:3166:CO
 *
 * @author  José Ayram <ayramj@gmail.com>
 * @author  José Ayram
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License 
 */

global $states;

$states['CO'] = array(
	'AMA' => 'Amazonas',
	'ANT' => 'Antioquía',
	'ARA' => 'Arauca',
	'ATL' => 'Atlántico',
	'BOL' => 'Bolívar',
	'BOY' => 'Boyacá',
	'CAL' => 'Caldas',
	'CAQ' => 'Caquetá',
	'CAS' => 'Casanare',
	'CAU' => 'Cauca',
	'CES' => 'Cesar',
	'CHO' => 'Chocó',
	'COR' => 'Córdoba',
	'CUN' => 'Cundinamarca',
	'DC'  => 'Distrito Capital de Bogotá',
	'GUA' => 'Guainía',
	'GUV' => 'Guaviare',
	'HUI' => 'Huila',
	'LAG' => 'La Guajira',
	'MAG' => 'Magdalena',
	'MET' => 'Meta',
	'NAR' => 'Nariño',
	'NSA' => 'Norte de Santander',
	'PUT' => 'Putumayo',
	'QUI' => 'Quindío',
	'RIS' => 'Risaralda',
	'SAP' => 'Archipiélago de San Andrés, Providencia y Santa Catalina',
	'SAN' => 'Santander',
	'SUC' => 'Sucre',
	'TOL' => 'Tolima',
	'VAC' => 'Valle del Cauca',
	'VAU' => 'Vaupés',
	'VID' => 'Vichada',
);

// Use this filter to handle the Departments of Colombia
$states['CO'] = apply_filters('scpwoo_custom_states_co', $states['CO']);
