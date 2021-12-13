<?php
require_once('wp-bootstrap-navwalker.php');
// require_once('WPDocs-Walker-Nav-Menu.php');

add_theme_support('post-thumbnails');

function hassan_add_styles(){

    wp_enqueue_style('all-css',get_template_directory_uri().'/css/all.min.css');
    wp_enqueue_style('normalize-css',get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-css',get_template_directory_uri().'/css/fontawesome.min.css');
    wp_enqueue_style('main-css',get_template_directory_uri().'/css/mainrdy.css');
}
function hassan_add_scripts(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery-3.4.1.min.js'), false,'',true);//<!--مشكلة-->
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
    wp_enqueue_script('fontawesome-js',get_template_directory_uri().'/js/fontawesome.min.js',array(),false,true);
    wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.min.js');
    wp_script_add_data('html5shiv','conditional','lt IE 9');
    wp_enqueue_script('respond',get_template_directory_uri().'/js/respond.min.js');
    wp_script_add_data('respond','conditional','lt IE 9');

    wp_enqueue_script('clockrdy',get_template_directory_uri().'/js/clockrdy.js');
    wp_enqueue_script('main-js',get_template_directory_uri().'/js/mainrdy.js',array(),false,true);
}
// if ( ! function_exists( 'hassan_register_custom_menu' ) ) {  <!--RADY -->
 
    function hassan_register_custom_menu(){
        //  register_nav_menu('bootstrap-menu', __('Navigation bar'));
        
         register_nav_menus(array(
            'bootstrap-menu' => 'Navigation Bar',
            // 'primary_menu' => __( 'Primary Menu', 'Navigation Bar' ),
            'footer-menu'  => 'Footer Menu',
            // 'footer_menu'  => __( 'Footer Menu', 'Footer Bar' ),
            'sidebar-menu'  => 'Side Menu'
            // 'sidebar_menu'  => __( 'Side Menu', 'Side Bar' ),
        ) );
        
    }
    add_action( 'init', 'hassan_register_custom_menu', 0 );
    // add_action( 'init', 'hassan_register_custom_menu');
// } <!--RADY -->

function hassan_bootstrap_menu(){
    // wp_nav_menu();
    wp_nav_menu(array(
        'theme_location'    => 'bootstrap-menu',
        'menu_class'        => 'nav navbar-nav navbar-right',
        'container'         => false,
        'depth'             => 2,
        // 'walker' => new WPDocs_Walker_Nav_Menu()
        'walker'            => new WP_Bootstrap_Navwalker()
        // 'walker'            => new wp_bootstrap_navwalker()
    ));
} 
/*
wp_nav_menu( array(
    'menu'   => 'Something custom walker',
    'walker' => new WPDocs_Walker_Nav_Menu()
) );
*/
// ****************************************
function hasan_extend_excerpt_length($length){
    if (is_author()) {
        return 22;
    } else if (is_category()) {
        return 44;
    // } else if (is_category-linux()) {
        return 66;
    } else {
        return 88;
    }
    
}
add_filter('excerpt_length', 'hasan_extend_excerpt_length');

function hasan_extend_change_dots($more){
    return '    {...read more...}';
}
add_filter('excerpt_more', 'hasan_extend_change_dots');
// ****************************************

add_action('wp_enqueue_scripts','hassan_add_styles');
add_action('wp_enqueue_scripts','hassan_add_scripts');

// numbering pagination
function numbering_pagination(){
    global $wp_query;
    $all_pages = $wp_query->max_num_pages;
    $current_page = max(1, get_query_var('paged'));
    // $current_page = get_query_var( 'paged', 1 );
// echo  $current_page;
// echo 'Currently Browsing Page ', $current_page;
if ($all_pages > 1) {
    $defaults = array(
        // 'base'               => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below).
        'base'               => get_pagenum_link() . '%_%', // http://example.com/all_posts.php%_% : %_% is replaced by format (below).
        // 'format'             => $format, // ?page=%#% : %#% is replaced by the page number.
        'format'             => 'page/%#%', // ?page=%#% : %#% is replaced by the page number.
        // 'total'              => $all_pages,
        'current'            => $current_page,
        'aria_current'       => 'page',
        'show_all'           => false,
        'prev_next'          => true,
        // 'prev_next'          => false,
        // 'prev_text'          => __( '&laquo; Prev' ),
        'prev_text'          => __( '&laquo; ' ),
        // 'next_text'          => __( 'Next &raquo;' ),
        'next_text'          => __( ' &raquo;' ),
        'end_size'           => 2,
        'mid_size'           => 1,
        'type'               => 'plain',
        'add_args'           => array(), // Array of query args to add.
        'add_fragment'       => '',
        'before_page_number' => '',
        'after_page_number'  => '',
    );
 return paginate_links($defaults);
    // $args = wp_parse_args( $args, $defaults );
}
}
// register_sidebar
function hasan_main_sidebar() {
    // register main sidebar
    register_sidebar (array(
        'name'              => 'Main Sidebar',
        'id'                => 'main-sidebar',
        'description'       => 'Main Sidebar Appear Every where',
        'class'             => 'main-sidebar',
        'before_widget'     => '<div class="widget-content">',
        'after_widget'      => '</div>',
        'before_title'      => '<h3 class="widget-title">',
        'after_title'       => '</h3>'
        ));
}
add_action('widgets_init','hasan_main_sidebar');

function hasan_remove_paragraph($content) {
    remove_filter('the_content', 'wpautop');
    return $content;
}
add_filter('the_content', 'hasan_remove_paragraph', 0);

