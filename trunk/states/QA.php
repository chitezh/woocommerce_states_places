<?php

/**
 * Regions of Qatar
 * - 13 administrative regions
 *
 * Source:
 * - https://en.wikipedia.org/wiki/List_of_cities_in_Qatar
 *
 * @author  Ahmed Safaa <ahmed@sz4h.com> | https://sz4h.com/
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['QA'] = array(
	'QA-01' => _x('Al Shamal', 'Regions of Qatar', 'states-cities-and-places-for-woocommerce'),
	'QA-02' => _x('Al Rayyan', 'Regions of Qatar', 'states-cities-and-places-for-woocommerce'),
	'QA-03' => _x('Doha', 'Regions of Qatar', 'states-cities-and-places-for-woocommerce'),
	'QA-04' => _x('Umm Salal', 'Regions of Qatar', 'states-cities-and-places-for-woocommerce'),
	'QA-05' => _x('Al Daayen', 'Regions of Qatar', 'states-cities-and-places-for-woocommerce'),
	'QA-06' => _x('Al Khor', 'Regions of Qatar', 'states-cities-and-places-for-woocommerce'),
	'QA-07' => _x('l Wakrah', 'Regions of Qatar', 'states-cities-and-places-for-woocommerce'),
);

// Use this filter to handle the Regions of Qatar
$states['QA'] = apply_filters('scpwoo_custom_states_qa', $states['QA']);

