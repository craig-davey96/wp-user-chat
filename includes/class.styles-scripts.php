<?php

    class wpucStylesScripts{

        public static function init(){

            add_action('admin_enqueue_scripts' , array(__CLASS__ , 'styles'));

        }

        public static function styles(){

            wp_enqueue_style('wpuc-admin-styles' , WPUC_ASSETS.'css/wp-user-chat.css');

        }

    }

    wpucStylesScripts::init();