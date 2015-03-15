<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */

//Drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );
//This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
add_filter( 'widget_text', 'do_shortcode' );

//Widget support for a right sidebar
register_sidebar( array(
	'name' => 'Right Sidebar',
	'id' => 'right-sidebar',
	'description' => 'Widgets in this area will be shown on the right-hand side.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Widget support for the footer
register_sidebar( array(
	'name' => 'Footer Sidebar',
	'id' => 'footer-sidebar',
	'description' => 'Widgets in this area will be shown in the footer.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Enqueue_styles
if ( ! function_exists( 'Wps_load_styles' ) ) {
function Wps_load_styles() {

	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/style.css');
	wp_register_style( 'skeleton-base', get_template_directory_uri() . '/stylesheets/base.css');
	wp_register_style( 'skeleton-layout', get_template_directory_uri() . '/stylesheets/layout.css');

	wp_enqueue_style( 'skeleton-base' );
	wp_enqueue_style( 'skeleton-style' );
	wp_enqueue_style( 'skeleton-layout' );

}
add_action('wp_enqueue_scripts', 'Wps_load_styles');
} // endif

function theme_name_scripts() {
	wp_enqueue_script( 'jQuery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'bxSliderjs',  get_template_directory_uri() . '/js/jquery.bxslider.js', array('jQuery'), false, true );
	wp_enqueue_script( 'mainjs',  get_template_directory_uri() . '/js/main.js', array('jQuery', 'bxSliderjs'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// custom post types
// Ski Camp
add_action( 'init', 'ski_camp_init' );
function ski_camp_init() {
    $labels = array(
        'name'               => _x( 'Ski Camp', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Ski Camp', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Ski Camp', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Ski Camp', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'ski camp', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Ski Camp', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Ski Camp', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Ski Camp', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Ski Camp', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Ski Camp', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Ski Camp', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Ski Camp:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No teams found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No teams found in Trash.', 'your-plugin-textdomain' )
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true, //array( 'slug' => 'team' ),
        //'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'editor', 'page-attributes' )
    );
    register_post_type( 'ski-camp', $args );
    flush_rewrite_rules();
}
