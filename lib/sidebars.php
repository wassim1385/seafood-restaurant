<?php
    function restaurant_sidebar_widgets() {
        
        //Primary sidebar
        register_sidebar( array(
            'id' => 'primary-sidebar',
            'name' => 'primary sidebar',
            'description' => 'primary sidebar'
        ) );

        //Footer sidebars
        $footer_layout = '4,4,4';
        $columns = explode(',', $footer_layout);
        foreach($columns as $i=> $column) {
            register_sidebar( array(
                'id' => 'footer-sidebar-' . ($i+1),
                'name' => 'footer widgets column' . ($i+1),
                'description' => 'widgets displayed in the footer'
            ) );
        }
    }
        
    add_action( 'widgets_init', 'restaurant_sidebar_widgets' );