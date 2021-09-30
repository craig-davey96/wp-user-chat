<?php

    class wpucAdminPages{

        public static function init(){

            add_action('admin_menu' , array(__CLASS__ , 'addMainWPUCPage'));

        }

        public static function addMainWPUCPage(){

            add_menu_page(
                'WP User Chat',
                'WP User Chat',
                'manage_options',
                'wp-user-chat',
                function (){

                },
                'dashicons-admin-comments'
            );

        }

    }

    wpucAdminPages::init();