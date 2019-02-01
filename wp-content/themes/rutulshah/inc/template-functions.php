<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package rutulshah
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rutulshah_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'rutulshah_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rutulshah_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'rutulshah_pingback_header' );

function custom_css_include() { ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/noscript.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
<?php }

function custom_js_include() { ?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.scrolly.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.scrollex.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/browser.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/breakpoints.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/util.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
<?php }


function custom_excerpt_length( $length ) {
return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action( 'widgets_init', 'rs_widgets_init' );
function rs_widgets_init() {
    register_sidebar( array(
		'name' => __( 'Custom Sidebar' ),
		'id' => 'sidebar-custom',
		'description' => __( 'Widgets in this area will be shown on all 3 columns page in left sidebar.' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
}
