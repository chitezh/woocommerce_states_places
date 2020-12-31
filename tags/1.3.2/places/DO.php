<?php

/**
 * Municipalities of the Dominican Republic
 * - 154 municipalities
 *
 * Sources:
 * - https://es.wikipedia.org/wiki/Provincias_de_la_Rep%C3%BAblica_Dominicana
 * 
 * @author  Javier Molina <jmolina@forways.com.do> | https://forways.com.do
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

global $places;

$places['DO'] = array(
	'DO-01' => array(
		'Santo Domingo',
	),
	'DO-02' => array(
		'Azua de Compostela',
		'Estebanía',
		'Guayabal',
		'Las Charcas',
		'Las Yayas de Viajama',
		'Padre Las Casas',
		'Peralta',
		'Pueblo Viejo',
		'Sabana Yegua',
		'Tábara Arriba'
	),
	'DO-03' => array(
		'Galván',
		'Los Ríos',
		'Neiba',
		'Tamayo',
		'Villa Jaragua',
	),
	'DO-04' => array(
		'Barahona',
		'Cabral',
		'El Peñón',
		'Enriquillo',
		'Fundación',
		'Jaquimeyes',
		'La Ciénaga',
		'Las Salinas',
		'Paraíso',
		'Polo',
		'Vicente Noble',
	),
	'DO-05' => array(
		'Dajabón',
		'El Pino',
		'Loma de Cabrera',
		'Partido',
		'Restauración',
	),
	'DO-06' => array(
		'Arenoso',
		'Castillo',
		'Eugenio María de Hostos',
		'Las Guáranas',
		'Pimentel',
		'San Francisco de Macorís',
		'Villa Riva',
	),
	'DO-07' => array(
		'Bánica',
		'Comendador',
		'El Llano',
		'Hondo Valle',
		'Juan Santiago',
		'Pedro Santana',
	),
	'DO-08' => array(
		'El Seibo',
		'Miches',
	),
	'DO-09' => array(
		'Cayetano Germosén',
		'Gaspar Hernández',
		'Jamao al Norte',
		'Moca',
	),
	'DO-10' => array(
		'Cristóbal',
		'Duvergé',
		'Jimaní',
		'Mella',
		'Postrer Río',
	),
	'DO-11' => array(
		'Higüey',
		'San Rafael del Yuma',
	),
	'DO-12' => array(
		'La Romana',
		'Guaymate',
		'Villa Hermosa',
	),
	'DO-13' => array(
		'Constanza',
		'La Concepción de La Vega',
		'Jarabacoa',
		'Jima Abajo',
	),
	'DO-14' => array(
		'Cabrera',
		'El Factor',
		'Nagua',
		'Río San Juan',
	),
	'DO-15' => array(
		'Castañuela',
		'Guayubín',
		'Las Matas de Santa Cruz',
		'Montecristi',
		'Pepillo Salcedo',
		'Villa Vásquez',
	),
	'DO-16' => array(
		'Oviedo',
		'Pedernales',
	),
	'DO-17' => array(
		'Baní',
		'Nizao',
	),
	'DO-18' => array(
		'Altamira',
		'Puerto Plata',
		'Guananico',
		'Imbert',
		'Los Hidalgos',
		'Luperón',
		'Sosúa',
		'Villa Isabela',
		'Villa Montellano',
	),
	'DO-19' => array(
		'Salcedo',
		'Tenares',
		'Villa Tapia',
	),
	'DO-20' => array(
		'Las Terrenas',
		'Samaná',
		'Sánchez',
	),
	'DO-21' => array(
		'Bajos de Haina',
		'Cambita Garabito',
		'Los Cacaos',
		'Sabana Grande de Palenque',
		'San Cristóbal',
		'San Gregorio de Nigua',
		'Villa Altagracia',
		'Yaguate',
	),
	'DO-22' => array(
		'Bohechío',
		'El Cercado',
		'Las Matas de Farfán',
		'Juan de Herrera',
		'San Juan de la Maguana',
		'Vallejuelo',
	),
	'DO-23' => array(
		'Consuelo',
		'Guayacanes',
		'Quisqueya',
		'Ramón Santana',
		'San José de Los Llanos',
		'San Pedro de Macorís',
	),
	'DO-24' => array(
		'Cevicos',
		'Cotuí',
		'La Mata',
		'Fantino',
	),
	'DO-25' => array(
		'Bisonó',
		'Licey al Medio',
		'Jánico',
		'Puñal',
		'Sabana Iglesia',
		'San José de las Matas',
		'Santiago',
		'Tamboril',
		'Villa González',
	),
	'DO-26' => array(
		'Los Almácigos',
		'Monción',
		'San Ignacio de Sabaneta',
	),
	'DO-27' => array(
		'Esperanza',
		'Laguna Salada',
		'Mao',
	),
	'DO-28' => array(
		'Bonao',
		'Maimón',
		'Piedra Blanca',
	),
	'DO-29' => array(
		'Bayaguana',
		'Monte Plata',
		'Peralvillo',
		'Sabana Grande de Boyá',
		'Yamasá',
	),
	'DO-30' => array(
		'El Valle',
		'Hato Mayor del Rey',
		'Sabana de la Mar',
	),
	'DO-31' => array(
		'Rancho Arriba',
		'Sabana Larga',
		'San José de Ocoa',
	),
	'DO-32' => array(
		'Boca Chica',
		'Los Alcarrizos',
		'Pedro Brand',
		'Santo Domingo Este',
		'Santo Domingo Norte',
		'Santo Domingo Oeste',
		'San Antonio de Guerra',
	),
);

// Use this filter to handle the Municipalities of the Dominican Republic
$places['DO'] = apply_filters('scpwoo_custom_places_do', $places['DO']);
