<?php
    function restaurant_database(){
        global $wpdb;
        global $leregal_db_version;
        $leregal_db_version = '1.0';
        $table = $wpdb->prefix . 'reservation';
        $charsert_collate=$wpdb->get_charset_collate();
        //SQL to create the table wp_reservation
        $sql = "CREATE TABLE $table (
            id mediumint(9) AUTO_INCREMENT,
            name varchar(50) NOT NULL,
            email varchar(50) DEFAULT '' NOT NULL,
            phone varchar(12) NOT NULL,
            guests varchar(12) NOT NULL,
            date datetime NOT NULL,
            message longtext NOT NULL,
            PRIMARY KEY(id)
            
        ) $charset_collate; ";
        require_once(ABSPATH . "wp-admin/includes/upgrade.php");
        dbDelta($sql);

    }
    add_action( 'after_setup_theme', 'restaurant_database');
?>