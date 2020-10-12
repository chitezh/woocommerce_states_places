<?php

/**
 * Departments of Uruguay
 * - 19 departments
 *
 * Source:
 * https://es.wikipedia.org/wiki/Anexo:Departamentos_de_Uruguay
 * 
 * Updated: April 06, 2020
 * By Yordan Soares <contact@yordansoar.es> | https://yordansoar.es
 * 
 * @author  Alfonso Frachelle <info@idearius.com> | * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['UY'] = array(
	'UY-AR'   => 'Artigas',
	'UY-CA'   => 'Canelones',
	'UY-CL'   => 'Cerro Largo',
	'UY-CO'   => 'Colonia',
	'UY-DU'   => 'Durazno',
	'UY-FS'   => 'Flores',
	'UY-FD'   => 'Florida',
	'UY-LA'   => 'Lavalleja',
	'UY-MA'   => 'Maldonado',
	'UY-MO'   => 'Montevideo',
	'UY-PA'   => 'Paysandú',
	'UY-RN'   => 'Río Negro',
	'UY-RV'   => 'Rivera',
	'UY-RO'   => 'Rocha',
	'UY-SA'   => 'Salto',
	'UY-SJ'   => 'San José',
	'UY-SO'   => 'Soriano',
	'UY-TA'   => 'Tacuarembó',
	'UY-TT'   => 'Treinta y Tres',
);

// Use this filter to handle the Departments of Uruguay
$states['UY'] = apply_filters('scpwoo_custom_states_uy', $states['UY']);
