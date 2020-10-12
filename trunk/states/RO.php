<?php

/**
 * Counties of Romania
 * - 41 counties (județe) and municipality of Bucharest (București) 
 *
 * @author  Razvan Farte <razvan@razvanfarte.ro> https://razvanfarte.ro/
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['RO'] = array(
  'AB' => 'Alba',
  'AR' => 'Arad',
  'AG' => 'Argeș',
  'BC' => 'Bacău',
  'BH' => 'Bihor',
  'BN' => 'Bistrița-Năsăud',
  'BT' => 'Botoșani',
  'BR' => 'Brăila',
  'BV' => 'Brașov',
  'B' => 'București',
  'BZ' => 'Buzău',
  'CL' => 'Călărași',
  'CS' => 'Caraș-Severin',
  'CJ' => 'Cluj',
  'CT' => 'Constanța',
  'CV' => 'Covasna',
  'DB' => 'Dâmbovița',
  'DJ' => 'Dolj',
  'GL' => 'Galați',
  'GR' => 'Giurgiu',
  'GJ' => 'Gorj',
  'HR' => 'Harghita',
  'HD' => 'Hunedoara',
  'IL' => 'Ialomița',
  'IS' => 'Iași',
  'IF' => 'Ilfov',
  'MM' => 'Maramureș',
  'MH' => 'Mehedinți',
  'MS' => 'Mureș',
  'NT' => 'Neamț',
  'OT' => 'Olt',
  'PH' => 'Prahova',
  'SJ' => 'Sălaj',
  'SM' => 'Satu Mare',
  'SB' => 'Sibiu',
  'SV' => 'Suceava',
  'TR' => 'Teleorman',
  'TM' => 'Timiș',
  'TL' => 'Tulcea',
  'VL' => 'Vâlcea',
  'VS' => 'Vaslui',
  'VN' => 'Vrancea',
);

// Use this filter to handle the Counties of Romania
$states['RO'] = apply_filters('scpwoo_custom_states_ro', $states['RO']);
