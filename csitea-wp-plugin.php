<?php 
/***
 * Plugin Name: CSITEA Wordpress Plugin
 * Version: 1.0.0
 * Plugin URI: https://github.com/csitea/csitea-plugin
 * Description: Adds on Wordpress with CSITEA specific features and integrations.
 * Author: CSITEA Oy Ab
 * Author URI: http://csitea.net/
 * Text Domain: csitea
 * Domain Path: /lang/
 * Licence: GPL v2 or later
 */

defined('ABSPATH') or die( 'No direct access.' );
 
$plugin_name='csitea-wp-plugin';

function csitea_login_page_customizations_init() {
    wp_enqueue_style( 'csitea-login-page-customizations', plugins_url($plugin_name.'css/login-page.css?v=1.6',__FILE__));
}
csitea_login_page_customizations_init();