<?php

/**
 * Departments of Niger
 * 
 * Source: 
 * - https://en.wikipedia.org/wiki/Departments_of_Niger
 * 
 * @author  Ibrahim Nasir <ni1886@gmail.com> | https://howdoyou.tech
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $places;


$places['NE'] = array(
  // Agadez
  'AG' => array(
    'Arlit',
    'Bilma',
    'Tchirozérine',
    'Agadez'
  ),  
  // Diffa
  'DF' => array(
    'Diffa',
    'Maïné-Soroa',
    'N\'Guigmi',
  ),
  // Dosso
  'DS' => array(
    'Boboye',
    'Dogondoutchi',
    'Dosso',
    'Gaya',
    'Loga',
  ),
  // Maradi
  'MA' => array(
    'Aguié',
    'Dakoro',
    'Guidan-Roumdji',
    'Madarounfa',
    'Maradi',
    'Mayahi',
    'Tessaoua',
  ),
  // Niamey
  'NI' => array(
    'Niamey I',
    'Niamey II',
    'Niamey III',
    'Niamey IV',
    'Niamey V',
  ),
  // Tahoa
  'TH' => array(
    'Abalak',
    'Birni-N\'Konni',
    'Bouza',
    'Illéla',
    'Kéita',
    'Madaoua',
    'Tahoua',
    'Tchin-Tabaraden',
  ),
  // Tillaberi
  'TL' => array(
    'Filingué',
    'Kollo',
    'Ouallam',
    'Say',
    'Téra',
    'Tillabéri',
  ),
  // Zinder
  'ZI' => array(
    'Gouré',
    'Magaria',
    'Matameye',
    'Mirriah',
    'Tanout',
    'Zinder'
  ),
);

// Use this filter to handle the Departments of Niger
$places['NE'] = apply_filters('scpwoo_custom_places_ne', $places['NE']);