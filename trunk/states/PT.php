<?php

/**
 * Districts and Autonomous Regions of Portugal
 *
 * @author  Javier Esteban <correo@javieresteban.org> | https://javieresteban.org
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['PT'] = array(
  'AC' => 'Áçores',
  'AV' => 'Aveiro',
  'BE' => 'Beja',
  'BR' => 'Braga',
  'BA' => 'Bragança',
  'CB' => 'Castelo Branco',
  'CO' => 'Coimbra',
  'EV' => 'Évora',
  'FA' => 'Faro',
  'GU' => 'Guarda',
  'LE' => 'Leiria',
  'LI' => 'Lisboa',
  'MA' => 'Madeira',
  'PA' => 'Portalegre',
  'PO' => 'Porto',
  'SA' => 'Santarém',
  'SE' => 'Setúbal',
  'VC' => 'Viana do Castelo',
  'VR' => 'Vila Real',
  'VI' => 'Viseu',
);

// Use this filter to handle the Districts and Autonomous Regions of Portugal
$states['PT'] = apply_filters('scpwoo_custom_states_pt', $states['PT']);
