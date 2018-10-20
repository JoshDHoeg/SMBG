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

      <div class="container" id="menu-detail">
        <div class="row">
          <div class="col-sm-12">
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="pimage">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
            <?php } ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content();  ?></p>
            <?php if (get_field('menu_price')): ?>
              <p><?php the_field('menu_price'); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>

      </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
