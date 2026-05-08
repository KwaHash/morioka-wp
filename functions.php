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

/**
 * Register Column custom post type and taxonomy.
 */
function morioka_wp_register_column_content() {
	$labels = array(
		'name'               => __( 'コラム', 'morioka-wp' ),
		'singular_name'      => __( 'コラム', 'morioka-wp' ),
		'menu_name'          => __( 'コラム', 'morioka-wp' ),
		'name_admin_bar'     => __( 'コラム', 'morioka-wp' ),
		'add_new'            => __( '新規追加', 'morioka-wp' ),
		'add_new_item'       => __( '新規コラムを追加', 'morioka-wp' ),
		'new_item'           => __( '新規コラム', 'morioka-wp' ),
		'edit_item'          => __( 'コラムを編集', 'morioka-wp' ),
		'view_item'          => __( 'コラムを表示', 'morioka-wp' ),
		'all_items'          => __( 'コラム一覧', 'morioka-wp' ),
		'search_items'       => __( 'コラムを検索', 'morioka-wp' ),
		'not_found'          => __( 'コラムが見つかりませんでした。', 'morioka-wp' ),
		'not_found_in_trash' => __( 'ゴミ箱にコラムはありません。', 'morioka-wp' ),
	);

	register_post_type(
		'column',
		array(
			'labels'             => $labels,
			'public'             => true,
			'has_archive'        => true,
			'rewrite'            => array( 'slug' => 'column', 'with_front' => false ),
			'menu_position'      => 20,
			'menu_icon'          => 'dashicons-media-document',
			'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			'show_in_rest'       => true,
			'hierarchical'       => false,
			'publicly_queryable' => true,
		)
	);

	$tax_labels = array(
		'name'              => __( 'コラムカテゴリ', 'morioka-wp' ),
		'singular_name'     => __( 'コラムカテゴリ', 'morioka-wp' ),
		'search_items'      => __( 'コラムカテゴリを検索', 'morioka-wp' ),
		'all_items'         => __( 'コラムカテゴリ一覧', 'morioka-wp' ),
		'parent_item'       => __( '親コラムカテゴリ', 'morioka-wp' ),
		'parent_item_colon' => __( '親コラムカテゴリ:', 'morioka-wp' ),
		'edit_item'         => __( 'コラムカテゴリを編集', 'morioka-wp' ),
		'update_item'       => __( 'コラムカテゴリを更新', 'morioka-wp' ),
		'add_new_item'      => __( '新規コラムカテゴリを追加', 'morioka-wp' ),
		'new_item_name'     => __( '新規コラムカテゴリ名', 'morioka-wp' ),
		'menu_name'         => __( 'コラムカテゴリ', 'morioka-wp' ),
	);

	register_taxonomy(
		'column_category',
		array( 'column' ),
		array(
			'labels'            => $tax_labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rewrite'           => array( 'slug' => 'column-category', 'with_front' => false ),
		)
	);
}
add_action( 'init', 'morioka_wp_register_column_content' );

/**
 * Flush rewrite rules on theme switch (for /column/ URLs).
 */
function morioka_wp_flush_rewrite_rules_on_switch() {
	morioka_wp_register_column_content();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'morioka_wp_flush_rewrite_rules_on_switch' );
