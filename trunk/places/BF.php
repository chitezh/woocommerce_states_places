<?php

/**
* Provinces of Burkina Faso
* - 45 provinces
*
* Source:
* - https://en.wikipedia.org/wiki/Provinces_of_Burkina_Faso
*
* @author  Stéphane SAMANDOULOUGOU <burkinar@gmail.com>
* @version 1.0.0
* @license http://www.gnu.org/licenses/gpl-2.0.html
*/

global $places;

$places['BF'] = array(
    // Hauts-Bassins
    'HB' => array(
        'Bobo-Dioulasso',
        'Houndé',
        'Orodara',
    ),
    // Boucle du Mouhoun
    'BM' => array(
        'Bonou-Toaga',
        'Boromo',
        'Dédougou',
        'Kouka',
        'Nouna',
        'Solenzo',
        'Tougan',
    ),
    // Sahel
    'SA' => array(
        'Djibo',
        'Dori',
    ),
    // Est
    'ES' => array(
        'Diapaga',
        'Fada N\'Gourma',
        'Pama',
    ),
    // Sud-Ouest
    'SO' => array(
        'Dano',
        'Diébougou',
    ),
    // Centre-Nord
    'CN' => array(
        'Boulsa',
        'Kaya',
        'Kongoussi',
        'Manga',
        'Pissila',
    ),
    // Centre-Ouest
    'CO' => array(
        'Khyon',
        'Kokologo',
        'Kordié',
        'Koudougou',
        'Léo',
        'Réo',
    ),
    // Plateau-Central
    'PC' => array(
        'Boussé',
        'Ziniaré',
        'Zorgho',
    ),
    // Nord
    'NO' => array(
        'Gourcy',
        'Ouahigouya',
        'Yako',
        'Gourcy',
    ),
    // Centre-Est
    'CE' => array(
        'Koupéla',
        'Garango',
        'Ouargaye',
        'Pouytenga',
        'Tenkodogo',
    ),
    // Centre
    'CT' => array(
        'Ouagadougou',
        'Tanghin-Dassouri',
    ),
    // Cascades
    'CA'  => array(
        'Banfora',
    ),
    // Centre-Sud
    'CS' => array(
        'Kombissiri',
        'Pô',
    ),
);

// Use this filter to handle the Provinces of Burkina Faso
$places['BF'] = apply_filters('scpwoo_custom_places_bf', $places['BF']);
