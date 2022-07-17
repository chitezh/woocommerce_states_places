

<?php

/**
 * Uzbekistan states
 *
 * @author  Hayotbek Samandarov hayotbeksamandarov0427@gmail.com | https://idealproject.uz
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
global $states;

$states['UZ'] = array(
  'QR' => 'Qoraqalpog‘iston Respublikasi	',
  'AV' => 'Andijon viloyati',
  'BV' => 'Buxoro viloyati',
  'QV' => 'Qashqadaryo viloyati',
  'NV' => 'Navoiy viloyati',
  'NMV' => 'Namangan viloyati',
  'SV' => 'Samarqand viloyati',
  'SURV' => 'Surxandaryo viloyati',
  'SIRV' => 'Sirdaryo viloyati',
  'TOSHV' => 'Toshkent viloyati',
  'FV' => 'Farg‘ona viloyati',
  'XV' => 'Xorazm viloyati',
  'TOSHSH' => 'Toshkent shahri',
);
// Use this filter to handle the Uzbekistan states
$states['RU'] = apply_filters('scpwoo_custom_states_uz', $states['UZ']);
