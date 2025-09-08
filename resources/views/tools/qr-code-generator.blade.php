<div class="fd-calculator-container">
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-qrcode"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">QR Code Generator</h1>
                <p class="calculator-subtitle">Create customized QR codes instantly. Download as PNG or SVG.</p>
            </div>
        </div>
    </div>

    <div class="calculator-main">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-sliders"></i> Settings</h3>
                        <p>Enter content and adjust options to generate your QR code instantly.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="qrText" class="form-label">Enter a URL, location, text, or any information to generate your QR code instantly</label>
                                <textarea id="qrText" class="form-control" rows="4" placeholder="URL, Location, Text, Business card, Wi-Fi network, or other information to generate your QR code instantly.">https://www.pramukhtech.com</textarea>
                            </div>
                            <div class="col-6">
                                <label for="qrSize" class="form-label">Size (px)</label>
                                <input type="number" class="form-control" id="qrSize" min="100" max="1000" value="300">
                            </div>
                            <div class="col-6">
                                <label for="qrMargin" class="form-label">Margin</label>
                                <input type="number" class="form-control" id="qrMargin" min="0" max="20" value="1">
                            </div>
                            <div class="col-6">
                                <label for="qrECC" class="form-label">Error Correction</label>
                                <select id="qrECC" class="form-select" required>
                                    <option value="L">L (Low)</option>
                                    <option value="M" selected>M (Medium)</option>
                                    <option value="Q">Q (Quartile)</option>
                                    <option value="H">H (High)</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="qrFormat" class="form-label">Format</label>
                                <select id="qrFormat" class="form-select">
                                    <option value="png" selected>PNG</option>
                                    <option value="svg">SVG</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="qrFg" class="form-label">Foreground</label>
                                <input type="color" id="qrFg" class="form-control form-control-color" value="#000000" title="Choose foreground color">
                            </div>
                            <div class="col-6">
                                <label for="qrBg" class="form-label">Background</label>
                                <input type="color" id="qrBg" class="form-control form-control-color" value="#ffffff" title="Choose background color">
                            </div>
                            <div class="col-12">
                                <label for="qrLogoFile" class="form-label">Upload Logo / Your Photo</label>
                                <input type="file" class="form-control" id="qrLogoFile" accept="image/png,image/jpeg,image/webp">
                                <small class="form-text">PNG with transparent background recommended. Max 2 MB.</small>
                                <small class="form-text">Your logo or image will be displayed at the center of the QR code, enhancing your branding and making it instantly recognizable.</small>
                            </div>
                        </div>
                        <div class="calculate-section mt-3">
                            <button id="qrGenerate" class="invoice-action-btn">
                                <i class="fas fa-qrcode"></i> Generate
                            </button>
                            <button id="qrClear" class="invoice-defaul-btn">
                                <i class="fas fa-trash-alt"></i> Clear
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-eye"></i> Preview</h3>
                        <p>Your generated QR code will appear here.</p>
                    </div>
                    <div class="card-body text-center">
                        <div id="qrPreview" style="min-height:320px; display:flex; align-items:center; justify-content:center; background:#fff; border-radius:12px;">
                            <span class="text-muted">No QR code yet. Click Generate.</span>
                        </div>
                        <div class="calculate-section">
                            <button id="qrDownload" class="invoice-action-btn" disabled>
                                <i class="fas fa-download"></i> Download
                            </button>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- Step-by-step guide -->
	<div class="row mt-3">
        <div class="col-lg-12">
            @include('suggestionlist', ['slidertype' => 'H'])
        </div>
		<div class="col-lg-12">
			<div class="info-card">
				<div class="info-header">
					<h4><i class="fas fa-book-open"></i> How to create QR Code </h4>
				</div>
				<div class="content-body">
					<div class="row">
						<div class="col-lg-12">
							<h4>👉 Step-by-step guide</h4>
							<ol style="line-height:30px;">
								<li><strong>Enter Content</strong> - Type or paste your URL, website URL, text, address, location or other data into the input box.</li>
								<li><strong>Customize Settings</strong> - Select size, margin, error correction level, and preferred format (PNG/SVG).</li>
								<li><strong>Choose Colors & Logo</strong> - Pick foreground/background colors and optionally upload your logo for a <strong>branded look</strong>.</li>
								<li><strong>Generate QR Code</strong> - Click the "Generate" button to instantly create your QR code.</li>
								<li><strong>Download & Share</strong> - Save the QR code to your device and use it on websites, flyers, posters, or product labels.</li>
							</ol>
						</div>
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
                        <h3><i class="fas fa-info-circle"></i> About QR Code Generator</h3>
                    </div>
                    <div class="content-body">
						<div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
									<h4><i class="fas fa-qrcode"></i> What is QR Code Generator?</h4>
									<p>The QR Code Generator is a versatile online tool that allows users to create QR codes quickly and effortlessly. Whether you need a code for a <strong>website URL, text, business card, Wi-Fi network, location, or other purposes</strong>, this tool simplifies the process by providing instant generation with just a few clicks. Users can customize the design, color, and format, making it suitable for both personal and professional use. The generated QR codes are high-quality and downloadable in PNG or SVG formats, ensuring seamless integration across digital and print media.</p>
								</div>
							</div>

							<div class="col-lg-12">
                                <div class="content-block">
									<p>Beyond basic generation, the QR Code Generator enhances convenience by offering intuitive features like bulk creation, size adjustment, and error correction to ensure scannability in any environment. It's ideal for <strong>marketers, businesses, educators, and individuals</strong> who want to share information efficiently and securely. With no technical expertise required, anyone can produce professional-looking QR codes in seconds, saving time while improving engagement and accessibility.</p>
								</div>
							</div>

							<div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Key Features & Benefits</h4>
                                    <ul class="feature-list">
										<li><strong>Instant QR Code Generation</strong> - Create QR codes in seconds without any technical skills.</li>
										<li><strong>Multiple QR Types</strong> - Generate codes for URLs, text, emails, phone numbers, Wi-Fi, location, business cards, and more.</li>
										<li><strong>Customizable Design</strong> - Adjust colors, shapes, and logos to match your branding or personal style.</li>
										<li><strong>High-Quality Downloads</strong> - Export QR codes in PNG or SVG formats for digital or print use.</li>
										<li><strong>Error Correction</strong> - Ensures QR codes remain scannable even if slightly damaged.</li>
										<li><strong>User-Friendly Interface</strong> - Simple and intuitive platform for beginners and professionals alike.</li>
										<li><strong>Cross-Platform Compatibility</strong> - Works seamlessly on desktops, tablets, and mobile devices.</li>
										<li><strong>Free & Accessible</strong> - No software installation required; use directly from any web browser.</li>
										<li><strong>Enhances Engagement</strong> - Quick sharing of information boosts marketing, networking, and user interaction.</li>
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

