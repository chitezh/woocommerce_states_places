<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

global $states;

$states['FR'] = array(
  '84'  => 'Auvergne-Rhône-Alpes',
  '27' => 'Bourgogne-Franche-Comté',
  '53' => 'Bretagne',
  '24'  => 'Centre-Val de Loire',
  '94' => 'Corse',
  '44'  => 'Grande Est',
  '32' => 'Hauts-de-France',
  '11' => 'Île-de-France',
  '28' => 'Normandie',
  '75'  => 'Nouvelle-Aquitaine',
  '76' => 'Occitanie',
  '52' => 'Pays de la Loire',
  '93' => 'Provençe-Alpes-Côte d\'Azur'
);

// Use this filter to handle the Provinces of France
$states['FR'] = apply_filters('scpwoo_custom_states_fr', $states['FR']);


