<?php
/**
 * The template for displaying all single posts and attachments
 *
 * Template Name: Store
 * Template Post Type: post, product
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>







<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="item-title">

        <?php if (get_field('store_header_1')): ?>
    			<h2 class="title" ><?php the_field('store_header_1'); ?></h2>
        <?php endif; ?>

        <div class="buttons">
          <?php if (get_field('store_link_1') && get_field('store_link_1_text')): ?>
            <a href="<?php the_field('store_link_1'); ?>" class="btn"><?php the_field('store_link_1_text'); ?></a>
          <?php endif; ?>

          <?php if (get_field('store_link_2') && get_field('store_link_2_text')): ?>
            <a href="<?php the_field('store_link_2'); ?>" class="btn"><?php the_field('store_link_2_text'); ?></a>
          <?php endif; ?>
        </div>
      </div>
      <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/topography.svg" alt="Los Angeles">
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/images/Mo.png" alt="Los Angeles">
    </div>

    <div class="item">
      <div class="item-title">

        <?php if (get_field('store_header_2')): ?>
          <h2 class="title" ><?php the_field('store_header_2'); ?></h2>
        <?php endif; ?>

        <div class="buttons">
          <?php if (get_field('store_link_1') && get_field('store_link_1_text')): ?>
            <a href="<?php the_field('store_link_1'); ?>" class="btn"><?php the_field('store_link_1_text'); ?></a>
          <?php endif; ?>

          <?php if (get_field('store_link_2') && get_field('store_link_2_text')): ?>
            <a href="<?php the_field('store_link_2'); ?>" class="btn"><?php the_field('store_link_2_text'); ?></a>
          <?php endif; ?>
        </div>
      </div>
      <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/topography.svg" alt="Los Angeles">
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/images/Mo.png" alt="Los Angeles">
    </div>

    <div class="item">
      <div class="item-title">

        <?php if (get_field('store_header_3')): ?>
    			<h2 class="title" ><?php the_field('store_header_3'); ?></h2>
        <?php endif; ?>

        <div class="buttons">
          <?php if (get_field('store_link_1') && get_field('store_link_1_text')): ?>
            <a href="<?php the_field('store_link_1'); ?>" class="btn"><?php the_field('store_link_1_text'); ?></a>
          <?php endif; ?>

          <?php if (get_field('store_link_2') && get_field('store_link_2_text')): ?>
            <a href="<?php the_field('store_link_2'); ?>" class="btn"><?php the_field('store_link_2_text'); ?></a>
          <?php endif; ?>
        </div>
      </div>
      <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/topography.svg" alt="Los Angeles">
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/images/Mo.png" alt="Los Angeles">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="container-fluid" id="ethos">
        <div class="row">
          <div class=" col-sm-6">
            <h1>Ethos of Smiling Moose</h1>
          </div>
          <div class="col-sm-6">
            <img class="stock-food" src="<?php echo get_template_directory_uri(); ?>/images/stock-food.svg" alt="food">
          </div>
          <div class="break col-xs-12"></div>
          <div class=" col-sm-4 col-sm-offset-2">
            <p>Breif paragraph talking about what makes the Smilng Moose bar and Grill unique and why someone should choose this brand over someone else. This is a pretty ethos focused part of the site. The paragraph should be relativeliy long and leads to a call to action will send people to the locations </p>
            <div class="buttons">
              <a class="btn">Menu</a>
            </div>
          </div>
        </div>
      </div>

      <div class"break lines" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/lines.svg'); height: 10px"></div>


      </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
