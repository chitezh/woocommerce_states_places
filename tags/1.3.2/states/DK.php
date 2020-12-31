<?php

/**
 * Regions of Denmark
 * 
 * Source: 
 * - https://da.wikipedia.org/wiki/Strukturreformen
 * - https://da.wikipedia.org/wiki/Danmarks_regioner
 * - https://en.wikipedia.org/wiki/Regions_of_Denmark
 * - https://www.iso.org/obp/ui/#iso:code:3166:DK
 *
 * @author  Yordan Soares <contacto@yordansoar.es> | https://yordansoar.es/
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

// Disable the State field
$states['DK'] = array();

// Use this filter to handle the Regions of Denmark
$states['DK'] = apply_filters('scpwoo_custom_states_dk', $states['DK']);
