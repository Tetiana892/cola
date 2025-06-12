<?php get_header(); ?>

<section class="hero">
	<div class="hero-content">
		<h1 class="hero-title">Main Site Title</h1>
		<h2 class="hero-info">Lorem ipsum descripsum</h2>
		<button class="hero-btn">Call to action</button>
		<div class="hero-images">
			<img src="<?php echo get_template_directory_uri(); ?>/images/snow.png" alt="snow" class="img-snow">
			<img src="<?php echo get_template_directory_uri(); ?>/images/Cloud.png" alt="cloud" class="img-cloud">
			<img src="<?php echo get_template_directory_uri(); ?>/images/dedcoca.png" alt="dedcola" class="img-dedcola">
			<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="arrow" class="img-arrow">
		</div>
	</div>
</section>

<?php get_footer(); ?>