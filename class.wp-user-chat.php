<?php

    class wpUserChat{

        public static function init(){

            add_action('init' , array(__CLASS__ , 'includeFilesInIncludes'));

        }

        public static function includeFilesInIncludes(){ // Include all the files inside the includes folder

            include WPUC_INC.'class.admin-pages.php';

        }

        public static function getView($view){ // Get a view from the views folder
            ob_start();
            include WPUC_VIEWS.$view;
            return ob_get_clean();
        }

    }

    wpUserChat::init();