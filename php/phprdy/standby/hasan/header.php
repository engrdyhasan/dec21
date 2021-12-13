<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset'); ?>" />
	<title>
    <?php wp_title('>','true','right'); ?>
    <?php bloginfo('name'); ?>
  </title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<!-- <div id="clockrdy" style="color: #f00;"></div> -->
	<?php wp_head(); ?>
</head>
<body>
    <!-- star navbar**engrHassan***14*08*2020****** -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
      </div>
      <!-- collect the nav links,forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
        <?php hassan_bootstrap_menu()?>
      </div>
    </div>
    <!-- end of the container -->
  </nav>
  <!-- end our navbar ************************************************************-->