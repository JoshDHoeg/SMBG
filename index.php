<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); ?>

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
        <h2 class="title">Eat Messy. Drink Neat.</h2>
        <div class="buttons">
          <a class="btn">Find Us</a>
          <a class="btn">Menu</a>
        </div>
      </div>
      <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/topography.svg" alt="Los Angeles">
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/images/Mo.png" alt="Los Angeles">
    </div>

    <div class="item">
      <div class="item-title">
        <h2 class="title">Eat Messy. Drink Neat.</h2>
        <div class="buttons">
          <a class="btn">Find Us</a>
          <a class="btn">Menu</a>
        </div>
      </div>
      <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/topography.svg" alt="Los Angeles">
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/images/Mo.png" alt="Los Angeles">
    </div>

    <div class="item">
      <div class="item-title">
        <h2 class="title">Eat Messy. Drink Neat.</h2>
        <div class="buttons">
          <a class="btn">Find Us</a>
          <a class="btn">Menu</a>
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
          <div class="break col-xs-12"></div>
          <div class=" col-sm-4 col-sm-offset-2">
            <p>Breif paragraph talking about what makes the Smilng Moose bar and Grill unique and why someone should choose this brand over someone else. This is a pretty ethos focused part of the site. The paragraph should be relativeliy long and leads to a call to action will send people to the locations </p>
            <div class="buttons">
              <a class="btn">Menu</a>
            </div>
          </div>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
