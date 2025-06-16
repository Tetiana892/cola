document.addEventListener("DOMContentLoaded", function () {
	document.querySelectorAll(".custom-select").forEach((select) => {
		const trigger = select.querySelector(".custom-select-trigger");
		const options = select.querySelectorAll(".custom-option");
		const hiddenInput = select.parentElement.querySelector('input[type="hidden"]');

		select.addEventListener("click", () => {
			select.classList.toggle("open");
		});

		options.forEach((option) => {
			option.addEventListener("click", () => {
				const value = option.dataset.value;
				trigger.textContent = option.textContent;
				if (hiddenInput) hiddenInput.value = value;

				options.forEach((opt) => opt.classList.remove("selected"));
				option.classList.add("selected");

				select.classList.remove("open");

				// Додаємо клас selected до .custom-select після вибору
				select.classList.add("selected");
			});
		});
	});

	document.addEventListener("click", (e) => {
		document.querySelectorAll(".custom-select.open").forEach((select) => {
			if (!select.contains(e.target)) {
				select.classList.remove("open");
			}
		});
	});
});

