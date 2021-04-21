<?php

/**
 * Provinces of Vietnam
 * - 63 provinces
 *
 * Sources:
 * - https://en.wikipedia.org/wiki/Provinces_of_Vietnam
 *
 * @author  Nguyen Le <nguyenlt@adnsg.com> | http://adnsg.com/
 * @version 1.0.1
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $states;

$states['VN'] = array (
	'01-79' => 'Hồ Chí Minh',
	'02-01' => 'Hà Nội',
	'03-89' => 'An Giang',
	'04-77' => 'Bà Rịa - Vũng Tàu',
	'05-24' => 'Bắc Giang',
	'06-06' => 'Bắc Kạn',
	'07-95' => 'Bạc Liêu',
	'08-27' => 'Bắc Ninh',
	'09-83' => 'Bến Tre',
	'10-52' => 'Bình Định',
	'11-74' => 'Bình Dương',
	'12-70' => 'Bình Phước',
	'13-60' => 'Bình Thuận',
	'14-96' => 'Cà Mau',
	'15-92' => 'Cần Thơ',
	'16-04' => 'Cao Bằng',
	'17-48' => 'Đà Nẵng',
	'18-66' => 'Đắk Lắk',
	'19-67' => 'Đắk Nông',
	'20-11' => 'Điện Biên',
	'21-75' => 'Đồng Nai',
	'22-87' => 'Đồng Tháp',
	'23-64' => 'Gia Lai',
	'24-02' => 'Hà Giang',
	'25-35' => 'Hà Nam',
	'26-42' => 'Hà Tĩnh',
	'27-30' => 'Hải Dương',
	'28-31' => 'Hải Phòng',
	'29-93' => 'Hậu Giang',
	'30-17' => 'Hoà Bình',
	'31-33' => 'Hưng Yên',
	'32-56' => 'Khánh Hòa',
	'33-91' => 'Kiên Giang',
	'34-62' => 'Kon Tum',
	'35-12' => 'Lai Châu',
	'36-68' => 'Lâm Đồng',
	'37-20' => 'Lạng Sơn',
	'38-10' => 'Lào Cai',
	'39-80' => 'Long An',
	'40-36' => 'Nam Định',
	'41-40' => 'Nghệ An',
	'42-37' => 'Ninh Bình',
	'43-58' => 'Ninh Thuận',
	'44-25' => 'Phú Thọ',
	'45-54' => 'Phú Yên',
	'46-44' => 'Quảng Bình',
	'47-49' => 'Quảng Nam',
	'48-51' => 'Quảng Ngãi',
	'49-22' => 'Quảng Ninh',
	'50-45' => 'Quảng Trị',
	'51-94' => 'Sóc Trăng',
	'52-14' => 'Sơn La',
	'53-72' => 'Tây Ninh',
	'54-34' => 'Thái Bình',
	'55-19' => 'Thái Nguyên',
	'56-38' => 'Thanh Hóa',
	'57-46' => 'Thừa Thiên Huế',
	'58-82' => 'Tiền Giang',
	'59-84' => 'Trà Vinh',
	'60-08' => 'Tuyên Quang',
	'61-86' => 'Vĩnh Long',
	'62-26' => 'Vĩnh Phúc',
	'63-15' => 'Yên Bái',
);

// Use this filter to handle the Provinces of Vietnam
$states['VN'] = apply_filters('scpwoo_custom_states_vn', $states['VN']);
