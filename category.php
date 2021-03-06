<?php get_header(); ?> <!--pull the header template in-->


  <div class="category-header">
    <div class="item active">
      <div class="item-title" style="background: url(<?php echo get_template_directory_uri(); ?>/images/background.png) rgb(22, 78, 126) repeat">
        <h2 class="title"><?php single_cat_title(); ?></h2>
        <div class="buttons">
          <a class="btn" href="/?cat=3"><img width="64px;" src="<?php echo get_template_directory_uri(); ?>/images/icons/soup.png" ></a>
          <a class="btn" href="/?cat=5"><img width="64px;" src="<?php echo get_template_directory_uri(); ?>/images/icons/egg.png" ></a>
          <a class="btn" href="/?cat=4"><img width="64px;" src="<?php echo get_template_directory_uri(); ?>/images/icons/mo.png" ></a>
          <a class="btn" href="/?cat=6"><img width="64px;" src="<?php echo get_template_directory_uri(); ?>/images/icons/lunch.png" ></a>
          <a class="btn" href="/?cat=7"><img width="64px;" src="<?php echo get_template_directory_uri(); ?>/images/icons/salad.png" ></a>
        </div>
      </div>
    </div>
  </div>

<!--this is the main feed sectino this is how posts will show up on the main blog page-->
		<div class="latest-posts container category-container" id="primary">
			<!--We wanted the content to show up in two seperate columns so column a takes odd umbered post {1,3,5....}-->
			<div class="col-sm-8 col-sm-offset-2 latest-posts-column" id="content-a">
        <?php
        $current_category = single_cat_title("", false);
        $loop = new WP_Query( array( 'post_type' => 'smbg_menu_item', 'category_name' => $current_category) );

          if ( $loop->have_posts() ) {
          	while ( $loop->have_posts() ) {
          		$loop->the_post();
          		//
          		// Post Content here
              get_template_part( 'template-parts/menu_item', 'none' );
          		//
          	} // end while
          } // end if
          ?>
			</div>
	</div>

<?php get_footer(); ?> <!--pull in the footer template-->
