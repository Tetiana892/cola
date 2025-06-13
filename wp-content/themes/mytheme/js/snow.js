
	document.addEventListener('DOMContentLoaded', () => {
		const snowWrapper = document.querySelector('.snow-wrapper');
		const snowflakeCount = 80;

		for (let i = 0; i < snowflakeCount; i++) {
			const flake = document.createElement('div');
			flake.classList.add('snowflake');

			// Случайный размер от 2 до 7px
			const size = Math.random() * 5 + 2;
			flake.style.width = `${size}px`;
			flake.style.height = `${size}px`;

			// Случайное положение по ширине
			flake.style.left = `${Math.random() * 100}vw`;

			// Случайная задержка и продолжительность
			flake.style.animationDuration = `${Math.random() * 5 + 5}s`;
			flake.style.animationDelay = `${Math.random() * 10}s`;

			snowWrapper.appendChild(flake);
		}
	});
