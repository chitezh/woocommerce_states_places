<?php

/**
 * Departments of Paraguay
 * - 1 capital district
 * - 17 departments
 * 
 * Source:
 * https://en.wikipedia.org/wiki/Departments_of_Paraguay
 * https://es.wikipedia.org/wiki/Departamentos_de_Paraguay
 * 
 *
 * @author  Yordan Soares <contacto@yordansoar.es> - https://yordansoar.es/
 * @version 1.0.0
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
global $states;

$states['PY'] = array(
    'PY-1' => 'Asunción',
    'PY-2' => 'Alto Paraguay',
    'PY-3' => 'Alto Paraná',
    'PY-4' => 'Amambay',
    'PY-5' => 'Boquerón',
    'PY-6' => 'Caaguazú',
    'PY-7' => 'Caazapá',
    'PY-8' => 'Canindeyú',
    'PY-9' => 'Central',
    'PY-10' => 'Concepción',
    'PY-11' => 'Cordillera',
    'PY-12' => 'Guairá',
    'PY-13' => 'Itapúa',
    'PY-14' => 'Misiones',
    'PY-15' => 'Ñeembucú',
    'PY-16' => 'Paraguarí',
    'PY-17' => 'Presidente Hayes',
    'PY-18' => 'San Pedro',
);

// Use this filter to handle the Departments of Paraguay
$states['PY'] = apply_filters('scpwoo_custom_states_py', $states['PY']);
