<?php

/**
 * Provinces of Ecuador
 * - 24 provinces
 *
 * Source:
 * - http://www.statoids.com/uec.html
 *
 * @author  Franklin Lucero Correa <frank_lucero@hotmail.com>
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['EC'] = array(
    'EC.AZ' => 'Azuay',
    'EC.BO' => 'Bolívar',
    'EC.CB' => 'Chimborazo',
    'EC.CN' => 'Cañar',
    'EC.CR' => 'Carchi',
    'EC.CT' => 'Cotopaxi',
    'EC.EO' => 'El Oro',
    'EC.ES' => 'Esmeraldas',
    'EC.GA' => 'Galápagos',
    'EC.GY' => 'Guayas',
    'EC.IM' => 'Imbabura',
    'EC.LJ' => 'Loja',
    'EC.LR' => 'Los Ríos',
    'EC.MN' => 'Manabí',
    'EC.MS' => 'Morona-Santiago',
    'EC.NA' => 'Napo',
    'EC.OR' => 'Orellana',
    'EC.PA' => 'Pastaza',
    'EC.PC' => 'Pichincha',
    'EC.SD' => 'Santo Domingo de los Tsáchilas',
    'EC.SE' => 'Santa Elena',
    'EC.SU' => 'Sucumbíos',
    'EC.TU' => 'Tungurahua',
    'EC.ZC' => 'Zamora-Chinchipe',
);

// Use this filter to handle the Provinces of Ecuador
$states['EC'] = apply_filters('scpwoo_custom_states_ec', $states['EC']);
