<div class="container" id="menu-item">
  <div class="row">
    <div class="col-xs-12 col-sm-4">
      <?php if ( has_post_thumbnail() ) { ?>
          <?php get_template_part( 'template-parts/menu_thumbnail', 'none' );?>
      <?php } ?>
    </div>
    <div class="col-xs-12 col-sm-8">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content();  ?></p>
      <?php if (get_field('menu_price')): ?>
        <p><?php the_field('menu_price'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>
