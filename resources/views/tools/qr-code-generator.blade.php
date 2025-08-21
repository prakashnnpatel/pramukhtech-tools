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
                        <p>Enter content and adjust options to generate your QR code.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="qrText" class="form-label">Text or URL</label>
                                <textarea id="qrText" class="form-control" rows="4" placeholder="Enter text, URL, or any content...">https://pramukhtech.com</textarea>
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
                                <select id="qrECC" class="form-select">
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
                                <label for="qrLogoFile" class="form-label">Upload Logo (centered)</label>
                                <input type="file" class="form-control" id="qrLogoFile" accept="image/png,image/jpeg,image/webp">
                                <div class="form-text">PNG with transparent background recommended. Max 2 MB.</div>
                            </div>
                        </div>
                        <div class="calculate-section mt-3">
                            <button id="qrGenerate" class="invoice-action-btn">
                                <i class="fas fa-qrcode"></i> Generate
                            </button>
                            <button id="qrDownload" class="invoice-defaul-btn" disabled>
                                <i class="fas fa-download"></i> Download
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
                        <h4><i class="fas fa-info-circle"></i> About QR Code Generator</h4>
                    </div>
                    <div class="content-body">
                        <p>Create QR codes for links, text, contact info, and more. Customize size, colors, margins, and error correction levels. Download your QR code as PNG or SVG for use in documents, websites, or print materials.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

