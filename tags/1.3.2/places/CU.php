<?php

/**
 * Municipalities of Cuba
 * - 164 municipalities
 *
 * Source:
 * -https://www.directoriocubano.info/postales/
 *
 * @author   Ramiro Rodpa <www.rmr@gmail.com>
 * @version  1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */
global $places;

$places['CU'] = array(
	// La Habana
	'CH' => array(
		'10 de Octubre',
		'Arrollo Naranjo',
		'Boyeros',
		'Centro Habana',
		'Cerro',
		'Cotorro',
		'Guanabacoa',
		'Habana del Este',
		'Habana Vieja',
		'La Lisa',
		'Marianao',
		'Playa',
		'Plaza de la Revolucion',
		'Regla',
		'San Miguel del Padron'
	),
	// Artemisa
	'AR' => array(
		'Alquizar',
		'Artemisa',
		'Bahia Honda',
		'Bauta',
		'Caimito',
		'Candelaria',
		'Guanajay',
		'Guira de Melena',
		'Mariel',
		'San Antonio de los Baños'
	),
	// Camaguey
	'CM' => array(
		'Camaguey',
		'Carlos Manuel de Cespedes',
		'Esmeralda',
		'Florida',
		'Guaimaro',
		'Jimaguayu',
		'Minas',
		'Najasa',
		'Nuevitas',
		'Santa Cruz del Sur',
		'Sibanicu',
		'Sierra de Cubitas',
		'Vertientes'
	),
	// Ciego de Avila
	'CA' => array(
		'Baragua',
		'Bolivia',
		'Chambas',
		'Ciego de Avila',
		'Ciro Redondo',
		'Florencia',
		'Majagua',
		'Moron',
		'Primero de Enero',
		'Venezuela'
	),
	// Cienfuegos
	'CF' => array(
		'Abreus',
		'Aguada de Pasajeros',
		'Cienfuegos',
		'Cruces',
		'Cumanayagua',
		'Palmira',
		'Rodas',
		'Santa Isabel de las Lajas'
	),
	// Granma
	'GR' => array(
		'Bartolome Maso',
		'Bayamo',
		'Buey Arriba',
		'Campechuela',
		'Cauto Cristo',
		'Guisa',
		'Jiguani',
		'Manzanillo',
		'Media Luna',
		'Niquero',
		'Pilon',
		'Rio Cauto',
		'Yara'
	),
	// Guantanamo
	'GU' => array(
		'Baracoa',
		'Caimanera',
		'El Salvador',
		'Guantanamo',
		'Imias',
		'Maisi',
		'Manuel Tames',
		'Niceto Perez',
		'San Antonio del Sur',
		'Yateras'
	),
	// Holguin
	'HO' => array(
		'Antilla',
		'Baguanos',
		'Banes',
		'Cacocum',
		'Calixto Garcia',
		'Cueto',
		'Fran Pais',
		'Gibara',
		'Holguin',
		'Mayari',
		'Moa',
		'Rafael Freire',
		'Sagua de Tanamo',
		'Urbano Noris'
	),	
	// Isla de la Juventud
	'IJ' => array(
		'Isla de la Juventud'
	),
	// Las Tunas
	'LT' => array(
		'Amancio',
		'Colombia',
		'Jesus Menendez',
		'Jobabo',
		'Las Tunas',
		'Majibacoa',
		'Manati',
		'Puerto Padre'
	),
	// Matanzas
	'MA' => array(
		'Calimete',
		'Cardenas',
		'Cienaga de Colon',
		'Jaguey Grande',
		'Jovellanos',
		'Limonar',
		'Los Arabos',
		'Marti',
		'Matanzas',
		'Pedro Betancourt',
		'Perico',
		'Union de Reyes'
	),
	// Mayabeque
	'MQ' => array(
		'Batabano',
		'Bejucal',
		'Guines',
		'Jaruco',
		'Madruga',
		'Melena del Sur',
		'Nueva Paz',
		'Quivican',
		'San Jose de las Lajas',
		'San Nicolas',
		'Santa Cruz del Norte'
	),
	// Pinar del Rio
	'PD'  => array(
		'Consolacion del Sur',
		'Guane',
		'La Palma',
		'Los Palacios',
		'Mantua',
		'Minas de Matahambre',
		'Pinar del Rio',
		'Sandino',
		'San Juan y Martinez',
		'San Luis',
		'Viñales'
	),
	// Sancti Spiritus
	'SS' => array(
		'Cabaiguan',
		'Fomento',
		'Jatibonico',
		'La Sierpe',
		'Sancti Spiritus',
		'Taguasco',
		'Trinidad',
		'Yaguajay'
	),
	// Santiago de Cuba
	'SC' => array(
		'Contramaestre',
		'Guama',
		'Mella',
		'Palma Soriano',
		'San Luis',
		'Santiago de Cuba',
		'Segundo Frente',
		'Songo-La Maya',
		'Tercer Frente'
	),
	// Villa Clara
	'VC' => array(
		'Caibarien',
		'Camajuani',
		'Cifuentes',
		'Corralillo',
		'Encrucijada',
		'Manicaragua',
		'Placetas',
		'Quemado de Guines',
		'Ranchuelo',
		'Sagua la Grande',
		'San Juan de los Remedios'
	),
);

// Use this filter to handle the Municipalities of Cuba
$places['CU'] = apply_filters('scpwoo_custom_places_cu', $places['CU']);
