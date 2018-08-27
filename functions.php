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
  wp_enqueue_style('carousel', get_template_directory_uri() . '/css/carousel.css', array(), '1.0.0', 'all');
  wp_enqueue_style('ethos', get_template_directory_uri() . '/css/ethos.css', array(), '1.0.0', 'all');

  //js
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

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

?>
