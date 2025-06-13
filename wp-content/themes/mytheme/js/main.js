// Бургер-меню
document.addEventListener("DOMContentLoaded", function () {
	const burgerBtn = document.getElementById('burger');
	const burgerMenu = document.getElementById('burgerMenu');

	if (burgerBtn && burgerMenu) {
		burgerBtn.addEventListener('click', function () {
			this.classList.toggle('active');
			burgerMenu.classList.toggle('active');
		});
	}

	// Показ облака
	setTimeout(function () {
		document.querySelector('.img-cloud-wrapper')?.classList.add('visible');
	}, 3000);

	// Подарки
	document.querySelectorAll('.gift-item').forEach(item => {
		item.addEventListener('click', () => {
			const title = item.getAttribute('data-title');
			const text = item.getAttribute('data-text');
			const img = item.getAttribute('data-img');

			const present = document.querySelector('.present');
			if (present) {
				present.querySelector('h2').textContent = title;
				present.querySelector('p').textContent = text;
				present.querySelector('img').src = img;
			}

			document.querySelectorAll('.gift-item').forEach(i => i.classList.remove('active'));
			item.classList.add('active');
		});
	});
});
