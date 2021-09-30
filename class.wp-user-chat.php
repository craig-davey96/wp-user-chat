<?php

    class wpUserChat{

        public static function init(){
            add_action('init' , array(__CLASS__ , 'createDefines'));
        }

        public static function createDefines(){

            define('WPUC_DIR' , plugin_dir_path(__FILE__));
            define('WPUC_URL' , plugin_dir_url(__FILE__));

            define('WPUC_INC' , WPUC_DIR.'/includes/');
            define('WPUC_VIEWS' , WPUC_DIR.'/views/');

        }

    }

    wpUserChat::init();