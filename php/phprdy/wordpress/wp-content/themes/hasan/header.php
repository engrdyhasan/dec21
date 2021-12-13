<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php
     wp_title('>','true','right'); 
      bloginfo('name'); ?>
    </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <!-- RADY -->
    <h2><?php bloginfo('name')?></h2> 
    <div id="clockrdy" style="color: #f00;"></div>
    <!-- /RADY -->
    <?php wp_head(); ?>
  </head>
  <body>
      <!-- star navbar**engrHassan***14*08*2020****** -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php hassan_bootstrap_menu()?>
        </div>
      </div>
      <!-- end of the container -->
    </nav>
    <?php get_sidebar();  // RADY 25-9-2021?>
    <!-- end our navbar ************************************************************-->