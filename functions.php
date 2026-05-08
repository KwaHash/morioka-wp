<?php
/**
 * Theme functions and definitions (pension-based assets)
 *
 * @package morioka-wp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Set up theme defaults and register menus.
 */
function morioka_wp_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'morioka-wp' ),
	) );
}
add_action( 'after_setup_theme', 'morioka_wp_setup' );

/**
 * Enqueue scripts and styles (pension assets).
 * Copy assets from D:\DEV\WP\pension\assets to this theme's assets folder.
 */
function morioka_wp_scripts() {
	$theme_uri = get_template_directory_uri();
	$version   = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'morioka-wp-style', get_stylesheet_uri(), array(), $version );
	wp_enqueue_style( 'morioka-wp-main', $theme_uri . '/assets/css/style.css', array( 'morioka-wp-style' ), $version );
	wp_enqueue_style( 'morioka-wp-wow', $theme_uri . '/assets/css/wow.css', array(), $version );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'morioka-wp-common', $theme_uri . '/assets/js/common.js', array( 'jquery' ), $version, true );
	wp_enqueue_script( 'morioka-wp-wow', $theme_uri . '/assets/js/wow.js', array(), $version, true );
	wp_add_inline_script( 'morioka-wp-wow', 'new WOW().init();', 'after' );
}
add_action( 'wp_enqueue_scripts', 'morioka_wp_scripts' );
