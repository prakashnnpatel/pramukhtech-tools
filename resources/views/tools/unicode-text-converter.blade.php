<div class="fd-calculator-container">
	<div class="calculator-header">
		<div class="header-content">
			<div class="header-icon">
				<i class="fas fa-language"></i>
			</div>
			<div class="header-text">
				<h1 class="calculator-title">Unicode Text Converter</h1>
				<p class="calculator-subtitle">Generate fancy Unicode styles (bold, italic, script, fraktur, double-struck, circled, squared, fullwidth and more).</p>
			</div>
		</div>
	</div>

	<div class="calculator-main">
		<div class="row">
			<div class="col-lg-12">
				@include('suggestionlist', ['slidertype' => 'H'])
			</div>
			<div class="col-lg-12 mb-4">
				<div class="calculator-card">
					<div class="card-header">
						<h3><i class="fas fa-sliders"></i> Convert Your Text</h3>
						<p>Type or paste your text and see multiple Unicode styles instantly. Click copy to use anywhere.</p>
					</div>
					<div class="card-body">
						<div class="row g-3">
							<div class="col-lg-12">
								<label for="utc-source" class="form-label">Your Text</label>
								<textarea id="utc-source" class="form-control" rows="4" placeholder="Unicode Text Converter 2025 !"></textarea>
							</div>
							<div class="col-lg-12">
								<div class="calculate-section">
									<button id="utc-clear" class="invoice-defaul-btn"><i class="fas fa-trash-alt"></i> Clear</button>
									<button id="utc-copy-all" class="invoice-action-btn"><i class="fas fa-copy"></i> Copy All</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="info-card">
					<div class="info-header">
						<h4><i class="fas fa-font"></i> Styled Results</h4>
					</div>
					<div class="result-content">
						<div id="utc-results" class="summary-grid"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="info-section">
		<div class="row">
			<div class="col-lg-12">
				<div class="info-content-card">
					<div class="content-header">
						<h3><i class="fas fa-info-circle"></i> About Unicode Text Converter</h3>
					</div>
					<div class="content-body">
						<p>Create stylish Unicode text compatible with most platforms like Facebook, WhatsApp, X, LinkedIn and more.</p>
						<strong>What is the purpose of this Unicode text conversion web app?</strong>
						<p>The web app is designed to transform regular text into Unicode characters, providing users a creative and visually appealing way to express themselves on various platforms. Whether you're crafting a social media post, designing a website, or adding a personal touch to your messages.</p>
						<strong>How does the Unicode text conversion work?</strong>
						<p>The app employs algorithms to map standard characters to their corresponding Unicode counterparts. These Unicode characters often have unique styles, making the converted text appear fancier and more distinctive.</p>
						<div class="row">							
							<div class="col-lg-6">
								<div class="content-block">									
									<h4>👉 Key Features</h4>
									<ul class="feature-list">
										<li><b>Wide Range of Characters</b> – Choose from an extensive collection of Unicode characters an symbols to personalize your text</li>
										<li><b>Easy-to-Use Interface</b> – This mobile friendly interface ensures a seamless and hassle-free text conversion experience, even for beginners.</li>
										<li><b>Instant Preview</b> – See the transformation in real-time with our instant preview feature, allowing you to fine-tune your fancy text before sharing it with the world.</li>
										<li><b>Copy and Paste Convenience</b> – Copy your converted text with a single click and paste it directly into your favorite platforms, saving you time and effort.</li>								
									</ul>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="content-block">
									<h4><i class="fas fa-lightbulb"></i> Benefits</h4>
									<ul class="feature-list">
										<li><b>Instant styles</b> – Preview dozens of fancy variants in real time.</li>
										<li><b>One‑click copy</b> – Grab individual lines or copy all results at once.</li>
										<li><b>Broad compatibility</b> – Works across social, chats, and documents.</li>
										<li><b>No upload needed</b> – All conversions run in your browser.</li>
										<li><b>Mobile friendly</b> – Optimized layout for any screen size.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

