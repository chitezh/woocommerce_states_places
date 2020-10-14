<?php

/**
 * Cities of Australia
 * - 87 cities
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/List_of_cities_in_Australia
 * 
 * @author  Gopinath N A <viratgopinath@gmail.com>
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $places;

$places['AU'] = array(
  'ACT' => array(
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

// Use this filter to handle the Cities of Australia
$places['AU'] = apply_filters('scpwoo_custom_places_au', $places['AU']);
