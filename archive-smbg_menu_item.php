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

get_header();


?>

<script>

// function showHint(str) {
//     if (str.length == 0) {
//         document.getElementById("txtHint").innerHTML = "";
//         return;
//     } else {
//         var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("txtHint").innerHTML = this.responseText;
//             }
//         };
//         xmlhttp.open("GET", "gethint.php?q=" + str, true);
//         xmlhttp.send();
//     }
// }
</script>

<div class="wrap">

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

      <div class="btn-group" role="group" aria-label="Basic example">
				<a href="/?cat=3">Drinks</a>
				<a href="/?cat=4">Mo's</a>
				<a href="/?cat=5">Breakfast</a>
        <!-- <button type="button" class="btn btn-secondary" id="menu-drinks" value="drinks">Drinks</button>
        <button type="button" class="btn btn-secondary" id="menu-mo" value="mo" onclick="MenuToggle()">Mo's</button>
        <button type="button" class="btn btn-secondary" id="menu-breakfast" value="breakfast" onclick="MenuToggle()">Breakfast</button> -->
      </div>

			<!-- <p><b>Start typing a name in the input field below:</b></p>
			<form>
			First name: <input type="text" onkeyup="showHint(this.value)">
			</form>
			<p>Suggestions: <span id="txtHint"></span></p> -->

      <?php
        function runMyFunction() {
          echo 'I just ran a php function';
        }

        if (isset($_GET['hello'])) {
          runMyFunction();
        }
      ?>

      Hello there!
      <a href='&hello=true'>Run PHP Function</a>

		<?php
    $current_category = single_cat_title("", false);
    if($current_category){
      $loop = new WP_Query( array( 'post_type' => 'smbg_menu_item', 'category_name' => $current_category) );
    }else{
      $loop = new WP_Query( array( 'post_type' => 'smbg_menu_item') );
    }

		if ( $loop->have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="pindex">

          <?php get_template_part( 'template-parts/menu_item', 'none' );?>
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
