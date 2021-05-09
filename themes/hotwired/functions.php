<?php

namespace hotwired;

function theme_setup(){
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'menus' );
	register_nav_menus( array(
		'menu' => __( 'Menu', 'hotwired' ),
	) );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [ 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ] );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_setup' );

function scripts_styles() {
	wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'hotwired', get_stylesheet_uri(), [ 'normalize', 'main' ] );

	wp_enqueue_script( 'hotwired', get_stylesheet_directory_uri() . '/js/scripts.js', [], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts_styles' );

function headcleanup() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
}
add_action( 'init', __NAMESPACE__ . '\headcleanup' );

function remove_site_icon($wp_customize) {
	$wp_customize->remove_control('site_icon');
}
add_action( 'customize_register', __NAMESPACE__ . '\remove_site_icon', 20, 1 );