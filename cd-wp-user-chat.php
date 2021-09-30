<?php

    /**
     *
     * Plugin Name: WP User Chat
     * Plugin URI: https://github.com/craig-davey96/wp-user-chat/tree/master
     * Author: Craig Davey
     * Author URI: https://github.com/craig-davey96
     * Version: 1.0
     * Description: Chat UI for the users in the Wordpress installation. Users can chat between each other using this plugin.
     * Tags: Wordpress,Chat,Users
     * Text Domain: wp-user-chat
     * License:     GPL-2.0+
     * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
     *
     */

    define('WPUC_DIR' , plugin_dir_path(__FILE__));
    define('WPUC_URL' , plugin_dir_url(__FILE__));

    define('WPUC_INC' , WPUC_DIR.'/includes/');
    define('WPUC_VIEWS' , WPUC_DIR.'/views/');

    define('WPUC_ASSETS' , WPUC_URL.'/assets/');

    include 'class.wp-user-chat.php';
