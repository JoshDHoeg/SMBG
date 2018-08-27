<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

</div><!-- .wrap -->

		<footer class="site-footer" >
      <div class="col-md-1 col-md-offset-1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="96px">
      </div>

      <div class="col-md-2">
        <p>
          © 2018 RightWay Brands, Inc
          DBA Smiling Moose Rocky Mountain Deli
          1800 Glenarm Place, Suite 101
          Denver, CO 80202
          info@smilingmoosedeli.com
        </p>
      </div>
      <div class="col-md-3" id="FooterOne">
        <?php
							wp_nav_menu(array(
								'theme_location' => 'FooterOne',
								'container' => false,
								'menu_class' => 'nav navbar-nav '
								)
							);
						?>
      </div>
      <div class="col-md-3" id="FooterTwo">
        <?php
							wp_nav_menu(array(
								'theme_location' => 'FooterTwo',
								'container' => false,
								'menu_class' => 'nav navbar-nav '
								)
							);
						?>
      </div>
      <div class="col-md-2" id="FooterThree">
        <?php
							wp_nav_menu(array(
								'theme_location' => 'FooterThree',
								'container' => false,
								'menu_class' => 'nav navbar-nav '
								)
							);
						?>
      </div>
		</footer><!-- .site-footer -->


<?php wp_footer(); ?>
</body>
</html>
