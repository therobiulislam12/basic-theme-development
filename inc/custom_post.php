<?php 

/**
 *
 *  Adding Custom Post Type
 *  @since 1.0.0
 * 
 *  @package ramify
 *
 */

function custom_service_post_type(){
    $labels = array(
        'name'               => _x('Services', 'ramify'),
        'singular_name'      => _x('Service', 'ramify'),
        'menu_name'          => _x('Services', 'ramify'),
        'name_admin_bar'     => _x('Service', 'add new on admin bar', 'ramify'),
        'add_new'            => _x('Add New Service', 'service', 'ramify'),
        'add_new_item'       => __('Add New Service', 'ramify'),
        'new_item'           => __('New Service', 'ramify'),
        'edit_item'          => __('Edit Service', 'ramify'),
        'view_item'          => __('View Service', 'ramify'),
        'all_items'          => __('All Services', 'ramify'),
        'search_items'       => __('Search Services', 'ramify'),
        'not_found'          => __('No services found', 'ramify'),
        'not_found_in_trash' => __('No services found in Trash', 'ramify'),
    );

    $args = array(
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'service'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5, // Set the menu position to 5 to place it below "Posts"
        'menu_icon'          => 'dashicons-admin-generic',
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'labels'             => $labels,
    );

    register_post_type('service', $args);
}

add_action( 'init', 'custom_service_post_type' );