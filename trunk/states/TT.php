<?php

/**
 * Trinidad & Tobago
 * - 9 regions, 5 municipalities and 1 ward.
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/ISO_3166-2:TT
 *
 * @author  Marlon Dyce <marlon@dycedesigns.com>
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['TT'] = array();

// Use this filter to handle the Borough / City / Regional Corporations of Trinidad & Tobago
$states['TT'] = apply_filters('scpwoo_custom_states_tt', $states['TT']);
