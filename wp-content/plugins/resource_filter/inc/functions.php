<?php
function custom_resource_post_type() {
    // Custom post type labels
    $labels = array(
        'name'               => 'Resources',
        'singular_name'      => 'Resource',
        'add_new'            => 'Add New Resource',
        'add_new_item'       => 'Add New Resource',
        'edit_item'          => 'Edit Resource',
        'all_items'          => 'All Resources',
    );

    // Custom post type arguments
    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-format-aside',
        'rewrite'             => array('slug' => 'resources'),
        'supports'            => array('title', 'editor', 'thumbnail'),
    );

    // Register custom post type
    register_post_type('resource', $args);
}

// Register custom post type
add_action('init', 'custom_resource_post_type');

// Register custom taxonomy for resource types
function register_resource_type_taxonomy() {
    $labels = array(
        'name' => 'Resource Types',
        'singular_name' => 'Resource Type',
        'search_items' => 'Search Resource Types',
        'all_items' => 'All Resource Types',
        'edit_item' => 'Edit Resource Type',
        'update_item' => 'Update Resource Type',
        'add_new_item' => 'Add New Resource Type',
        'new_item_name' => 'New Resource Type Name',
        'menu_name' => 'Resource Types',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'resource-type' ),
    );

    register_taxonomy( 'resource_type', 'resource', $args );
}
add_action( 'init', 'register_resource_type_taxonomy' );

// Register custom taxonomy for resource topics
function register_resource_topic_taxonomy() {
    $labels = array(
        'name' => 'Resource Topics',
        'singular_name' => 'Resource Topic',
        'search_items' => 'Search Resource Topics',
        'all_items' => 'All Resource Topics',
        'edit_item' => 'Edit Resource Topic',
        'update_item' => 'Update Resource Topic',
        'add_new_item' => 'Add New Resource Topic',
        'new_item_name' => 'New Resource Topic Name',
        'menu_name' => 'Resource Topics',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array( 'slug' => 'resource-topic' ),
    );

    register_taxonomy( 'resource_topic', 'resource', $args );
}
add_action( 'init', 'register_resource_topic_taxonomy' );

