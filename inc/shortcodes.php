<?php

//Shortcodes

function l_events_upcoming_func( $atts ){ 

    $upcoming_events = new WP_Query(
        array(
            'post_status' => 'future',
            'post_type' => 'events',
            'posts_per_page' => 13,
            'orderby' => 'date',
            'order' => 'ASC',
        )
    );
    include linearc_events_plugin_dir_path().'/templates/upcoming_events.php';
}

add_shortcode( 'l_upcoming_events', 'l_events_upcoming_func' );



function l_events_footer_upcoming_func( $atts ){ 


    $upcoming_events = new WP_Query(
        array(
            'post_status' => 'future',
            'post_type' => 'events',
            'posts_per_page' => 13,
            'orderby' => 'date',
            'order' => 'ASC',
        )
    );

    include linearc_events_plugin_dir_path().'/templates/upcoming_events_footer.php';
}

add_shortcode( 'l_upcoming_footer_events', 'l_events_footer_upcoming_func' );