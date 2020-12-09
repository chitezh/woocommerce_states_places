<?php

/**
 * Municipalities of Nicaragua
 * - 153 municipalities
 *
 * Sources:
 * https://es.wikipedia.org/wiki/Anexo:Municipios_de_Nicaragua
 * 
 * Updated: March 22, 2020
 * By Yordan Soares <contact@yordansoar.es> | https://yordansoar.es
 * 
 * @author  ahc505 - https://github.com/ahc505
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
global $places;
$places['NI'] = array(
	'BOA' => array(
		'Boaco',
		'Camoapa',
		'San jose de Los Remates',
		'San Lorenzo',
		'Santa Lucia',
		'Teustepe'
	),
	'CAR' => array(
		'Diriamba',
		'Dolores',
		'El Rosario',
		'Jinotepe',
		'La Conquista',
		'La Paz de Oriente',
		'San Marcos',
		'Santa Teresa'
	),
	'CHI' => array(
		'Chinandega',
		'Chichigalpa',
		'Cinco Pinos',
		'Corinto',
		'El Viejo',
		'El Realejo',
		'Posoltega',
		'Puerto Morazán',
		'San Francisco del Norte',
		'San Pedro del Norte',
		'Santo Tomás del Norte',
		'Somotillo',
		'Villanueva'
	),
	'CHO' => array(
		'Acoyapa',
		'Comalapa',
		'Cuapa',
		'El Coral',
		'Juigalpa',
		'La Libertad',
		'San Pedro de Lóvago',
		'Santo Domingo',
		'Santo Tomás',
		'Villa Sandino'
	),
	'EST' => array(
		'Condega',
		'Estelí',
		'La Trinidad',
		'Pueblo Nuevo',
		'San Juan de Limay',
		'San Nicolás'
	),
	'GRA' => array(
		'Diriá',
		'Diriomo',
		'Granada',
		'Nandaime'
	),
	'JIN' => array(
		'Jinotega',
		'San Rafael del Norte',
		'La Concordia',
		'San Sebastián de Yalí',
		'Santa María de Pantasma',
		'Wiwilí de Jinotega',
		'El Cuá',
		'San José de Bocay',
	),
	'LEO' => array(
		'Achuapa',
		'El Jicaral',
		'El Sauce',
		'La Paz Centro',
		'León',
		'Malpaisillo ó Larreynaga',
		'Nagarote',
		'Santa Rosa del Peñón',
		'Quezalguaque',
		'Telica'
	),
	'MAD' => array(
		'Las Sabanas',
		'Palacagüina',
		'San José de Cusmapa',
		'San Juan de Río Coco',
		'San Lucas',
		'Somoto',
		'Telpaneca',
		'Totogalpa',
		'Yalagüina'
	),
	'MAN' => array(
		'Ciudad Sandino',
		'El Crucero',
		'Managua',
		'Mateare',
		'San Francisco Libre',
		'San Rafael del Sur',
		'Ticuantepe',
		'Tipitapa',
		'Villa El Carmen',
	),
	'MAS' => array(
		'Catarina',
		'La Concepción',
		'Masatepe',
		'Masaya',
		'Nandasmo',
		'Nindirí',
		'Niquinohomo',
		'San Juan de Oriente',
		'Tisma'
	),
	'MAT' => array(
		'Ciudad Darío',
		'El Tuma - La Dalia',
		'Esquipulas',
		'Matagalpa',
		'Matiguás',
		'Muy Muy',
		'Rancho Grande',
		'Río Blanco',
		'San Dionisio',
		'San Isidro',
		'San Ramón',
		'Sébaco',
		'Terrabona'
	),
	'NUE' => array(
		'Ciudad Antigua',
		'Dipilto',
		'El Jicaro',
		'Guiguili',
		'Jalapa',
		'Macuelizo',
		'Mozonte',
		'Murra',
		'Ocotal',
		'Quilali',
		'San Fernando',
		'Santa Maria'
	),
	'RAS' => array(
		'Bluefields',
		'Desembocadura de Río Grande',
		'El Ayote',
		'El Rama',
		'El Tortuguero',
		'Corn Island',
		'Kukra Hill',
		'La Cruz de Río Grande',
		'Laguna de Perlas',
		'Muelle de los Bueyes',
		'Nueva Guinea',
		'Paiwas'
	),
	'RAN' => array(
		'Bonanza',
		'Mulukukú',
		'Prinzapolka',
		'Puerto Cabezas',
		'Rosita',
		'Siuna',
		'Waslala',
		'Waspán'
	),
	'RIO' => array(
		'El Almendro',
		'El Castillo',
		'Morrito',
		'San Carlos',
		'San Juan del Norte',
		'San Miguelito',
	),
	'RIV' => array(
		'Altagracia',
		'Belen',
		'Buenos Aires',
		'Cardenas',
		'Moyogalpa',
		'Potosi',
		'Rivas',
		'San Jorge',
		'San Juan del Sur',
		'Tola'
	)
);

// Use this filter to handle the Municipalities of Nicaragua
$places['NI'] = apply_filters('scpwoo_custom_places_ni', $places['NI']);
