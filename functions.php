<?php

/**
 * Theme: Mini
 * Author: Gabriel Araujo
 * Author URL: https://ogabrielaraujo.com.br
 */

// Sets content width.
if (!isset($content_width)) {
	$content_width = 1200;
}

// Theme Support
function theme_support_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('custom-logo');
	add_theme_support('automatic-feed-links');
	add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'theme_support_setup');

// Loads style.css
function theme_stylesheet() {
	wp_enqueue_style('style-mini', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_stylesheet');