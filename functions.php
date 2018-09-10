<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function awesome_script_enqueue() {
	//css
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
  wp_enqueue_style('default', get_template_directory_uri() . '/css/default.css', array(), '1.0.0', 'all');
  wp_enqueue_style('navbar', get_template_directory_uri() . '/css/navbar.css', array(), '1.0.0', 'all');
  wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0.0', 'all');
  wp_enqueue_style('carousel', get_template_directory_uri() . '/css/carousel.css', array(), '1.0.0', 'all');
  wp_enqueue_style('ethos', get_template_directory_uri() . '/css/ethos.css', array(), '1.0.0', 'all');
  wp_enqueue_style('socials', get_template_directory_uri() . '/css/socials.css', array(), '1.0.0', 'all');

  //js
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
    wp_enqueue_script('sidenav', get_template_directory_uri() . '/js/sidenav.js', array( 'jquery' ), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
	==========================================
	 create store post type
	==========================================
*/

function create_post_type() {
  register_post_type( 'smbg_store',
    array(
      'labels' => array(
        'name' => __( 'Store' ),
        'singular_name' => __( 'Store' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );

/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {
	add_theme_support('menus');
  register_nav_menu('Primary', 'Content Header Navigation');
	register_nav_menu('FooterOne', 'Footer Nav One');
	register_nav_menu('FooterTwo', 'Footer Nav Two');
	register_nav_menu('FooterThree', 'Footer Nav Three');
}
add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Activate widgets
	==========================================
*/
function wpb_widgets_init() {

	register_sidebar( array(
		'name'          => 'Custom Header Widget Area',
		'id'            => 'custom-header-widget',
		'before_widget' => '<div class="chw-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="chw-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );


/*
	==========================================
	 Theme support function
	==========================================
*/

/*logo this is the custom logo that you can edit in the wordpress backend*/
/*the atttributes are customizable and self explanitory*/
function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 75,
		'width'       => 75,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

?>
