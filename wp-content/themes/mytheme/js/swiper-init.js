document.addEventListener("DOMContentLoaded", function () {
	if (window.innerWidth >= 768) {
	  const swiper = new Swiper('.swiper-container', {
		direction: 'vertical',
		slidesPerView: 1,
		mousewheel: true, 
		keyboard: {
		  enabled: true,
		  onlyInViewport: true,
		},
		speed: 600,
		// можно добавить пагинацию или навигацию по стрелкам
	  });
	} else {
	  // Мобильные - обычный скролл, Swiper не инициализируется
	}
  });