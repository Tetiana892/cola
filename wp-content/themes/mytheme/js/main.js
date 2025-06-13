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

	// Показ хмарки
	setTimeout(function () {
		document.querySelector('.img-cloud-wrapper')?.classList.add('visible');
	}, 3000);

	// Подарунки
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

	// Зірки
	document.querySelectorAll('.stars-bg .star').forEach(star => {
		let size = (2 + Math.random() * 6) * 1.5;
	
		star.style.backgroundColor = 'yellow';
		star.classList.add('star-yellow');
	
		star.style.width = `${size}px`;
		star.style.height = `${size}px`;
		star.style.top = `${Math.random() * 100}%`;
		star.style.left = `${Math.random() * 100}%`;
		star.style.animationDelay = `${Math.random() * 5}s`;
	});

});

