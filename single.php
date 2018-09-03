<?php
/**
 * The template for displaying all single posts and attachments
 *
 * Template Name: Post Dark
 * Template Post Type: post, product
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


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

<?php get_footer(); ?>
