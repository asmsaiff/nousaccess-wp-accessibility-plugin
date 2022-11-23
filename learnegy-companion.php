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
    
    define( 'LEARNEGY_PATH', plugin_dir_url( __FILE__ ) );

    function learnegy_front_page_template_add( $templates ) {
        $templates[wp_normalize_path( plugin_dir_path( __FILE__ ) . '/templates/front.php' )] = __( 'Front Page', 'learnegy' ); 

        return $templates;
    }
    add_filter( 'theme_page_templates', 'learnegy_front_page_template_add' );


    function learnegy_front_page_template($template) {
        if (is_page()) {
            $meta = get_post_meta(get_the_ID());
            if (strpos($meta['_wp_page_template'][0], 'front.php') !== false) {
                $template = $meta['_wp_page_template'][0];
            }
        }

        return $template;
    }
    add_filter( 'template_include', 'learnegy_front_page_template', 99 );