<?php get_header(); ?>
<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<section class="hero">
				<div class="stars-bg">
					<?php for ($i = 0; $i < 80; $i++): ?>
						<div class="star"></div>
					<?php endfor; ?>
				</div>

				<div class="hero-content">
					<h1 class="hero-title">Main Site Title</h1>
					<h2 class="hero-info">Lorem ipsum descripsum</h2>
					<button class="hero-btn">Call to action</button>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/snow.png" alt="snow" class="img-snow">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dedcoca.png" alt="dedcola" class="img-dedcola">
				<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="arrow" class="img-arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/images/dedcola-mobile.png" alt="dedcola mobile" class="img-dedcola-mobile">

				<div class="img-cloud-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Cloud.png" alt="cloud" class="img-cloud">
					<p class="hero-say">How how how !!!<br>
						Like it?<br>
						Scroll down for more !</p>
				</div>
			</section>
		</div>

		<div class="swiper-slide">
			<?php get_template_part('template-parts/section', 'gift'); ?>
		</div>

		<div class="swiper-slide">
			<?php get_template_part('template-parts/section', 'form'); ?>
		</div>

	</div>

	<?php get_footer(); ?>