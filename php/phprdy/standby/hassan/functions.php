<?php
require_once('wp-bootstrap-navwalker.php');

add_theme_support('post-thumbnails');

function hassan_add_styles(){

    wp_enqueue_style('all-css',get_template_directory_uri().'/css/all.min.css');
    wp_enqueue_style('normalize-css',get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-css',get_template_directory_uri().'/css/fontawesome.min.css');
    wp_enqueue_style('main-css',get_template_directory_uri().'/css/main.css');
}
function hassan_add_scripts(){

    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery-3.4.1.min.js'), false,'',true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
    wp_enqueue_script('fontawesome-js',get_template_directory_uri().'/js/fontawesome.min.js',array(),false,true);
    wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.min.js');
    wp_script_add_data('html5shiv','conditional','lt IE 9');
    wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');
    wp_script_add_data('respond','conditional','lt IE 9');

    wp_enqueue_script('clockrdy',get_template_directory_uri().'/js/clockrdy.js');
    wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),false,true);
}
if ( ! function_exists( 'hassan_register_custom_menu' ) ) {
 
    function hassan_register_custom_menu(){
        // register_nav_menu('bootstrap-menu', __('Navigation bar'));
        register_nav_menus(array(
            'bootstrap-menu' => 'Navigation Bar',
            // 'primary_menu' => __( 'Primary Menu', 'Navigation Bar' ),
            'footer-menu'  => 'Footer Menu',
            // 'footer_menu'  => __( 'Footer Menu', 'Footer Bar' ),
            'sidebar-menu'  => 'Side Menu'
            // 'sidebar_menu'  => __( 'Side Menu', 'Side Bar' ),
        ) );
    }
    // add_action( 'init', 'hassan_register_custom_menu', 0 );
    add_action( 'init', 'hassan_register_custom_menu');
}

function hassan_bootstrap_menu() {
    // wp_nav_menu();
    wp_nav_menu(array(
        'theme_location'    => 'bootstrap-menu',
        'menu_class'        => 'nav navbar-nav navbar-right',
        'container'         => false,
        'depth'             => 2,
        'walker'            => new wp_bootstrap_navwalker()
    ));
} 

function hasan_extend_excerpt_length($length){
    return 22;
}
function hasan_extend_change_dots($more){
    return '    {...read more...}';
}
add_filter('excerpt_length', 'hasan_extend_excerpt_length');
add_filter('excerpt_more', 'hasan_extend_change_dots');




add_action('wp_enqueue_scripts','hassan_add_styles');
add_action('wp_enqueue_scripts','hassan_add_scripts');