<?php

    /**
     *
     * Plugin Name: WP User Chat
     * Plugin URI: https://github.com/craig-davey96/wp-user-chat
     * Author: Craig Davey
     * Author URI: https://github.com/craig-davey96git
     * Description: Chat UI for the users in the Wordpress installation. Users can chat between each other using this plugin.
     * Tags: Wordpress,Chat,Users
     *
     */

    define('WPUC_DIR' , plugin_dir_path(__FILE__));
    define('WPUC_URL' , plugin_dir_url(__FILE__));

    define('WPUC_INC' , WPUC_DIR.'/includes/');
    define('WPUC_VIEWS' , WPUC_DIR.'/views/');

    include 'class.wp-user-chat.php';
