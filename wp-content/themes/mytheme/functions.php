<?php

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
function mytheme_enqueue_all_styles()
{
	// Подключаем шрифт Risque из Google Fonts
	wp_enqueue_style('google-font-risque', 'https://fonts.googleapis.com/css2?family=Risque&display=swap', [], null);

	// Подключаем основной стиль
	wp_enqueue_style('mytheme-style', get_stylesheet_uri());

	// Подключаем стили для хедера
	wp_enqueue_style('mytheme-header', get_template_directory_uri() . '/css/header.css', [], '1.0');

	// Подключаем стили для front-page
	if (is_front_page()) {
		wp_enqueue_style('front-page-style', get_template_directory_uri() . '/css/hero.css', ['mytheme-style'], '1.0');
	}
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_all_styles');
