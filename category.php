<?php get_header(); ?> <!--pull the header template in-->

<div class="category_header container">
  <h2><?php single_cat_title(); ?> category</h2>
</div>

<!--this is the main feed sectino this is how posts will show up on the main blog page-->
		<div class="latest-posts container" id="primary">
			<!--We wanted the content to show up in two seperate columns so column a takes odd umbered post {1,3,5....}-->
			<div class="col-sm-6 latest-posts-column" id="content-a">
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
