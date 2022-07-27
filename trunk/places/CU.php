<?php

/**
 * Municipalities of Cuba
 * - 164 municipalities
 *
 * Source:
 * -https://www.directoriocubano.info/postales/
 * -https://www.ecured.cu/Municipios_de_Cuba
 *
 * @author   Ramiro Rodpa <www.rmr@gmail.com>, Carlos Quesada <info@cquesada.es>
 * @version  1.0.1
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */
global $places;

$places['CU'] = array(
	// La Habana
	'CH' => array(
		'10 de Octubre',
		'Arroyo Naranjo',
		'Boyeros',
		'Centro Habana',
		'Cerro',
		'Cotorro',
		'Guanabacoa',
		'Habana del Este',
		'La Habana Vieja',
		'Marianao',
		'Playa',
		'Plaza de la Revolución',
		'Regla',
		'San Miguel del Padrón'
	),
	// Artemisa
	'AR' => array(
		'Alquízar',
		'Artemisa',
		'Bahía Honda',
		'Bauta',
		'Caimito',	
		'Candelaria',
		'Guanajay',	
		'Güira de Melena',	
		'Mariel',	
		'San Antonio de los Baños',
		'San Cristóbal',
	),
	// Camagüey
	'CM' => array(
		'Camagüey',
		'Carlos Manuel de Céspedes',
		'Esmeralda',
		'Florida',
		'Guáimaro',
		'Jimaguayú',
		'Minas',
		'Najasa',
		'Nuevitas',
		'Santa Cruz del Sur',
		'Sibanicú',
		'Sierra de Cubitas',
		'Vertientes'
	),
	// Ciego de Ávila
	'CA' => array(
		'Baraguá', 
		'Bolivia', 
		'Chambas',
		'Ciego de Ávila', 
		'Ciro Redondo', 
		'Florencia', 
		'Majagua', 
		'Morón', 
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
		'Lajas',
		'Palmira',
		'Rodas'
	),
	// Granma
	'GR' => array(
		'Bartolomé Masó',		
		'Bayamo',	
		'Buey Arriba',	
		'Campechuela',	
		'Cauto Cristo',	
		'Guisa',	
		'Jiguaní',		
		'Manzanillo',
		'Media Luna',
		'Niquero',	
		'Pilón',		
		'Río Cauto',
		'Yara'
	),
	// Guantánamo
	'GU' => array(
		'Baracoa',
		'Caimanera',
		'El Salvador',
		'Guantánamo',
		'Imías',
		'Maisí',
		'Manuel Tames',
		'Niceto Pérez',
		'San Antonio del Sur',
		'Yateras',
	),
	// Holguín
	'HO' => array(
		'Antilla'
		'Báguanos'
		'Banes'
		'Cacocum'
		'Calixto García'
		'Cueto'
		'Frank País'
		'Gibara'
		'Holguín'
		'Mayarí'
		'Moa'
		'Rafael Freyre'
		'Sagua de Tánamo'
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
		'Jesús Menéndez',
		'Jobabo',
		'Las Tunas',
		'Majibacoa',
		'Manatí',
		'Puerto Padre'
	),
	// Matanzas
	'MA' => array(
		'Calimete',
		'Cárdenas',
		'Ciénaga de Zapata',
		'Colón',
		'Jagüey Grande', 
		'Jovellanos',
		'Limonar',
		'Los Arabos',
		'Martí',
		'Matanzas',
		'Pedro Betancourt',
		'Perico',
		'Unión de Reyes'
	),
	// Mayabeque
	'MQ' => array(
		'Batabanó',
		'Bejucal',
		'Güines',	
		'Jaruco',
		'Madruga',
		'Melena del Sur',
		'Nueva Paz',
		'Quivicán',
		'San José de las Lajas',
		'San Nicolás de Bari',
		'Santa Cruz del Norte'
	),
	// Pinar del Río
	'PD'  => array(
		'Consolación del Sur',
		'Guane',
		'La Palma',
		'Los Palacios',
		'Mantua',
		'Minas de Matahambre',
		'Pinar del Río',
		'San Juan y Martínez',
		'San Luis',
		'Sandino',
		'Viñales'
	),
	// Sancti Spíritus
	'SS' => array(
		'Cabaiguán',	
		'Fomento',	
		'Jatibonico',	
		'La Sierpe',
		'Sancti Spíritus', 
		'Taguasco',	
		'Trinidad',	
		'Yaguajay'	
	),
	// Santiago de Cuba
	'SC' => array(
		'Contramaestre',
		'Guamá',
		'Mella',		
		'Palma Soriano',
		'San Luis',
		'Santiago de Cuba',
		'Segundo Frente',
		'Songo - La Maya',
		'Tercer Frente Oriental'	
	),
	// Villa Clara
	'VC' => array(
		'Caibarién',
		'Camajuaní',
		'Cifuentes',
		'Corralillo',
		'Encrucijada',
		'Manicaragua',
		'Placetas',
		'Quemado de Güines',
		'Ranchuelo',
		'Remedios',
		'Sagua la Grande',
		'Santa Clara',
		'Santo Domingo'
	),
);

// Use this filter to handle the Municipalities of Cuba
$places['CU'] = apply_filters('scpwoo_custom_places_cu', $places['CU']);
