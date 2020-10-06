<?php
/*
@package linarcfootball
    ==========================
    Theme custom post types
    =========================
*/

add_action('init', 'events_custom_post_type');
function events_custom_post_type()
{
    $labels = array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new' => 'Add Event',
        'add_new_item' => 'Add Event',
        'menu_name' => 'Events',
        'name_admin_bar' => 'Events',
    );
    $args = array(
        'labels' => $labels,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 26,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'author', 'excerpt', 'comments','thumbnail'),
    );
    register_post_type('events', $args);
}
// Location

add_action('add_meta_boxes', 'events_location_add_meta_box');

function events_location_add_meta_box()
{
    add_meta_box('events_location', 'Event Location', 'events_location_callback', 'events', 'side');
}

function events_location_callback($post)
{
    wp_nonce_field('save_event_data', 'save_event_location_data_nonce');
    $value = get_post_meta($post->ID, '_event_location_key', true);
    echo '<br/><div class="meta">';
    echo '<input class="components-text-control__input ui-autocomplete-input" type="text" id="event_location_field" name="event_location_field" value="'.esc_attr($value).'" size="25" >';
    echo '<p class="howto" >Add location where the event is going to happen</p>'; 
    echo '</div>';
}


add_action('save_post', 'save_event_data');

function save_event_data($post_id)
{
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (!isset($_POST['event_location_field'])) {
        return;
    }
    $my_data = sanitize_text_field($_POST['event_location_field']);
    update_post_meta($post_id, '_event_location_key', $my_data);
}