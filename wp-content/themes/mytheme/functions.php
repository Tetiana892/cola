<?php

function mytheme_enqueue_styles()
{
	wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
function register_my_menus()
{
	register_nav_menus(array(
		'main_menu' => 'Main Menu',
		'burger_menu' => 'Burger Menu'
	));
}
add_action('after_setup_theme', 'register_my_menus');

function theme_scripts()
{
	wp_enqueue_script('theme-main-js', get_template_directory_uri() . '/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
function mytheme_enqueue_header_styles()
{
	wp_enqueue_style('mytheme-header', get_template_directory_uri() . '/css/header.css', [], '1.0');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_header_styles');
