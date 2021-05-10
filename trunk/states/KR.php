<?php

/**
 * Provinces of South Korea
 *
 * Source:
 * https://en.wikipedia.org/wiki/Provinces_of_South_Korea
 *
 * @author  Amr Ali <amr@brainwave.agency> | https://brainwave.agency
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $states;

$states['KR'] = array();

// Use this filter to handle the Provinces of South Korea
$states['KR'] = apply_filters('scpwoo_custom_states_kr', $states['KR']);
