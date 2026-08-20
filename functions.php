<?php
/**
 * Theme setup and assets.
 *
 * @package Jay_Builders
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function jay_builders_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 104,
			'width'       => 216,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'jay-builders' ),
		)
	);
}
add_action( 'after_setup_theme', 'jay_builders_setup' );

function jay_builders_assets() {
	$theme = wp_get_theme();

	wp_enqueue_style(
		'jay-builders-fonts',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'jay-builders-style', get_stylesheet_uri(), array( 'jay-builders-fonts' ), $theme->get( 'Version' ) );
	wp_enqueue_script(
		'jay-builders-site',
		get_template_directory_uri() . '/assets/js/site.js',
		array(),
		$theme->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'jay_builders_assets' );

function jay_builders_menu_fallback() {
	$items = array(
		'home'     => esc_html__( 'Home', 'jay-builders' ),
		'our-work' => esc_html__( 'Our Work', 'jay-builders' ),
		'services' => esc_html__( 'Services', 'jay-builders' ),
		'reviews'  => esc_html__( 'Reviews', 'jay-builders' ),
		'about'    => esc_html__( 'About', 'jay-builders' ),
		'contact'  => esc_html__( 'Contact', 'jay-builders' ),
	);

	echo '<ul class="site-nav__links">';
	foreach ( $items as $anchor => $label ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( home_url( '/#' . $anchor ) ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}
