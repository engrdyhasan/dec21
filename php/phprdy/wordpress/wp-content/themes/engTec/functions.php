<?php 
//include navwalker class for bootstrap navigation menu
require_once('wp-bootstrap-navwalker.php');
//add feature image support
add_theme_support( 'post-thumbnails' ); 
/*
 **function to add my costom styles
 **added by engRdy 29/08/2020
 **wp_enqueue_styles
 */
  function engrdy_add_styles() {
    wp_enqueue_style('all-css', get_template_directory_uri().'/css/all.min.css');
    wp_enqueue_style('normalize-css', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('fonawesome-css', get_template_directory_uri().'/css/fontawesome.min.css');
    // wp_enqueue_style('style-css', get_template_directory_uri().'/style.css');
    wp_enqueue_style('mainrdy-css', get_template_directory_uri().'/css/mainrdy.css');
  }
/*
 **function to add my costom stcripts
 **added by engRdy
 **wp_enqueue_stcripts
 */
  function engrdy_add_scripts() {
    wp_deregister_script('jquery');//Remove Registeration for OLD jQuery
    // Registere A new jQuery in footer
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
    wp_enqueue_script('jquery');//Enqueue the NEW jQuery
    // wp_enqueue_stcript('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'), false, true);
    // wp_enqueue_stcript('jquery', get_template_directory_uri().'/js/jquery-3.4.1.min.js',array(), false, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'), false, true);
    wp_enqueue_script('fontawesome-js', get_template_directory_uri().'/js/fontawesome.min.js',array(), false, true);
    wp_enqueue_script('html5shiv-js', get_template_directory_uri().'/js/html5shiv.min.js');
    wp_enqueue_script('mainrdy-js', get_template_directory_uri().'/js/mainrdy.js',array(), false, true);
    wp_script_add_data('html5shiv','conditinal','lt IE 9');
    wp_enqueue_script('respond-js', get_template_directory_uri().'/js/respond.min.js');
    wp_script_add_data('respond','conditinal','lt IE 9');
  }

/**
 **add custom menu suppurt
 **added by engRdy
 **add_action()
 */
function engrdy_register_menu() {
  register_nav_menus(array(
    'bootstrap-menu'     => 'Navigation Bar',
    'footer-menu'        => 'Footer Menu'
    ) );
}

function engrdy_bootstrap_menu(){
  wp_nav_menu(array(
    'theme_location' => 'bootstrap-menu',
    'menu_class'     => 'nav navbar-nav navbar-right',
    'container'      => false,
    'depth'          => 2,
    'walker'         => new wp_bootstrap_navwalker()
  ));
}

/**
 **Customize the excerpt word length & Read more dotes 
 **added by engRdy
 **excerpt_length()
 **add_filter()
 */
function engrdy_extend_excerpt_length($length){
  if (is_author()) {
    return 22;
  }else{
    return 85;
  }
}
add_filter('excerpt_length', 'engrdy_extend_excerpt_length');

function engrdy_excerpt_change_dots($more){
  return ' ..more ...';
}
add_filter('excerpt_more', 'engrdy_excerpt_change_dots');
/**
 **add actions
 **added by engRdy
 **add_action()
 */
add_action('wp_enqueue_scripts', 'engrdy_add_styles');
add_action('wp_enqueue_scripts', 'engrdy_add_scripts');
add_action('init', 'engrdy_register_menu');

function numbering_pagination() {
  global $wp_query;
  $all_pages = $wp_query-> max_num_pages;
  $current_page = max(1, get_query_var('paged'));
  if ($all_pages > 1 ) {
    return paginate_links(array(
      
    'base' => get_pagenum_link() . '%#%',
    'format' => 'page/%#%',
    'current' => $current_page
    ));
  }
  echo $current_page;
}



?>
