<?php

add_action('init', function () {
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'menu_name' => 'Services',
            'all_items' => 'All Services',
            'edit_item' => 'Edit Service',
            'view_item' => 'View Service',
            'view_items' => 'View Services',
            'add_new_item' => 'Add New Service',
            'new_item' => 'New Service',
            'parent_item_colon' => 'Parent Service:',
            'search_items' => 'Search Services',
            'not_found' => 'No services found',
            'not_found_in_trash' => 'No services found in Trash',
            'archives' => 'Service Archives',
            'attributes' => 'Service Attributes',
            'insert_into_item' => 'Insert into service',
            'uploaded_to_this_item' => 'Uploaded to this service',
            'filter_items_list' => 'Filter services list',
            'filter_by_date' => 'Filter services by date',
            'items_list_navigation' => 'Services list navigation',
            'items_list' => 'Services list',
            'item_published' => 'Service published.',
            'item_published_privately' => 'Service published privately.',
            'item_reverted_to_draft' => 'Service reverted to draft.',
            'item_scheduled' => 'Service scheduled.',
            'item_updated' => 'Service updated.',
            'item_link' => 'Service Link',
            'item_link_description' => 'A link to a service.',
        ),
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
        'supports' => array(
            0 => 'title',
            1 => 'editor',
            2 => 'thumbnail',
        ),
        'taxonomies' => array(
            0 => 'service_category',
        ),
        'delete_with_user' => false,
    ));
});

add_action('init', function () {
    register_taxonomy('service_category', array(
        0 => 'service',
    ), array(
        'labels' => array(
            'name' => 'Service Categories',
            'singular_name' => 'Service Category',
            'menu_name' => 'Service Categories',
            'all_items' => 'All Service Categories',
            'edit_item' => 'Edit Service Category',
            'view_item' => 'View Service Category',
            'update_item' => 'Update Service Category',
            'add_new_item' => 'Add New Service Category',
            'new_item_name' => 'New Service Category Name',
            'parent_item' => 'Parent Service Category',
            'parent_item_colon' => 'Parent Service Category:',
            'search_items' => 'Search Service Categories',
            'not_found' => 'No service categories found',
            'no_terms' => 'No service categories',
            'filter_by_item' => 'Filter by service category',
            'items_list_navigation' => 'Service Categories list navigation',
            'items_list' => 'Service Categories list',
            'back_to_items' => '← Go to service categories',
            'item_link' => 'Service Category Link',
            'item_link_description' => 'A link to a service category',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
    ));
});
