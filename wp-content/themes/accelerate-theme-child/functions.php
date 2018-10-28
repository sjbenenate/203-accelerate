<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/



// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
  /*wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/5.4.2/css/font-awesome.min.css' );*/
 /* wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/fontawesome.min.css' );*/
  /*wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );*/
  wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  }
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );


// custom post types
// source: https://learn.skillcrush.com/module-8/create-a-case-studies-custom-post-type/
function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );
