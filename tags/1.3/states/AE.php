<?php

/**
 * Emirates of the United Arab Emirates 
 *
 * @author   Waqas Ahmad <https://www.apnawaqas.com>
 * @version  1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * Credits: Waqas @ Arabianwave.com <https://www.arabianwave.com>
 */

global $states;

$states['AE'] = array(
	'DXB' => __('Dubai', 'states-cities-and-places-for-woocommerce'),
	'AUB' => __('Abu Dhabi', 'states-cities-and-places-for-woocommerce'),
	'ALN' => __('Al Ain', 'states-cities-and-places-for-woocommerce'),
	'WRN' => __('Western Region', 'states-cities-and-places-for-woocommerce'),
	'AAR' => __('Abu Dhabi Al Ain Road', 'states-cities-and-places-for-woocommerce'),
	'HTA' => __('Hatta', 'states-cities-and-places-for-woocommerce'),
	'SHJ' => __('Sharjah', 'states-cities-and-places-for-woocommerce'),
	'FUJ' => __('Fujairah', 'states-cities-and-places-for-woocommerce'),
	'AJM' => __('Ajman', 'states-cities-and-places-for-woocommerce'),
	'RAK' => __('Ras Al Khaimah', 'states-cities-and-places-for-woocommerce'),
	'UAQ' => __('Umm Al Quwain', 'states-cities-and-places-for-woocommerce'),
);

// Use this filter to handle the Emirates of the United Arab Emirates 
$states['AE'] = apply_filters('scpwoo_custom_states_ae', $states['AE']);
