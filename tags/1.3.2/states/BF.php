<?php

/**
* Regions of Burkina Faso
* 13 regions
*
* Source:
* - https://en.wikipedia.org/wiki/Regions_of_Burkina_Faso
*
* @author  Stéphane SAMANDOULOUGOU <burkinar@gmail.com>
* @version 1.0.0
* @license http://www.gnu.org/licenses/gpl-2.0.html
*/

global $states;

$states['BF'] = array(
    'HB' => 'Hauts-Bassins',
    'BM' => 'Boucle du Mouhoun',
    'SA' => 'Sahel',
    'ES' => 'Est',
    'SO' => 'Sud-Ouest',
    'CN' => 'Centre-Nord',
    'CO' => 'Centre-Ouest',
    'PC' => 'Plateau-Central',
    'NO' => 'Nord',
    'CE' => 'Centre-Est',
    'CE' => 'Centre',
    'CA' => 'Cascades',
    'CS' => 'Centre-Sud',
);

// Use this filter to handle the Regions of Burkina Faso
$states['BF'] = apply_filters('scpwoo_custom_states_bf', $states['BF']);
