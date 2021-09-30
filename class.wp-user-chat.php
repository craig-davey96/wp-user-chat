<?php

    class wpUserChat{

        public static function init(){

            add_action('init' , array(__CLASS__ , 'includeFilesInIncludes'));

        }

        public static function includeFilesInIncludes(){



        }

    }

    wpUserChat::init();