<div class="fd-calculator-container">
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-barcode"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">Barcode Sticker Generator</h1>
                <p class="calculator-subtitle">Create multiple barcode stickers instantly. Generate up to 50 barcodes at once and download as PDF.</p>
            </div>
        </div>
    </div>

    <div class="calculator-main">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-sliders"></i> Barcode Settings</h3>
                        <p>Configure barcode type, size, and content for your stickers.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">                            
                            <div class="col-5">
                                <label for="sheetPreset" class="form-label">Sheet Preset</label>
                                <select id="sheetPreset" class="form-select">
                                    <option value="custom" selected>Custom</option>
                                    <option value="a4_3x8">A4 - 3 x 8 (Large Labels ~99x68mm)</option>
                                    <option value="a4_3x7">A4 - 3 x 7 (Medium Labels ~63.5x38.1mm)</option>
                                    <option value="a4_5x13">A4 - 5 x 13 (Small Labels ~38x21mm)</option>
                                </select>
                                <div class="form-text">Choose a preset or keep Custom to set your own sizes.</div>
                            </div>
                            <div class="col-3">
                                <label for="barcodeType" class="form-label">Barcode Type</label>
                                <select id="barcodeType" class="form-select">
                                    <option value="CODE128" selected>Code 128</option>
                                    <option value="CODE39">Code 39</option>
                                    <option value="EAN13">EAN-13</option>
                                    <option value="EAN8">EAN-8</option>
                                    <option value="UPC">UPC</option>
                                    <option value="UPCE">UPC-E</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="barcodeWidth" class="form-label">Width (mm)</label>
                                <input type="number" class="form-control" id="barcodeWidth" min="20" max="100" value="40">
                            </div>
                            <div class="col-2">
                                <label for="barcodeHeight" class="form-label">Height (mm)</label>
                                <input type="number" class="form-control" id="barcodeHeight" min="10" max="50" value="20">
                            </div>
                            <div class="col-3">
                                <label for="stickerSize" class="form-label">Sticker Size</label>
                                <select id="stickerSize" class="form-select">
                                    <option value="small">Small (25x15mm)</option>
                                    <option value="medium" selected>Medium (40x25mm)</option>
                                    <option value="large">Large (60x40mm)</option>
                                    <option value="custom">Custom</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="showText" class="form-label">Show Text</label>
                                <select id="showText" class="form-select">
                                    <option value="1" selected>Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <label for="textSize" class="form-label">Text Size (pt)</label>
                                <input type="number" class="form-control" id="textSize" min="6" max="20" value="10">
                            </div>
                            <div class="col-5">
                                <label for="inputMode" class="form-label">Input Mode</label>
                                <select id="inputMode" class="form-select">
                                    <option value="manual" selected>Manual list (one per line)</option>
                                    <option value="range">Generate by range</option>
                                </select>
                                <div class="form-text">Choose how you want to enter barcode values.</div>
                            </div>

                            <div class="col-12 input-mode input-mode-manual">
                                <label for="barcodeData" class="form-label">Barcode Data</label>
                                <textarea id="barcodeData" class="form-control" rows="6" placeholder="Enter barcode data (one per line, max 50 lines)&#10;Example:&#10;1234567890123&#10;9876543210987&#10;5551234567890"></textarea>
                                <div class="form-text">Enter one barcode per line. Maximum 50 barcodes allowed.</div>
                            </div>

                            <div class="col-12 input-mode input-mode-range" style="display:none;">
                                <div class="row g-3">
                                    <div class="col-2">
                                        <label for="rangeStart" class="form-label">Start Number</label>
                                        <input type="number" class="form-control" id="rangeStart" value="10001">
                                    </div>
                                    <div class="col-2">
                                        <label for="rangeEnd" class="form-label">End Number</label>
                                        <input type="number" class="form-control" id="rangeEnd" value="10050">
                                    </div>
                                    <div class="col-2">
                                        <label for="padLength" class="form-label">Pad Length</label>
                                        <input type="number" class="form-control" id="padLength" min="0" max="20" value="0">
                                        <div class="form-text">Pad with leading zeros (e.g., 00001)</div>
                                    </div>
                                    <div class="col-3">
                                        <label for="prefix" class="form-label">Prefix</label>
                                        <input type="text" class="form-control" id="prefix" placeholder="Optional">
                                    </div>
                                    <div class="col-3">
                                        <label for="suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="suffix" placeholder="Optional">
                                    </div>
                                    <div class="col-12">
                                        <div class="alert alert-secondary py-2 mb-0"><i class="fas fa-info-circle"></i> Max 50 barcodes per generation.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="rowsPerPage" class="form-label">Rows per Page</label>
                                <input type="number" class="form-control" id="rowsPerPage" min="1" max="20" value="10">
                            </div>
                            <div class="col-6">
                                <label for="columnsPerPage" class="form-label">Columns per Page</label>
                                <input type="number" class="form-control" id="columnsPerPage" min="1" max="10" value="3">
                            </div>
                        </div>
                        <div class="calculate-section mt-3">
                            <button id="generateBarcodes" class="invoice-action-btn">
                                <i class="fas fa-barcode"></i> Generate Stickers
                            </button>
                            <button id="clearBarcodes" class="invoice-defaul-btn">
                                <i class="fas fa-trash-alt"></i> Clear
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-eye"></i> Preview</h3>
                        <p>Preview of your barcode stickers will appear here.</p>
                    </div>
                    <div class="card-body">
                        <div id="barcodePreview" style="min-height:320px; display:flex; align-items:center; justify-content:center; background:#fff; border-radius:12px;">
                            <span class="text-muted">No barcodes yet. Click Generate Stickers.</span>
                        </div>
                        <div id="barcodeStats" class="mt-3" style="display:none;">
                            <div class="alert alert-info">
                                <strong>Generated:</strong> <span id="barcodeCount">0</span> barcodes<br>
                                <strong>Pages:</strong> <span id="pageCount">0</span> pages
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <button id="downloadBarcodes" class="invoice-action-btn" disabled>
                                <i class="fas fa-download"></i> Download PDF
                            </button>
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
                        <h4><i class="fas fa-info-circle"></i> About Barcode Sticker Generator</h4>
                    </div>
                    <div class="content-body">
                        <p>Create professional barcode stickers for inventory, retail, or labeling purposes. Generate up to 50 barcodes at once with customizable sizes and formats. Download as PDF for easy printing on sticker sheets.</p>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <h6>Supported Barcode Types:</h6>
                                <ul>
                                    <li><strong>Code 128:</strong> Alphanumeric, high density</li>
                                    <li><strong>Code 39:</strong> Alphanumeric, industrial use</li>
                                    <li><strong>EAN-13:</strong> 13-digit retail barcodes</li>
                                    <li><strong>EAN-8:</strong> 8-digit retail barcodes</li>
                                    <li><strong>UPC:</strong> 12-digit product codes</li>
                                    <li><strong>UPC-E:</strong> Compressed UPC codes</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Features:</h6>
                                <ul>
                                    <li>Generate up to 50 barcodes at once</li>
                                    <li>Customizable sticker sizes</li>
                                    <li>PDF download for printing</li>
                                    <li>Multiple barcode formats</li>
                                    <li>Text display options</li>
                                    <li>Grid layout control</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
