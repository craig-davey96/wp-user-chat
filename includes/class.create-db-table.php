<?php

    global $wpuc_db_version;
    $wpuc_db_version = '1.0';

    class wpucCreateDBTable{

        public static function init(){

        }

        public static function createMessagesDBTable(){

            global $wpdb , $wpuc_db_version;

            $table_name = $wpdb->prefix . 'chat';

            $charset_collate = $wpdb->get_charset_collate();

            $sql = "CREATE TABLE $table_name (
                id mediumint(9) NOT NULL AUTO_INCREMENT,
                sender mediumint(9) NOT NULL,
                reciever mediumint(9) NOT NULL,
                message longtext NOT NULL,
                message_read datetime NOT NULL,
                datesent datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
                PRIMARY KEY  (id)
            ) $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );

            add_option( 'jal_db_version', $wpuc_db_version );

        }

    }

    wpucCreateDBTable::init();