<section class="form-section">
	<div class="wrapper-form">
		<h2 class="form-title">Write us <br> for real presents</h2>
		<form class="gift-form">
			<div class="wrapper-input">
				<input class="form-input" type="text" name="name" placeholder="Name" required>
				<input class="form-input" type="tel" name="phone" placeholder="Phone" pattern="[0-9]+" title="Digits only" required>
			</div>

			<div class="custom-select-wrapper">
				<div class="custom-select" tabindex="0">
					<span class="custom-select-trigger">Gender</span>
					<ul class="custom-options">
						<li class="custom-option" data-value="boy">Boy</li>
						<li class="custom-option" data-value="girl">Girl</li>
					</ul>
					<input type="hidden" name="gender" value="">
				</div>
				<input class="form-input" type="email" name="email" placeholder="Email" required>
			</div>

			<textarea class="form-textarea" name="wish" placeholder="Your wish" required></textarea>

			<label class="form-checkbox">
				<input type="checkbox" name="coca_cola" value="yes" class="checkbox-input">
				<span class="checkbox-custom"></span>
				<span class="checkbox-label">Want Coca-Cola with present?</span>
			</label>
		</form>
	</div>
</section>