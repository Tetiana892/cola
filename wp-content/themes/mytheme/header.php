<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right');
			bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="header-inner">
			<div class="site-logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>
			<div class="menu-inner">
				<nav class="main-nav desktop-only">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'main_menu',
						'container' => false,
						'menu_class' => 'menu',
					));
					?>
				</nav>

				<button class="burger" id="burger" aria-label="Toggle menu">
					<img src="<?php echo get_template_directory_uri(); ?>/images/burger.png" alt="Menu" class="icon-burger">
					<img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="Close" class="icon-close">
				</button>
			</div>
		</div>
		<nav class="burger-menu" id="burgerMenu">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'burger_menu',
				'container' => false,
				'menu_class' => 'menu',
			));
			?>
		</nav>
	</header>