<?php

/**
 * States, Regions, and Union Territories of Myanmar
 * - 15 states, regions, and union territories
 *
 * Source:
 * - https://en.wikipedia.org/wiki/Administrative_divisions_of_Myanmar
 * 
 * @author  Hein Htet Kyaw <mr.kiddomonster@gmail.com>
 * @version 1.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['MM'] = array(  
  'AYA' => 'Ayeyarwady Region (ဧရာဝတီတိုင်းဒေသကြီး)',
  'BGO' => 'Bago Region (ပဲခူးတိုင်းဒေသကြီး)',
  'CHN' => 'Chin State (ချင်းပြည်နယ်)',
  'KCN' => 'Kachin (ကချင်ပြည်နယ်)',
  'KYH' => 'Kayah State (ကယားပြည်နယ်)',
  'KYN' => 'Kayin State (ကရင်ပြည်နယ်)',
  'MDY' => 'Mandalay Region (မန္တလေးတိုင်းဒေသကြီး)',
  'MGY' => 'Magway Region (မကွေးတိုင်းဒေသကြီး)',
  'MON' => 'Mon State (မွန်ပြည်နယ်)',
  'NPT' => 'Naypyitaw (နေပြည်တော်)',
  'RKN' => 'Rakhine (ရခိုင်ပြည်နယ်)',
  'SGN' => 'Sagaing Region (စစ်ကိုင်းတိုင်းဒေသကြီး)',
  'SHN' => 'Shan (ရှမ်းပြည်နယ်)',
  'TNT' => 'Tanintharyi Region (တနင်္သာရီတိုင်းဒေသကြီး)',
  'YGN' => 'Yangon Region (ရန်ကုန်တိုင်းဒေသကြီး)',
);

// Use this filter to handle the States, Regions, and Union Territories of Myanmar
$states['MM'] = apply_filters('scpwoo_custom_states_mm', $states['MM']);