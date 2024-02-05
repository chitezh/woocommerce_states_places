<?php

/**
 * Localities of Morocco
 * Source: https://www.iso.org/obp/ui/fr/#iso:code:3166:MA
 * @author   El Karima Reda
 * @version  1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
global $places;

$places['MA'] = array(
  'MA-01' => array(
    'Al Hoceïma',
    'Chefchaouen',
    'Larache',
    'M’diq-Fnideq',
    'Ouezzane',
    'Tanger-Assilah',
    'Tétouan',
  ),
  'MA-02' => array(
    'Berkane',
    'Driouch',
    'Figuig',
    'Guercif',
    'Jerada',
    'Nador',
    'Oujda-Angad',
    'Taourirt',
  ),
  'MA-03' => array(
    'Boulemane',
    'El Hajeb',
    'Fès',
    'Ifrane',
    'Meknès',
    'Moulay Yacoub',
    'Sefrou',
    'Taounate',
    'Taza',
  ),
  'MA-04' => array(
    'Khémisset',
    'Kénitra',
    'Nouaceur',
    'Rabat',
    'Salé',
    'Sidi Kacem',
    'Sidi Slimane',
    'Skhirate-Témara',
  ),
  'MA-05' => array(
    'Azilal',
    'Béni Mellal',
    'Fquih Ben Salah',
    'Khouribga',
    'Khénifra',
  ),
  'MA-06' => array(
    'Benslimane',
    'Berrechid',
    'Casablanca',
    'Chtouka-Ait Baha',
    'El Jadida',
    'Mohammadia',
    'Médiouna',
    'Settat',
    'Sidi Bennour',
  ),
  'MA-07' => array(
    'Al Haouz',
    'Chichaoua',
    'El Kelâa des Sraghna',
    'Essaouira',
    'Marrakech',
    'Rehamna',
    'Safi',
    'Youssoufia',
  ),
  'MA-08' => array(
    'Errachidia',
    'Midelt',
    'Ouarzazate',
    'Tinghir',
    'Zagora',
  ),
  'MA-09' => array(
    'Agadir-Ida-Ou-Tanane',
    'Inezgane-Ait Melloul',
    'Taroudannt',
    'Tata',
    'Tiznit',
  ),
  'MA-10' => array(
    'Assa-Zag',
    'Guelmim',
    'Sidi Ifni',
    'Tan-Tan',
  ),
  'MA-11' => array(
    'Boujdour',
    'Es-Semara',
    'Laâyoune',
    'Tarfaya',
  ),
  'MA-12' => array(
    'Aousserd',
    'Oued Ed-Dahab',
  ),
);


// Use this filter to handle the Cities of Morocco
$places['MA'] = apply_filters('scpwoo_custom_places_ma', $places['MA']);
