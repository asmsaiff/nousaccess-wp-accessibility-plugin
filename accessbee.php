<?php
    /**
     *  Web Accessibility
     *
     *  @package     AccessBee
     *  @author      Saifullah Siddique
     *  @copyright   2022 Saifullah Siddique
     *  @license     GPL-2.0+
     *
     *  @wordpress-plugin
     *  Plugin Name: Access Bee
     *  Description: Helps improve accessibility in your WordPress site.
     *  Author: Saifullah Siddique
     *  Author URI: http://www.saifullah.co
     *  Text Domain: accessbee
     *  License:     GPL-2.0+
     *  License URI: http://www.gnu.org/license/gpl-2.0.txt
     *  Version: 1.0.0
     */

    /*
        Copyright 2012-2022  Saifullah Siddique (email : info@saifullah.co)

        This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

        This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

        You should have received a copy of the GNU General Public License along with this program.
    */

    if ( !defined( 'ABSPATH' ) ) {
        exit;
        // Exit if accessed directly.
    }
    
    define( 'ACCESSBEE_PATH', plugin_dir_path( __FILE__ ) );

    function custom_content_after_body_open_tag() {
        require_once ACCESSBEE_PATH . 'template/accessibility.php';
    }
    add_action('wp_body_open', 'custom_content_after_body_open_tag');

    /**
     * Enqueue stylesheets for WP Accessibility.
     */
    function wpa_stylesheet() {
        // Add CSS
        wp_register_style( 'accessbee-css', plugins_url('/access-bee/css/accessbee.css'));
        wp_enqueue_style( 'accessbee-css' );
        wp_register_style( 'bootstrap-css', plugins_url('/access-bee/css/bootstrap.css'));
        wp_enqueue_style( 'bootstrap-css' );
        wp_register_style( 'fa-css', plugins_url('/access-bee/css/all.css'));
        wp_enqueue_style( 'fa-css' );

        // Add JS
        wp_register_script( 'accessbee-js', plugins_url('/access-bee/js/accessbee.js'));
        wp_enqueue_script( 'accessbee-js' );
    }
    add_action( 'wp_enqueue_scripts', 'wpa_stylesheet' );