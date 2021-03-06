<?php 
function projects_custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'omnia' ),
        'singular_name'       => _x( 'Projects', 'Post Type Singular Name', 'omnia' ),
        'menu_name'           => __( 'Projects', 'omnia' ),
        'parent_item_colon'   => __( 'Parent Projects', 'omnia' ),
        'all_items'           => __( 'All Projects', 'omnia' ),
        'view_item'           => __( 'View Projects', 'omnia' ),
        'add_new_item'        => __( 'Add New Projects', 'omnia' ),
        'add_new'             => __( 'Add New', 'omnia' ),
        'edit_item'           => __( 'Edit Projects', 'omnia' ),
        'update_item'         => __( 'Update Projects', 'omnia' ),
        'search_items'        => __( 'Search Projects', 'omnia' ),
        'not_found'           => __( 'Not Found', 'omnia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'omnia' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'projectss', 'omnia' ),
        'description'         => __( 'Projects', 'omnia' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-multisite',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'projects', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'projects_custom_post_type', 0 );