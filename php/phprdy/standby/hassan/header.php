<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage hassan
 * @since hassan 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<!-- <html <?php language_attributes(); ?> class="no-js no-svg"> -->
<head>
<meta charset="<?php bloginfo( 'charset'); ?>" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<title><?php bloginfo('name'); ?></title>
<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

<!-- <div id="clockrdy" style="color: #f00;"></div> -->
<?php wp_head(); ?>
</head>
<body <?php //body_class(); ?>>

<?php //wp_body_open(); ?>
 <!-- 
	 <div id="page" class="site"> 
	<a class="skip-link screen-reader-text" href="#content"><?php //_e( 'Skip to content', 'hassan' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php //if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php //get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div> .wrap -->
			</div><!-- .navigation-top -->
		<?php //endif; ?>

	</header><!-- #masthead -->
<body>
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	//if ( ( is_single() || ( is_page() && ! hassan_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
	//	echo '<div class="single-featured-image-header">';
	//	echo get_the_post_thumbnail( get_queried_object_id(), 'hassan-featured-image' );
	//	echo '</div><!-- .single-featured-image-header -->';
	//endif;
	?>

	<!-- <div class="site-content-contain">
		<div id="content" class="site-content"> --> 

  <!-- star navbar**engrHassan***14*08*2020******-->
   <!-- start our navbar ************************************************************-->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#andalus-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">And<span>alus</span></a>
      </div>
      <!-- collect the nav links,forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="andalus-nav">
        <?php hassan_bootstrap_menu();?>
      </div>
    </div>
    <!-- end of the container -->
  </nav>
  <!-- end our navbar ************************************************************-->