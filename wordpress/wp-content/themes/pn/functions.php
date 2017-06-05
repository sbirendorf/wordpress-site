<?php
/**
 * ProspectNow Functions
 *
 * @link http://www.prospectnow.com
 *
 * @package prospectnow
 */
function prospectnow_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	//Wordpress generated title tag
	add_theme_support('title-tag');

	//Enabling Post Thumbnails
	add_theme_support('post-thumbnails');

	add_image_size('home-options', 450, 205, TRUE);
	add_image_size('product-mobile-hero', 600, 999999, FALSE);
	add_image_size('demo-callout-image', 485, 255, TRUE);

	// Register main navigation
	register_nav_menus(array(
		'top' => __('Main Menu', 'prospectnow')
	));

	// Add HTML5 support
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	));

}
add_action( 'after_setup_theme', 'prospectnow_setup' );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prospectnow_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'callyssee' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add widgets here.', 'prospectnow' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'prospectnow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function prospectnow_scripts() {
	// Fonts Stylesheet
	//wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i,900,900i');

	// Angular Material Stylesheet
	wp_enqueue_style('angular-material-css', 'https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.3/angular-material.min.css');

	//Font Awesome Icons
	wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

	// Theme stylesheet.
	wp_enqueue_style( 'prospectnow-theme-style', get_stylesheet_uri() );

	// Prospectnow Stylesheet
	wp_enqueue_style('prospectnow-custom_style', get_template_directory_uri().'/_assets/css/main.css');

	// Prospectnow Stylesheet
	//wp_enqueue_style('prospectnow-custom_style', '/_assets/css/bootstrap.min.css');

	// Load scripts

	wp_enqueue_script('prospectnow-chartjs', get_template_directory_uri().'/_assets/js/Chart.min.js', array('jquery'), '1.0.0', 1);

	wp_enqueue_script('angular', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular.min.js', array(), '1.6.2', 1);
	wp_enqueue_script('angular-animate', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular-animate.min.js', array('angular'), '1.6.2', 1);
	wp_enqueue_script('angular-messages', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular-messages.min.js', array('angular'), '1.6.2', 1);
	wp_enqueue_script('angular-aria', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.2/angular-aria.min.js', array('angular'), '1.6.2', 1);
	wp_enqueue_script('angular-material', 'https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.3/angular-material.min.js', array('angular','angular-animate','angular-aria'), '1.1.3', 1);
	wp_enqueue_script('prospectnow-angular', get_template_directory_uri().'/_assets/js/angular.js', array('angular-material'), '1.0.0', 1);

}
add_action( 'wp_enqueue_scripts', 'prospectnow_scripts' );

get_template_part('inc/js-detection');

get_template_part('inc/modify-login');

/**
 * Admin Enqueues
 */

function prospectnow_admin_scripts() {
	wp_enqueue_style( 'prospectnow-admin-style', get_template_directory_uri() . '/admin.css?v='.time(), array(), false, 'screen' );
}
add_action('admin_enqueue_scripts', 'prospectnow_admin_scripts');




//add argument to the url for the county page 
function add_query_vars_filter( $vars ){
  $vars[0] = "state";
  $vars[1] = "county";
  $vars[2] = "id";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );

function custom_rewrite_rule() {
    add_rewrite_rule('^county-territory/([^/]*)/([^/]*)/?',
    	'index.php?page_id=1773&state=$matches[1]&county=$matches[2]&id=$matches[3]','top');

     add_rewrite_rule('^property_info/([^/]*)/([^/]*)/?',
    	'index.php?page_id=1973&state=$matches[1]&county=$matches[2]&id=$matches[3]','top');
 }
 add_action('init', 'custom_rewrite_rule', 10, 0);

function custom1_rewrite_rule() {

     add_rewrite_rule('^property_info/([^/]*)/([^/]*)/?',
    	'index.php?page_id=1973&state=$matches[1]&county=$matches[2]&id=$matches[3]','top');
 }
 add_action('init', 'custom1_rewrite_rule', 10, 0);