<?php
/**
 * Plugin Name: ALT LAB GDPR Cookie Consent banner
 * Plugin URI: https://github.com/
 * Description: Adds a cookie consent banner to sites
 * Version: .1
 * Author: Matt Roberts
 * Author URI: N/A
 * License: GPL2
 */

 /*   2018 Matt Roberts   (email : mdroberts@vcu.edu)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/*-------------------------------------------GDPR COOKIE CONSENT FOR SITES-------------------------------------------*/
function gdpr_cookie() {
    wp_enqueue_style( 'cookieconsent', 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css' );
    wp_enqueue_script( 'cookieconsent_js','https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js', null, null, true );
    wp_enqueue_script( 'details', plugins_url( '/js/details.js', __FILE__), null, null, true );

}    
    
add_action('wp_enqueue_scripts', 'gdpr_cookie');
