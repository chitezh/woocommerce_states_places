<?php

/**
 * Plugin Name: States, Cities, and Places for WooCommerce
 * Plugin URI: https://github.com/chitezh/woocommerce_states_places
 * Description: WooCommerce plugin for listing states, cities, places, local government areas and towns in all countries of the world.
 * Version: 1.3.2
 * Author: Kingsley Ochu
 * Author URI: https://github.com/chitezh
 * Developer: Kingsley Ochu
 * Developer URI: https://ng.linkedin.com/in/kingsleyochu/
 * Contributors: yordansoares, luisurrutiaf
 * Text Domain: states-cities-and-places-for-woocommerce
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 4.0
 * Tested up to: 5.9
 * WC requires at least: 3.0.x
 * WC tested up to: 6.2
 */

/**
 * Die if accessed directly
 */
defined( 'ABSPATH' ) or die( __('You can not access this file directly!', 'states-cities-and-places-for-woocommerce') );

/**
 * Check if WooCommerce is active
 */
if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    class WC_States_Places {

        const VERSION = '1.3.2';
        private $states;
        private $places;

        /**
         * Construct class
         */
        public function __construct() {
            add_action( 'plugins_loaded', array( $this, 'init') );
        }

        /**
         * WC init
         */
        public function init() {
            $this->init_textdomain();
            $this->init_fields();
            $this->init_states();
            $this->init_places();
        }

        /**
         * Load text domain for internationalitation
         */
        public function init_textdomain() {
            load_plugin_textdomain('states-cities-and-places-for-woocommerce', FALSE,	dirname(plugin_basename(__FILE__)) . '/languages' );
        }

        /**
         * WC Fields init
         */
        public function init_fields() {
            add_filter('woocommerce_default_address_fields', array($this, 'wc_change_state_and_city_order'));
        }

        /**
         * WC States init
         */
        public function init_states() {
            add_filter('woocommerce_states', array($this, 'wc_states'));
        }

        /**
         * WC Places init
         */
        public function init_places() {
            add_filter( 'woocommerce_billing_fields', array( $this, 'wc_billing_fields' ), 10, 2 );
            add_filter( 'woocommerce_shipping_fields', array( $this, 'wc_shipping_fields' ), 10, 2 );
            add_filter( 'woocommerce_form_field_city', array( $this, 'wc_form_field_city' ), 10, 4 );

            add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts' ) );
        }

        /**
         * Change the order of State and City fields to have more sense with the steps of form
         * @param mixed $fields
         * @return mixed
         */
        public function wc_change_state_and_city_order($fields) {
            $fields['state']['priority'] = 70;
            $fields['city']['priority'] = 80;
            /* translators: Translate it to the name of the State level territory division, e.g. "State", "Province",  "Department" */
            $fields['state']['label'] = __('State', 'states-cities-and-places-for-woocommerce');
            /* translators: Translate it to the name of the City level territory division, e.g. "City, "Municipality", "District" */
            $fields['city']['label'] = __('City', 'states-cities-and-places-for-woocommerce');

            return $fields;
        }


        /**
         * Implement WC States
         * @param mixed $states
         * @return mixed
         */
        public function  wc_states() {
            //get countries allowed by store owner
            $allowed = $this->get_store_allowed_countries();

            $states = array();

            if (!empty( $allowed ) ) {
                foreach ($allowed as $code => $country) {
                    if (! isset( $states[$code] ) && file_exists($this->get_plugin_path() . '/states/' . $code . '.php')) {
                        include($this->get_plugin_path() . '/states/' . $code . '.php');
                    }
                }
            }

            return $states;
        }

        /**
         * Modify billing field
         * @param mixed $fields
         * @param mixed $country
         * @return mixed
         */
        public function wc_billing_fields( $fields, $country ) {
            $fields['billing_city']['type'] = 'city';

            return $fields;
        }

        /**
         * Modify shipping field
         * @param mixed $fields
         * @param mixed $country
         * @return mixed
         */
        public function wc_shipping_fields( $fields, $country ) {
            $fields['shipping_city']['type'] = 'city';

            return $fields;
        }

        /**
         * Implement places/city field
         * @param mixed $field
         * @param string $key
         * @param mixed $args
         * @param string $value
         * @return mixed
         */
        public function wc_form_field_city($field, $key, $args, $value ) {
            // Do we need a clear div?
            if ( ( ! empty( $args['clear'] ) ) ) {
                $after = '<div class="clear"></div>';
            } else {
                $after = '';
            }

            // Required markup
            if ( $args['required'] ) {
                $args['class'][] = 'validate-required';
                $required = ' <abbr class="required" title="' . esc_attr__( 'required', 'woocommerce'  ) . '">*</abbr>';
            } else {
                $required = '';
            }

            // Custom attribute handling
            $custom_attributes = array();

            if ( ! empty( $args['custom_attributes'] ) && is_array( $args['custom_attributes'] ) ) {
                foreach ( $args['custom_attributes'] as $attribute => $attribute_value ) {
                    $custom_attributes[] = esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
                }
            }

            // Validate classes
            if ( ! empty( $args['validate'] ) ) {
                foreach( $args['validate'] as $validate ) {
                    $args['class'][] = 'validate-' . $validate;
                }
            }

            // field p and label
            $field  = '<p class="form-row ' . esc_attr( implode( ' ', $args['class'] ) ) .'" id="' . esc_attr( $args['id'] ) . '_field">';
            if ( $args['label'] ) {
                $field .= '<label for="' . esc_attr( $args['id'] ) . '" class="' . esc_attr( implode( ' ', $args['label_class'] ) ) .'">' . $args['label']. $required . '</label>';
            }

            // Get Country
            $country_key = $key == 'billing_city' ? 'billing_country' : 'shipping_country';
            $current_cc  = WC()->checkout->get_value( $country_key );

            $state_key = $key == 'billing_city' ? 'billing_state' : 'shipping_state';
            $current_sc  = WC()->checkout->get_value( $state_key );

            // Get country places
            $places = $this->get_places( $current_cc );

            if ( is_array( $places ) ) {

                $field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="city_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '">';

                $field .= '<option value="">'. __( 'Select an option&hellip;', 'woocommerce' ) .'</option>';

                if ( $current_sc && array_key_exists( $current_sc, $places ) ) {
                    $dropdown_places = $places[ $current_sc ];
                } else if ( is_array($places) && isset($places[0])) {
                    $dropdown_places = $places;
                    sort( $dropdown_places );
                } else {
                    $dropdown_places = $places;
                }

                foreach ( $dropdown_places as $city_name ) {
                    if(!is_array($city_name)) {
                        $field .= '<option value="' . esc_attr( $city_name ) . '" '.selected( $value, $city_name, false ) . '>' . $city_name .'</option>';
                    }
                }

                $field .= '</select>';

            } else {

                $field .= '<input type="text" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" value="' . esc_attr( $value ) . '"  placeholder="' . esc_attr( $args['placeholder'] ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . implode( ' ', $custom_attributes ) . ' />';
            }

            // field description and close wrapper
            if ( $args['description'] ) {
                $field .= '<span class="description">' . esc_attr( $args['description'] ) . '</span>';
            }

            $field .= '</p>' . $after;

            return $field;
        }
        /**
         * Get places
         * @param string $p_code(default:)
         * @return mixed
         */
        public function get_places( $p_code = null ) {
            if ( empty( $this->places ) ) {
                $this->load_country_places();
            }

            if ( ! is_null( $p_code ) ) {
                return isset( $this->places[ $p_code ] ) ? $this->places[ $p_code ] : false;
            } else {
                return $this->places;
            }
        }
        /**
         * Get country places
         * @return mixed
         */
        public function load_country_places() {
            global $places;

            $allowed =  $this->get_store_allowed_countries();

            if ( $allowed ) {
                foreach ( $allowed as $code => $country ) {
                    if ( ! isset( $places[ $code ] ) && file_exists( $this->get_plugin_path() . '/places/' . $code . '.php' ) ) {
                        include( $this->get_plugin_path() . '/places/' . $code . '.php' );
                    }
                }
            }

            $this->places = $places;
        }

        /**
         * Load scripts
         */
        public function load_scripts() {
            if ( is_cart() || is_checkout() || is_wc_endpoint_url( 'edit-address' ) ) {

                $city_select_path = $this->get_plugin_url() . 'js/place-select.js';
                wp_enqueue_script( 'wc-city-select', $city_select_path, array( 'jquery', 'woocommerce' ), self::VERSION, true );

                $places = json_encode( $this->get_places() );
                wp_localize_script( 'wc-city-select', 'wc_city_select_params', array(
                    'cities' => $places,
                    'i18n_select_city_text' => esc_attr__( 'Select an option&hellip;', 'woocommerce' )
                ) );
            }
        }

        /**
         * Get plugin root path
         * @return mixed
         */
        private function get_plugin_path() {
            if (isset($this->plugin_path)) {
                return $this->plugin_path;
            }
            $path = $this->plugin_path = plugin_dir_path( __FILE__ );

            return untrailingslashit($path);
        }

        /**
         * Get Store allowed countries
         * @return mixed
         */
        private function get_store_allowed_countries() {
            return array_merge( WC()->countries->get_allowed_countries(), WC()->countries->get_shipping_countries() );
        }

        /**
         * Get plugin url
         * @return mixed
         */
        public function get_plugin_url() {

            if (isset($this->plugin_url)) {
                return $this->plugin_url;
            }

            return $this->plugin_url = plugin_dir_url( __FILE__ );
        }
    }
    /**
     * Instantiate class
     */
    $GLOBALS['wc_states_places'] = new WC_States_Places();
};
