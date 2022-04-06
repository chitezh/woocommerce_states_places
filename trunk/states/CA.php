<?php

/**
 * Emirates of the Canada
 *
 * @author   Waqas Ahmad <https://www.apnawaqas.com>
 * @version  1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * Credits: Waqas @ Arabianwave.com <https://www.arabianwave.com>
 */

global $states;

$states['CA'] = array(
	'AB' => __('Alberta', 'states-cities-and-places-for-woocommerce'),
	'BC' => __('British Columbia', 'states-cities-and-places-for-woocommerce'),
	'MB' => __('Manitoba', 'states-cities-and-places-for-woocommerce'),
	'NB' => __('New Brunswick', 'states-cities-and-places-for-woocommerce'),
	'NL' => __('Newfoundland and Labrador', 'states-cities-and-places-for-woocommerce'),
	'NS' => __('Nova Scotia', 'states-cities-and-places-for-woocommerce'),
	'ON' => __('Ontario', 'states-cities-and-places-for-woocommerce'),
	'PE' => __('Prince Edward Island', 'states-cities-and-places-for-woocommerce'),
	'QC' => __('Quebec', 'states-cities-and-places-for-woocommerce'),
	'SK' => __('Saskatchewan', 'states-cities-and-places-for-woocommerce'),
);

// Use this filter to handle the Emirates of the United Arab Emirates 
$states['CA'] = apply_filters('scpwoo_custom_states_ca', $states['CA']);