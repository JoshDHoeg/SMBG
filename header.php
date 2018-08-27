<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<nav class="navbar navbar-default navbar-fixed-top">
  <a class="navbar-logo" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"></a>
  <button type="button" class="navbar-toggle navbar-left collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <div class="socials">
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icons/facebook.svg"></a>
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icons/instagram.svg"></a>
    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter.svg"></a>
  </div>

    <div class="navbar-header">

    <?php
    wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()
      ) );
    ?>

  </div><!-- /.container-fluid -->
</nav>


<body <?php body_class(); ?>>

<div class="wrap">
