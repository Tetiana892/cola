<footer>
	<p>© <?php echo date('Y'); ?> Мой сайт на WordPress</p>
</footer>

<?php wp_footer(); ?>

<script>
	const burgerBtn = document.getElementById('burger');
	const burgerMenu = document.getElementById('burgerMenu');

	burgerBtn.addEventListener('click', function() {
		this.classList.toggle('active');
		burgerMenu.classList.toggle('active');
	});
</script>

</body>

</html>