<?php

/**
 * Communes of Haiti
 * - 37 communes (only more importants)
 *
 * Source:
 * - https://fr.wikipedia.org/wiki/Liste_de_communes_d%27Ha%C3%AFti
 *
 * @author  Edner Zephir <zephiredner@hotmail.com> | https://achetertelephone.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $places;

$places['HT'] = array(
    // Artibonite
    'AR' => array(
        'Les Gonaïves',
        'Saint-Marc',
        'Verrettes',
        'Petite-Rivière-de-l\'Artibonite',
        'Desdunes',
        'Dessalines',
        'Saint-Michel-de-l\'Attalaye',
        'Gros-Morne',
    ),
    // Centre
    'CE' => array(
        'Hinche',
        'Mirebalais',
        'Lascahobas',
    ),
    // Grand'Anse
    'GA' => array(
        'Jérémie',
        'Anse-d\'Ainault',
        'Dame-Marie',
    ),
    // Nippes
    'NI' => array(
        'Miragoâne'
    ),
    // Nord
    'ND' => array(
        'Cap-Haïtien',
        'Limbé',
        'Grande-Rivière-du-Nord',
        'Pignon',
        'Saint-Raphael',
    ),
    // Nord-Est
    'NE' => array(
        'Fort-Liberté',
	    'Trou-du-Nord',
        'Ouanaminthe',
    ),
    // Nord-Ouest
    'NO' => array(
        'Port-de-Paix',
	    'Saint-Louis-du-Nord',
    ),
    // Ouest
    'OU' => array(
        'Port-au-Prince',
        'Carrefour',
        'Delmas',
        'Pétionville',
        'Petit-Goâve',
        'Léogâne',
        'Anse-à-Galets',
        'Croix-des-Bouquets',
        'Kenscoff',
    ),
    // Sud
    'SD' => array(
        'Les Cayes',
        'Aquin',
    ),
    // Sud-Est
    'SE' => array(
        'Jacmel',
    ),
);

// Use this filter to handle the Communes of Haiti
$places['HT'] = apply_filters('scpwoo_custom_places_ht', $places['HT']);
