<?php

/**
 * Regions of Kazakhstan
 *
 * @author  Iminov Anvar <rubikjann@gmail.com> | * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['KZ'] = array(
  'KZ-ALA' => 'Алматы',
  'KZ-AST' => 'Нур-Султан',
  'KZ-SHY' => 'Шымкент',
  'KZ-ALM' => 'Алматинская область',
  'KZ-AKM' => 'Акмолинская область',
  'KZ-AKT' => 'Актюбинская область',
  'KZ-ATY' => 'Атырауская область',
  'KZ-VOS' => 'Восточно-Казахстанская область',
  'KZ-ZHA' => 'Жамбылская область',
  'KZ-ZAP' => 'Западно-Казахстанская область',
  'KZ-KAR' => 'Карагандинская область',
  'KZ-KUS' => 'Костанайская область',
  'KZ-KZY' => 'Кызылординская область',
  'KZ-MAN' => 'Мангистауская область',
  'KZ-PAV' => 'Павлодарская область',
  'KZ-SEV' => 'Северо-Казахстанская область',
  'KZ-YUZ' => 'Туркестанская область'
);

// Use this filter to handle the Regions of Kazakhstan
$states['KZ'] = apply_filters('scpwoo_custom_states_kz', $states['KZ']);
