<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php
    wp_title('|', 'true', 'right');
     bloginfo('name'); 
     ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body>
   <!-- start our navbar ************************************************************-->
   <nav class="navbar navbar-inverse">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">eng<span>RADY</span></a> -->
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          </div>
            <!-- collect the nav links,forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php hassan_bootstrap_menu() ?>
          </div>
        </div> <!-- end of the container -->
    </nav>
    <!-- end our navbar ************************************************************-->

    
