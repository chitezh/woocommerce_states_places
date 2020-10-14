<?php

/**
 * Departments of Nicaragua
 * - 2 self-governing regions (autonomous communities)
 * - 15 departments
 * 
 * Source:
 * https://es.wikipedia.org/wiki/Anexo:Departamentos_de_Nicaragua
 * 
 * Updated: March 22, 2020
 * By Yordan Soares <contact@yordansoar.es> | https://yordansoar.es
 *
 * @author  ahc505 - https://github.com/ahc505
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
global $states;

$states['NI'] = array(
    'BOA' => 'Boaco',
    'CAR' => 'Carazo',
    'CHI' => 'Chinandega',
    'CHO' => 'Chontales',
    'EST' => 'Esteli',
    'GRA' => 'Granada',
    'JIN' => 'Jinotega',
    'LEO' => 'León',
    'MAD' => 'Madriz',
    'MAN' => 'Managua',
    'MAS' => 'Masaya',
    'MAT' => 'Matagalpa',
    'NUE' => 'Nueva Segovia',
    'RAS' => 'RACCS',
    'RAN' => 'RACCN',
    'RIO' => 'Rio San Juan',
    'RIV' => 'Rivas',
);

// Use this filter to handle the Departments of Nicaragua
$states['NI'] = apply_filters('scpwoo_custom_states_ni', $states['NI']);
