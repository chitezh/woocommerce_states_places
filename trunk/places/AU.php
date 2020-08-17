<?php

/**
 * $country places/cities/municipalities/districts
 * - $count places/cities/municipalities/districts
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/List_of_cities_in_Australia
 * 
 * @author  Gopinath N A <viratgopinath@gmail.com> | https://yourwebsite.com
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $places;

// Replace 'XX' code for your Country Code. E.g. 'NG' for Nigeria, 'CO' for Colombia, 'VE' for Venezuela, etc.
// Please refer to WooCommerce country codes : https://github.com/woocommerce/woocommerce/blob/master/i18n/countries.php
$places['AU'] = array(
  // Replace 'AA' code with the code of the State you want to mapping this places  
  'ACT' => array(
    // Add all the places of this State, one place per line
    'Canberra',
  ),
  'NSW' => array(
    'Sydney',
    'Albury',
    'Armidale',
    'Bathurst',
    'Blue Mountains',
    'Broken Hill',
    'Campbelltown',
    'Cessnock',
    'Dubbo',
    'Goulburn',
    'Grafton',
    'Lithgow',
    'Liverpool',
    'Newcastle',
    'Orange',
    'Parramatta',
    'Penrith',
    'Queanbeyan',
    'Tamworth',
    'Wagga Wagga',
    'Wollongong',
  ),
  'NT' => array(
    'Darwin',
    'Palmerston',
  ),
  'QLD' => array(
    'Brisbane',
    'Bundaberg',
    'Caboolture',
    'Cairns',
    'Caloundra',
    'Gladstone',
    'Gold Coast',
    'Gympie',
    'Hervey Bay',
    'Ipswich',
    'Logan City',
    'Mackay',
    'Maryborough',
    'Mount Isa',
    'Rockhampton',
    'Sunshine Coast',
    'Toowoomba',
    'Townsville',
    
  ),
  'SA' => array(
    'Adelaide',
    'Mount Barker',
    'Mount Gambier',
    'Murray Bridge',
    'Port Adelaide',
    'Port Augusta',
    'Port Pirie',
    'Port Lincoln',
    'Victor Harbor',
    'Whyalla',
  ),
  'TAS' => array(
    'Hobart',
    'Burnie',
    'Devonport',
    'Launceston',
  ),
  'VIC' => array(
    'Melbourne',
    'Ararat',
    'Bairnsdale',
    'Benalla',
    'Ballarat',
    'Bendigo',
    'Dandenong',
    'Frankston',
    'Geelong',
    'Hamilton',
    'Horsham',
    'Latrobe City',
    'Melton',
    'Mildura',
    'Sale',
    'Shepparton',
    'Swan Hill',
    'Wangaratta',
    'Warrnambool',
    'Wodonga',
  ),
  'WA' => array(
    'Perth ',
    'Albany',
    'Bunbury',
    'Busselton',
    'Fremantle',
    'Geraldton',
    'Joondalup',
    'Kalgoorlie',
    'Karratha',
    'Mandurah',
    'Rockingham',
  ),
);
