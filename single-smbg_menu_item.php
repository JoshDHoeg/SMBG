<?php
/**
 * The template for displaying all single posts and attachments
 *
 * Template Name: Menu
 * Template Post Type: post, product
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="container-fluid" id="menu-detail">
        <div class="row">
          <div class="col-sm-12">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>

      </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
