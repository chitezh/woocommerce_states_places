<?php

/**
 * Departments of Guatemala
 * - 22 departments
 * 
 * Source:
 * - https://es.wikipedia.org/wiki/Departamentos_de_Guatemala
 * 
 * Updated: March 22, 2020
 * By Yordan Soares <contact@yordansoar.es> | https://yordansoar.es
 *
 * @author  Ronald Montenegro <rodmontgt@gmail.com> | http://espaciogt.wordpress.com
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['GT'] = array (
	'GT-AV' => 'Alta Verapaz',
	'GT-BV' => 'Baja Verapaz',
	'GT-CM' => 'Chimaltenango',
	'GT-CQ' => 'Chiquimula',
	'GT-PR' => 'El Progreso',
	'GT-ES' => 'Escuintla',
	'GT-GU' => 'Guatemala',
	'GT-HU' => 'Huehuetenango',
	'GT-IZ' => 'Izabal',
	'GT-JA' => 'Jalapa',
	'GT-JU' => 'Jutiapa',
	'GT-PE' => 'Petén',
	'GT-QZ' => 'Quetzaltenango',
	'GT-QC' => 'Quiché',
	'GT-RE' => 'Retalhuleu',
	'GT-SA' => 'Sacatepéquez',
	'GT-SM' => 'San Marcos',
	'GT-SR' => 'Santa Rosa',
	'GT-SO' => 'Sololá',
	'GT-SU' => 'Suchitepéquez',
	'GT-TO' => 'Totonicapán',
	'GT-ZA' => 'Zacapa'
);

// Use this filter to handle the Departments of Guatemala
$states['GT'] = apply_filters('scpwoo_custom_states_gt', $states['GT']);
