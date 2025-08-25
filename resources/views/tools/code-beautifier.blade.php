<div class="fd-calculator-container">
	<div class="calculator-header">
		<div class="header-content">
			<div class="header-icon">
				<i class="fa-solid fa-code"></i>
			</div>
			<div class="header-text">
				<h1 class="calculator-title">Code Beautifier</h1>
				<p class="calculator-subtitle">Format HTML, JavaScript, and CSS for better readability.</p>
			</div>
		</div>
	</div>

	<div class="calculator-main">
		<div class="row">
			<div class="col-lg-12 mb-4">
				<div class="calculator-card">
					<div class="card-header">
						<h3><i class="fa-solid fa-wand-magic-sparkles"></i> Code Beautifier</h3>
						<p>Paste your code, choose the type and indentation level, then beautify with one click.</p>
					</div>
					<div class="card-body">
						<div class="row g-3">
							<div class="col-lg-6">
								<label for="cb-language" class="form-label">Language</label>
								<select id="cb-language" class="form-control">
									<option value="javascript">JavaScript</option>
									<option value="css">CSS</option>
									<option value="html">HTML</option>
								</select>
							</div>
							<div class="col-lg-6">
								<label for="cb-indent" class="form-label">Indentation level</label>
								<select id="cb-indent" class="form-control">
									<option value="2">2 spaces</option>
									<option value="4">4 spaces</option>
									<option value="8">8 spaces</option>
								</select>
							</div>
							<div class="col-lg-12">
								<label for="cb-input" class="form-label">Your Code</label>
								<textarea id="cb-input" class="form-control" rows="10" placeholder="Paste HTML, JavaScript, or CSS here..."></textarea>
							</div>
							<div class="col-lg-12">
								<div class="calculate-section">
									<button id="cb-clear" class="invoice-defaul-btn"><i class="fas fa-trash-alt"></i> Clear</button>
									<button id="cb-beautify" class="invoice-action-btn"><i class="fas fa-magic"></i> Beautify</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="info-card">
					<div class="info-header">
						<h4><i class="fas fa-code"></i> Output</h4>
					</div>
					<div class="result-content">
						<textarea id="cb-output" class="form-control" rows="12" placeholder="Your formatted or minified code will appear here..."></textarea>
						<div class="calculate-section" style="justify-content: flex-end;">
							<button id="cb-copy-output" class="invoice-action-btn"><i class="fas fa-copy"></i> Copy</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="info-section">
		<div class="col-lg-12">
			<div class="info-content-card">
				<div class="content-header">
					<h3><i class="fas fa-info-circle"></i> About Code Beautifier</h3>
				</div>
				<div class="content-body">					
					<p>Format messy code for readability. Supports HTML, JavaScript, and CSS. Everything runs in your browser.</p>
					<p>A code beautifier, also known as a formatter, automatically restructures your source code-like HTML, CSS, JavaScript-into a clean, consistent, and readable format. It standardizes indentation, spacing, line breaks, and alignment, helping your code appear neat and organized. These tools save developers time by automating formatting tasks, minimizing manual adjustments.</p>
					<div class="row">
						<div class="col-lg-6">
							<div class="content-block">
								<h4>👉 Key Features</h4>
								<ul class="feature-list">
									<li><b>Language support</b> HTML, JavaScript, CSS</li>
									<li><b>Indentation</b> Choose 2, 4, or 8 spaces</li>
									<li><b>One-click</b> – Paste code, select options, Beautify</li>
									<li><b>Local</b> – Runs in-browser - no uploads.</li>
									<li><b>Copy-ready</b> – Quickly copy formatted output</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="content-block">
								<h4><i class="fas fa-lightbulb"></i> Benefits</h4>
								<ul class="feature-list">
									<li><b>Easier Collaboration</b> – When code follows a consistent style, teamwork becomes smoother-there's less confusion about formatting, and code reviews become more efficient.</li>
									<li><b>Faster Bug Detection</b> – Well-formatted code makes it easier to spot syntax errors, missing braces, or improperly nested elements.</li>
									<li><b>Simplified Refactoring</b> – Clean, structured code is more straightforward to modify, upgrade, or expand over time.</li>
									<li><b>Automated Formatting</b> – Many beautifiers integrate with editors or IDEs to format code automatically on save, eliminating manual indentation hassles.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



