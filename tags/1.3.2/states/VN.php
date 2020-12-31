<?php

/**
 * Provinces of Vietnam
 * - 63 provinces
 *
 * Sources:
 * - https://en.wikipedia.org/wiki/Provinces_of_Vietnam
 *
 * @author  Nguyen Le <nguyenlt@adnsg.com> | http://adnsg.com/
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['VN'] = array (
	'HOCHIMINH' => 'Hồ Chí Minh',
	'HANOI' => 'Hà Nội',
	'ANGIANG' => 'An Giang',
	'BACGIANG' => 'Bắc Giang',
	'BACKAN' => 'Bắc Kạn',
	'BACLIEU' => 'Bạc Liêu',
	'BACNINH' => 'Bắc Ninh',
	'BARIAVUNGTAU' => 'Bà Rịa - Vũng Tàu',
	'BENTRE' => 'Bến Tre',
	'BINHDINH' => 'Bình Định',
	'BINHDUONG' => 'Bình Dương',
	'BINHPHUOC' => 'Bình Phước',
	'BINHTHUAN' => 'Bình Thuận',
	'CAMAU' => 'Cà Mau',
	'CANTHO' => 'Cần Thơ',
	'CAOBANG' => 'Cao Bằng',
	'DAKLAK' => 'Đắk Lắk',
	'DAKNONG' => 'Đắk Nông',
	'DANANG' => 'Đà Nẵng',
	'DIENBIEN' => 'Điện Biên',
	'DONGNAI' => 'Đồng Nai',
	'DONGTHAP' => 'Đồng Tháp',
	'GIALAI' => 'Gia Lai',
	'HAGIANG' => 'Hà Giang',
	'HAIDUONG' => 'Hải Dương',
	'HAIPHONG' => 'Hải Phòng',
	'HANAM' => 'Hà Nam',
	'HATINH' => 'Hà Tĩnh',
	'HAUGIANG' => 'Hậu Giang',
	'HOABINH' => 'Hoà Bình',
	'HUNGYEN' => 'Hưng Yên',
	'KHANHHOA' => 'Khánh Hòa',
	'KIENGIANG' => 'Kiên Giang',
	'KONTUM' => 'Kon Tum',
	'LAICHAU' => 'Lai Châu',
	'LAMDONG' => 'Lâm Đồng',
	'LANGSON' => 'Lạng Sơn',
	'LAOCAI' => 'Lào Cai',
	'LONGAN' => 'Long An',
	'NAMDINH' => 'Nam Định',
	'NGHEAN' => 'Nghệ An',
	'NINHBINH' => 'Ninh Bình',
	'NINHTHUAN' => 'Ninh Thuận',
	'PHUTHO' => 'Phú Thọ',
	'PHUYEN' => 'Phú Yên',
	'QUANGBINH' => 'Quảng Bình',
	'QUANGNAM' => 'Quảng Nam',
	'QUANGNGAI' => 'Quảng Ngãi',
	'QUANGNINH' => 'Quảng Ninh',
	'QUANGTRI' => 'Quảng Trị',
	'SOCTRANG' => 'Sóc Trăng',
	'SONLA' => 'Sơn La',
	'TAYNINH' => 'Tây Ninh',
	'THAIBINH' => 'Thái Bình',
	'THAINGUYEN' => 'Thái Nguyên',
	'THANHHOA' => 'Thanh Hóa',
	'THUATHIENHUE' => 'Thừa Thiên Huế',
	'TIENGIANG' => 'Tiền Giang',
	'TRAVINH' => 'Trà Vinh',
	'TUYENQUANG' => 'Tuyên Quang',
	'VINHLONG' => 'Vĩnh Long',
	'VINHPHUC' => 'Vĩnh Phúc',
	'YENBAI' => 'Yên Bái',
);

// Use this filter to handle the Provinces of Vietnam
$states['VN'] = apply_filters('scpwoo_custom_states_vn', $states['VN']);
