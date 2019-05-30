<?php


/******************
 * Enqueue Scripts
 */
function theme_scripts(){
    wp_enqueue_style( 'theme', get_stylesheet_uri() );
    wp_enqueue_script( 'theme', get_stylesheet_directory_uri().'/assets/js/theme.js', array('jquery'), '1.0.0' );
    
    wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    wp_enqueue_style( 'bootstrap-reboot', get_stylesheet_directory_uri().'/assets/css/bootstrap-reboot.css' );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap-grid', get_stylesheet_directory_uri().'/assets/css/bootstrap-grid.css' );

    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri().'/assets/js/bootstrap.js', array('jquery'), '4.2.1' );
    wp_enqueue_script( 'bootstrap-bundle', get_stylesheet_directory_uri().'/assets/js/bootstrap.bundle.js', array('jquery'), '4.2.1' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/*********************
 * Theme Setup
 */
function theme_setup(){

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('custom-background');

    /* Register main primary menu */
    register_nav_menu('primary', 'Primary menu');
}
add_action('after_setup_theme', 'theme_setup');
/**********************
 * Theme Init
 */
function custom_theme_init(){
    
}
add_action('theme_init','custom_theme_init');
/***********************
 * Register Widget
 */
function theme_widgets(){
    
    /* Sidebar Widget Area */
    register_sidebar( array(
        'name'          =>  __('Blog sidebar Widget Area','beewp'),
        'description'   =>  'Blog sidebar widget area',
        'id'            =>  'sidebar',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
    /*Footer Widget Area 1 */
    register_sidebar( array(
        'name'          =>  __('Footer Widget Area 1','beewp'),
        'description'   =>  'footer widget area 1',
        'id'            =>  'footer-1',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
    /*Footer Widget Area 2 */
    register_sidebar( array(
        'name'          =>  __('Footer Widget Area 2','beewp'),
        'description'   =>  'footer widget area 2',
        'id'            =>  'footer-2',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
    /*Footer Widget Area 3 */
    register_sidebar( array(
        'name'          =>  __('Footer Widget Area 3','beewp'),
        'description'   =>  'footer widget area 3',
        'id'            =>  'footer-3',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
    /*Footer Widget Area 4 */
    register_sidebar( array(
        'name'          =>  __('Footer Widget Area 4','beewp'),
        'description'   =>  'footer widget area 4',
        'id'            =>  'footer-4',
        'before_widget' =>  '<div class="widget %1$s %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4 class="widget-title">',
        'after_title'   =>  '</h4>'
    ) );
}
add_action('widgets_init','theme_widgets');

/**********************
 * Include walker class
 */
require ( 'inc/custom-walker.php' );