<?php

/**
 * $country states/provinces/regions
 * - $count states/provinces/regions
 * 
 * Source: 
 * - [Please add the source(s) link(s) to check the list of places]
 *
 * @author  Your Name Here <yourname@here.com> | https://yourwebsite.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['US'] = array(
        'AL' => __('Alabama', 'states-cities-and-places-for-woocommerce'),
        'AK' => __('Alaska', 'states-cities-and-places-for-woocommerce'),
        'AS' => __('American Samoa', 'states-cities-and-places-for-woocommerce'),
        'AZ' => __('Arizona', 'states-cities-and-places-for-woocommerce'),
        'AR' => __('Arkansas', 'states-cities-and-places-for-woocommerce'),
        'CA' => __('California', 'states-cities-and-places-for-woocommerce'),
        'CO' => __('Colorado', 'states-cities-and-places-for-woocommerce'),
        'CT' => __('Connecticut', 'states-cities-and-places-for-woocommerce'),
        'DE' => __('Delaware', 'states-cities-and-places-for-woocommerce'),
        'DC' => __('District of Columbia', 'states-cities-and-places-for-woocommerce'),
        'FSM' => __('Federated States of Micronesia', 'states-cities-and-places-for-woocommerce'),
        'FL' => __('Florida', 'states-cities-and-places-for-woocommerce'),
        'GA' => __('Georgia', 'states-cities-and-places-for-woocommerce'),
        'GU' => __('Guam', 'states-cities-and-places-for-woocommerce'),
        'HI' => __('Hawaii', 'states-cities-and-places-for-woocommerce'),
        'ID' => __('Idaho', 'states-cities-and-places-for-woocommerce'),
        'IL' => __('Illinois', 'states-cities-and-places-for-woocommerce'),
        'IN' => __('Indiana', 'states-cities-and-places-for-woocommerce'),
        'IA' => __('Iowa', 'states-cities-and-places-for-woocommerce'),
        'KS' => __('Kansas', 'states-cities-and-places-for-woocommerce'),
        'KY' => __('Kentucky', 'states-cities-and-places-for-woocommerce'),
        'LA' => __('Louisiana', 'states-cities-and-places-for-woocommerce'),
        'ME' => __('Maine', 'states-cities-and-places-for-woocommerce'),
        'MID' => __('Marshall Islands', 'states-cities-and-places-for-woocommerce'),
        'MD' => __('Maryland', 'states-cities-and-places-for-woocommerce'),
        'MA' => __('Massachusetts', 'states-cities-and-places-for-woocommerce'),
        'MI' => __('Michigan', 'states-cities-and-places-for-woocommerce'),
        'MN' => __('Minnesota', 'states-cities-and-places-for-woocommerce'),
        'MS' => __('Mississippi', 'states-cities-and-places-for-woocommerce'),
        'MO' => __('Missouri', 'states-cities-and-places-for-woocommerce'),
        'MT' => __('Montana', 'states-cities-and-places-for-woocommerce'),
        'NE' => __('Nebraska', 'states-cities-and-places-for-woocommerce'),
        'NV' => __('Nevada', 'states-cities-and-places-for-woocommerce'),
        'NH' => __('New Hampshire', 'states-cities-and-places-for-woocommerce'),
        'NJ' => __('New Jersey', 'states-cities-and-places-for-woocommerce'),
        'NM' => __('New Mexico', 'states-cities-and-places-for-woocommerce'),
        'NY' => __('New York', 'states-cities-and-places-for-woocommerce'),
        'NC' => __('North Carolina', 'states-cities-and-places-for-woocommerce'),
        'ND' => __('North Dakota', 'states-cities-and-places-for-woocommerce'),
        'MP' => __('Northern Mariana Islands', 'states-cities-and-places-for-woocommerce'),
        'OH' => __('Ohio', 'states-cities-and-places-for-woocommerce'),
        'OK' => __('Oklahoma', 'states-cities-and-places-for-woocommerce'),
        'OR' => __('Oregon', 'states-cities-and-places-for-woocommerce'),
        'PL' => __('Palau', 'states-cities-and-places-for-woocommerce'),
        'PA' => __('Pennsylvania', 'states-cities-and-places-for-woocommerce'),
        'PR' => __('Puerto Rico', 'states-cities-and-places-for-woocommerce'),
        'RI' => __('Rhode Island', 'states-cities-and-places-for-woocommerce'),
        'SC' => __('South Carolina', 'states-cities-and-places-for-woocommerce'),
        'SD' => __('South Dakota', 'states-cities-and-places-for-woocommerce'),
        'TN' => __('Tennessee', 'states-cities-and-places-for-woocommerce'),
        'TX' => __('Texas', 'states-cities-and-places-for-woocommerce'),
        'UT' => __('Utah', 'states-cities-and-places-for-woocommerce'),
        'VT' => __('Vermont', 'states-cities-and-places-for-woocommerce'),
        'VI' => __('Virgin Islands', 'states-cities-and-places-for-woocommerce'),
        'VA' => __('Virginia', 'states-cities-and-places-for-woocommerce'),
        'WA' => __('Washington', 'states-cities-and-places-for-woocommerce'),
        'WV' => __('West Virginia', 'states-cities-and-places-for-woocommerce'),
        'WI' => __('Wisconsin', 'states-cities-and-places-for-woocommerce'),
        'WY' => __('Wyoming', 'states-cities-and-places-for-woocommerce'),
        'AFA' => __('Armed Forces Americas', 'states-cities-and-places-for-woocommerce'),
        'AFE' => __('Armed Forces Europe', 'states-cities-and-places-for-woocommerce'),
        'AFP' => __('Armed Forces Pacific' 'states-cities-and-places-for-woocommerce'),
    );


// Use this filter to handle the Emirates of the United Arab Emirates 
$states['US'] = apply_filters('scpwoo_custom_states_us', $states['US']);
