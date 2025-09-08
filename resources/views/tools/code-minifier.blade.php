<div class="fd-calculator-container">
	<div class="calculator-header">
		<div class="header-content">
			<div class="header-icon">
				<i class="fa-solid fa-code"></i>
			</div>
			<div class="header-text">
				<h1 class="calculator-title">Code Minifiers</h1>
				<p class="calculator-subtitle">Minify JavaScript, CSS, and HTML instantly.</p>
			</div>
		</div>
	</div>

	<div class="calculator-main">
		<div class="row">
			<div class="col-lg-12">
				@include('suggestionlist', ['slidertype' => 'H'])
			</div>
			<div class="col-lg-12 mb-2">
				<div class="calculator-card">
					<div class="card-header">
						<h3><i class="fa-solid fa-wand-magic-sparkles"></i> Code Minifier</h3>
						<p>Paste your code, choose the type, then minify with one click.</p>
					</div>
					<div class="card-body">
						<div class="row g-3">
							<div class="col-lg-12">
								<label for="cm-language" class="form-label">Language</label>
								<select id="cm-language" class="form-control">
									<option value="html">HTML</option>
									<option value="javascript">JavaScript</option>
									<option value="css">CSS</option>									
								</select>
							</div>
							<div class="col-lg-12">
								<label for="cm-input" class="form-label">Your Code</label>
								<textarea id="cm-input" class="form-control" rows="10" placeholder="Paste JavaScript, CSS, or HTML here..."></textarea>
							</div>
							<div class="col-lg-12">
								<div class="calculate-section">
									<button id="cm-clear" class="invoice-defaul-btn"><i class="fas fa-trash-alt"></i> Clear</button>
									<button id="cm-minify" class="invoice-action-btn"><i class="fas fa-compress-alt"></i> Minify</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 mt-2">
				<div class="info-card">
					<div class="info-header">
						<h4><i class="fas fa-code"></i> Output</h4>
					</div>
					<div class="result-content">
						<textarea id="cm-output" class="form-control" rows="12" placeholder="Your minified code will appear here..."></textarea>
						<div class="calculate-section" style="justify-content: flex-end;">
							<button id="cm-copy-output" class="invoice-action-btn"><i class="fas fa-copy"></i> Copy</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="info-section">
		<div class="info-content-card">
			<div class="content-header">
				<h3><i class="fas fa-info-circle"></i> About Code Minifiers</h3>
			</div>
			<div class="content-body">
				<p>Use this tool to compress JavaScript, CSS, and HTML for faster websites. Everything runs in your browser.</p>
				<p>Using a code minifier helps compress your HTML, CSS, JavaScript, or other front-end code by removing unnecessary spaces, line breaks, comments, and other extraneous characters. This reduction in file size directly contributes to faster page load times-an important ranking factor for search engines like Google. Every millisecond saved in load time can improve user engagement, lower bounce rates, and boost overall search visibility.</p>
				<p>Beyond speed, optimized code can improve crawl efficiency. Search engine bots can download and process minified files quicker, meaning they can index more of your pages in less time. This improved crawl budget usage can be especially beneficial for larger websites, ensuring that updates and new content are discovered and indexed sooner.</p>
				<div class="row">
					<div class="col-lg-6">
						<div class="content-block">
							<h4>👉 Key Features</h4>
							<ul class="feature-list">
								<li><b>Multi-language support</b> Handles HTML, CSS, and JavaScript—perfect for front-end workflows.</li>
								<li><b>Whitespace & comment removal</b> Strips unnecessary characters to shrink file size while preserving functionality</li>
								<li><b>Variable & syntax optimization</b> – May shorten variable names or syntax to compact the code further</li>
								<li><b>Local, offline processing</b> – Runs entirely in the browser—your code never leaves your system (no uploads).</li>

								<li><b>One-click operation</b> – Typically a simple “Paste → Minify → Copy” workflow for fast usage.</li>
								<li><b>Live preview or instant result</b> – Shows results immediately after processing, often with size reduction feedback.</li>
								
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="content-block">
							<h4><i class="fas fa-lightbulb"></i> Benefits</h4>
							<ul class="feature-list">
								<li><b>Smaller payloads</b> – Smaller code files load more quickly, improving your site's performance and user satisfaction-factors that positively influence SEO.</li>
								<li><b>Faster page loads</b> – Minified files use less data, which is great for both your server hosting costs and visitors with slower connections or data caps.</li>
								<li><b>Lower bandwidth</b> – Save data for users and servers.</li>
								<li><b>Efficient workflow</b> – Search engine crawlers process minified files faster, making your site easier to index and potentially elevating your search ranking.</li>
								<li><b>Better Mobile Experience</b> On mobile devices, where connection speeds can vary, optimized assets ensure faster loading, enhancing usability and reducing bounce rates. Google heavily weighs mobile performance in rankings.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


