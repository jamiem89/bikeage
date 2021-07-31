<?php
/**
 * Enqueue scripts and styles.
 */
function indigo_scripts() {

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), false, true );

}
add_action( 'wp_enqueue_scripts', 'indigo_scripts' );


/**
 * Register custom post types
 */
function create_post_types() {

	register_post_type('product', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'products'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
          'name' => 'Products',
          'add_new_item' => 'Add New Product',
          'edit_item' => 'Edit Product',
          'all_items' => 'All Products',
          'singular_name' => 'Product'
        ),
        'menu_icon' => 'dashicons-products'
      ));

}
add_action( 'init', 'create_post_types' );

// Remove Admin bar

add_filter('show_admin_bar', '__return_false');

// Add post thumbails

add_theme_support( 'post-thumbnails' );

// Remove default WP embed script

function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}

add_action( 'wp_footer', 'my_deregister_scripts' );

// Custom image crops
function wpdocs_theme_setup() {
    // Register menu locations
    register_nav_menu('headerMenuLocation', 'Header Menu Location');

    // Custom image sizes
    add_image_size('product-thumb', 960, 635);
    add_image_size('pod-img', 1220, 1180);
    add_image_size('pod-img-small', 610, 590);
}
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );