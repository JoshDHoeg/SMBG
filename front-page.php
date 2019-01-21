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
      <div class="item-title" style="background: url(<?php echo get_template_directory_uri(); ?>/images/background.png) rgba(22, 78, 126, 0.75) repeat">
        <h2 class="title">Front Page</h2>
        <div class="buttons">
          <a class="btn">Find Us</a>
          <a class="btn">Menu</a>
        </div>
      </div>
      <!-- <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/background.png" alt="Los Angeles"> -->
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/images/Mo.png" alt="Los Angeles">
    </div>

    <div class="item">
      <div class="item-title" style="background: url(<?php echo get_template_directory_uri(); ?>/images/background.png) rgba(22, 78, 126, 0.75) repeat">
        <h2 class="title">Eat Messy. Drink Neat.</h2>
        <div class="buttons">
          <a class="btn">Find Us</a>
          <a class="btn">Menu</a>
        </div>
      </div>
      <!-- <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/background.png" alt="Los Angeles"> -->
      <img class="header-img" src="<?php echo get_template_directory_uri(); ?>/images/Mo.png" alt="Los Angeles">
    </div>

    <div class="item">
      <div class="item-title" style="background: url(<?php echo get_template_directory_uri(); ?>/images/background.png) rgba(22, 78, 126, 0.75) repeat">
        <h2 class="title">Eat Messy. Drink Neat.</h2>
        <div class="buttons">
          <a class="btn">Find Us</a>
          <a class="btn">Menu</a>
        </div>
      </div>
      <!-- <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/images/icons.svg" alt="Los Angeles"> -->
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
  <div class="bottom-mountains" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/mountains-grey.svg'">
  </div>
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
          <div class="break break-12 col-xs-12"></div>
          <div class=" col-sm-4 col-sm-offset-2">
            <p>Breif paragraph talking about what makes the Smilng Moose bar and Grill unique and why someone should choose this brand over someone else. This is a pretty ethos focused part of the site. The paragraph should be relativeliy long and leads to a call to action will send people to the locations </p>
            <div class="buttons">
              <a class="btn">Menu</a>
            </div>
          </div>
        </div>
      </div>

      <div class"break lines" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/lines.svg'); height: 10px"></div>


      <div class="container" id="social-wrapper">
        <div class="row">
          <div class="col-xs-9">
            <h3>The moose on instagram</h3>
          </div>
          <div class="col-xs-3">
            <div class="socials">
              <a href="">
                <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                  <rect width="36" height="36" fill="#152D4E" fill-opacity="0"/>
                  <path d="M18 3C26.271 3 33 9.729 33 18C33 26.271 26.271 33 18 33C9.729 33 3 26.271 3 18C3 9.729 9.729 3 18 3ZM18 0C8.0595 0 0 8.0595 0 18C0 27.9405 8.0595 36 18 36C27.9405 36 36 27.9405 36 18C36 8.0595 27.9405 0 18 0ZM15 15H12V18H15V27H19.5V18H22.23L22.5 15H19.5V13.7505C19.5 13.0335 19.644 12.75 20.337 12.75H22.5V9H18.894C16.197 9 15 10.188 15 12.462V15Z"/>
                </svg>
              </a>
              <a href="">
                <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                  <rect width="36" height="36" fill="#152D4E" fill-opacity="0"/>
                  <path d="M18 3C26.271 3 33 9.729 33 18C33 26.271 26.271 33 18 33C9.729 33 3 26.271 3 18C3 9.729 9.729 3 18 3ZM18 0C8.0595 0 0 8.0595 0 18C0 27.9405 8.0595 36 18 36C27.9405 36 36 27.9405 36 18C36 8.0595 27.9405 0 18 0ZM18 10.623C20.403 10.623 20.688 10.632 21.6375 10.6755C24.078 10.7865 25.215 11.943 25.3275 14.364C25.3695 15.3135 25.3785 15.597 25.3785 18C25.3785 20.403 25.3695 20.688 25.3275 21.636C25.215 24.0555 24.0795 25.215 21.6375 25.326C20.688 25.368 20.4045 25.3785 18 25.3785C15.597 25.3785 15.312 25.3695 14.364 25.326C11.919 25.2135 10.7865 24.0525 10.674 21.636C10.632 20.688 10.6215 20.403 10.6215 18C10.6215 15.597 10.632 15.312 10.674 14.364C10.785 11.9415 11.922 10.785 14.364 10.674C15.312 10.6305 15.597 10.623 18 10.623ZM18 9C15.555 9 15.2505 9.0105 14.289 9.0555C11.019 9.2055 9.204 11.019 9.054 14.289C9.0105 15.2505 9 15.5565 9 18C9 20.445 9.0105 20.751 9.054 21.711C9.204 24.9795 11.019 26.796 14.289 26.946C15.2505 26.9895 15.555 27 18 27C20.445 27 20.751 26.9895 21.7125 26.946C24.9765 26.796 26.799 24.9825 26.946 21.711C26.9895 20.751 27 20.445 27 18C27 15.5565 26.9895 15.2505 26.946 14.289C26.799 11.0235 24.9825 9.204 21.7125 9.0555C20.751 9.0105 20.445 9 18 9ZM18 13.3785C15.4485 13.3785 13.3785 15.447 13.3785 18C13.3785 20.553 15.4485 22.6215 18 22.6215C20.5515 22.6215 22.6215 20.553 22.6215 18C22.6215 15.4485 20.5515 13.3785 18 13.3785ZM18 21C16.3425 21 15 19.6575 15 18C15 16.344 16.3425 15 18 15C19.656 15 21.0015 16.3425 21.0015 18C21.0015 19.6575 19.656 21 18 21ZM22.803 12.117C22.2075 12.117 21.723 12.6 21.723 13.197C21.723 13.7925 22.206 14.277 22.803 14.277C23.4 14.277 23.8845 13.794 23.8845 13.197C23.8845 12.6 23.4015 12.117 22.803 12.117Z"/>
                </svg>
              </a>
              <a href="">
                <svg width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
                  <rect width="36" height="36" fill="#152D4E" fill-opacity="0"/>
                  <path d="M18 3C26.271 3 33 9.729 33 18C33 26.271 26.271 33 18 33C9.729 33 3 26.271 3 18C3 9.729 9.729 3 18 3ZM18 0C8.0595 0 0 8.0595 0 18C0 27.9405 8.0595 36 18 36C27.9405 36 36 27.9405 36 18C36 8.0595 27.9405 0 18 0ZM27.75 13.167C27.0885 13.461 26.376 13.659 25.629 13.749C26.3925 13.2915 26.976 12.5685 27.2535 11.706C26.5395 12.129 25.749 12.4365 24.9075 12.6015C24.2355 11.883 23.274 11.4345 22.2135 11.4345C19.8285 11.4345 18.0765 13.659 18.615 15.969C15.5475 15.8145 12.825 14.3445 11.004 12.111C10.0365 13.77 10.503 15.942 12.147 17.0415C11.5425 17.022 10.974 16.8555 10.476 16.5795C10.4355 18.2895 11.6625 19.89 13.4385 20.247C12.9195 20.388 12.3495 20.421 11.7705 20.31C12.24 21.777 13.6065 22.8435 15.2205 22.8735C13.665 24.0915 11.7105 24.636 9.75 24.405C11.385 25.4535 13.3245 26.064 15.4095 26.064C22.2675 26.064 26.1405 20.2725 25.9065 15.078C26.6295 14.559 27.255 13.908 27.75 13.167Z"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="break break-6 col-xs-12"></div>
        <div class="row">
          <div class="col-sm-3">
            <img class="insta-img shadow" src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" width="100%" class="insta-img">
          </div>
          <div class="col-sm-3">
            <img class="insta-img shadow" src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" width="100%" class="insta-img">
          </div>
          <div class="col-sm-3">
            <img class="insta-img shadow" src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" width="100%" class="insta-img">
          </div>
          <div class="col-sm-3">
            <img class="insta-img shadow" src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" width="100%" class="insta-img">
          </div>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
