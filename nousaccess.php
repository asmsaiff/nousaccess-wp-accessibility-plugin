<?php
    /**
     *  Web Accessibility
     *
     *  @package     Nous Access
     *  @author      S. Saif
     *  @copyright   2022 S. Saif
     *  @license     GPL-2.0+
     *
     *  @wordpress-plugin
     *  Plugin Name: Nous Access
     *  Description: Helps improve accessibility in your WordPress site.
     *  Author: S. Saif
     *  Author URI: http://saif.im
     *  Text Domain: nousaccess
     *  License:     GPL-2.0+
     *  License URI: http://www.gnu.org/license/gpl-2.0.txt
     *  Version: 1.0.1
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

    define( 'NOUSACCESS_PATH', plugin_dir_path( __FILE__ ) );

    function nousaccess_after_body_open_tag() {
        require_once NOUSACCESS_PATH . 'template/accessibility.php';
    }
    add_action('wp_body_open', 'nousaccess_after_body_open_tag');

    /**
     * Enqueue stylesheets for WP Accessibility.
     */
    function nousaccess_stylesheet() {
        // Add CSS
        wp_register_style( 'nousaccess-css', plugins_url( '/css/nousaccess.css', __FILE__ ));
        wp_enqueue_style( 'nousaccess-css' );
        wp_register_style( 'bootstrap-css', plugins_url( '/css/bootstrap.css', __FILE__ ));
        wp_enqueue_style( 'bootstrap-css' );
        wp_register_style( 'fa-css', plugins_url('/css/all.css', __FILE__));
        wp_enqueue_style( 'fa-css' );

        // Add JS
        wp_register_script( 'nousaccess-js', plugins_url( '/js/nousaccess.js', __FILE__ ), null, time(), true );
        wp_enqueue_script( 'nousaccess-js' );
    }
    add_action( 'wp_enqueue_scripts', 'nousaccess_stylesheet' );
