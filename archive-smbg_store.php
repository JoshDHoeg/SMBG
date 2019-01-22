<?php
/**
 * The template for displaying archive stores
 *
 * Template Name: Store Archive
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="locations-header">
	<div class="item active">
		<div class="item-title" style="background: url(<?php echo get_template_directory_uri(); ?>/images/topography.png) rgb(22, 78, 126); background-size: cover;">
			<h1 class="title">Find a Location</h1>
		</div>
	</div>
</div>

<div class="row locations-map" id="map-wrapper">
	<div class="col-md-12" >
		<div id="map" style="height: 550px;"></div>
	</div>

</div>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php $loop = new WP_Query( array( 'post_type' => 'store') );
		if ( $loop->have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="pindex">
          <?php if ( has_post_thumbnail() ) { ?>
              <div class="pimage">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              </div>
          <?php } ?>
          <div class="ptitle">
              <h2><?php echo get_the_title(); ?></h2>
          </div>
      </div>

			<?php endwhile;
		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
