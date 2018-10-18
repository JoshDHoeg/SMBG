<?php
/**
 * The template for displaying archive stores
 *
 * Template Name: Menu Archive
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

  <?php
  if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php $loop = new WP_Query( array( 'post_type' => 'smbg_menu_item') );
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
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
