@php
$converter_title = '';
if(!empty($extraParams) && count($extraParams) >= 2) {
    $converter_title = strtoupper($extraParams[0]) . ' to ' . strtoupper($extraParams[1]);
}

// SEO Meta Tags
$seoTitle = $converter_title ? $converter_title . ' Image Converter - Free Online Tool' : 'Free Online Image Converter - Convert JPG to PNG, WEBP to JPG & More';
$seoDescription = 'Convert images between formats instantly with our free online Image Converter. Transform JPG to PNG, PNG to JPG, WEBP to JPG, and more. High-quality conversion with customizable settings, drag & drop support, and no registration required.';
$seoKeywords = 'image converter, free image converter, online image converter, jpg to png converter, png to jpg converter, webp to jpg, image format converter, convert image online, photo converter, image optimization tool';
@endphp



<div class="fd-calculator-container">
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-image"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">{{ $converter_title ? $converter_title . ' ' : '' }}Image Converter</h1>
                <p class="calculator-subtitle">Convert images between different formats instantly. Support for JPG, PNG, WEBP, GIF, BMP, and more.</p>
            </div>
        </div>
    </div>

    <div class="calculator-main">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-upload"></i> Upload & Convert</h3>
                        <p>Select your image and choose the target format for conversion.</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="imageFile" class="form-label">Select Image File</label>
                                <input type="file" class="form-control" id="imageFile" accept="image/*">
                                <small class="form-text">Supported formats: JPG, PNG, WEBP (fully supported), GIF, BMP, TIFF (limited browser support). Max size: 10MB.</small>
                            </div>
                            <div class="col-12">
                                <label for="targetFormat" class="form-label">Convert To Format</label>
                                <select id="targetFormat" class="form-select" required>
                                    <option value="">Select target format</option>
                                    <option value="png">✅ PNG (Portable Network Graphics) - Recommended</option>
                                    <option value="jpg">✅ JPG (JPEG) - Good for photos</option>
                                    <option value="webp">✅ WEBP (Web Picture) - Modern format</option>
                                    <option value="gif" disabled>❌ GIF (Graphics Interchange Format) - Not supported</option>
                                    <option value="bmp" disabled>❌ BMP (Bitmap) - Not supported</option>
                                    <option value="tiff" disabled>❌ TIFF (Tagged Image File Format) - Not supported</option>
                                </select>
                                <small class="form-text text-muted">
                                    <strong>Supported formats:</strong> PNG, JPG, WEBP | 
                                    <strong>Limited support:</strong> GIF, BMP, TIFF (browser limitations)
                                </small>
                            </div>
                            <div class="col-6">
                                <label for="imageQuality" class="form-label">Quality</label>
                                <input type="range" class="form-range custom-range" id="imageQuality" min="1" max="100" value="90">
                                <small class="form-text">Quality: <span id="qualityValue">90</span>%</small>
                            </div>
                            <div class="col-6">
                                <label for="imageWidth" class="form-label">Width (px)</label>
                                <input type="number" class="form-control" id="imageWidth" placeholder="Auto" min="1">
                                <small class="form-text">Leave empty to maintain aspect ratio</small>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="maintainAspectRatio" checked>
                                    <label class="form-check-label" for="maintainAspectRatio">
                                        Maintain aspect ratio
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="calculate-section mt-3">
                            <button id="convertImage" class="invoice-action-btn" disabled>
                                <i class="fas fa-sync-alt"></i> Convert Image
                            </button>
                            <button id="clearImage" class="invoice-defaul-btn">
                                <i class="fas fa-trash-alt"></i> Clear
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-eye"></i> Preview & Download</h3>
                        <p>Your converted image will appear here.</p>
                    </div>
                    <div class="card-body text-center">
                        <div id="imagePreview" style="min-height:320px; display:flex; align-items:center; justify-content:center; background:#f8f9fa; border-radius:12px; border:2px dashed #dee2e6; transition: all 0.3s ease;" class="drop-zone">
                            <div class="text-center">
                                <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No image selected. Upload an image to convert.</p> 
                            </div>
                        </div>
                        <div class="image-info mt-3" id="imageInfo" style="display:none;">
                            <div class="row text-start">
                                <div class="col-6">
                                    <small class="text-muted">Original Format:</small><br>
                                    <span id="originalFormat" class="fw-bold"></span>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">File Size:</small><br>
                                    <span id="fileSize" class="fw-bold"></span>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">Dimensions:</small><br>
                                    <span id="imageDimensions" class="fw-bold"></span>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted">Target Format:</small><br>
                                    <span id="targetFormatDisplay" class="fw-bold"></span>
                                </div>
                            </div>
                        </div>
                        <div class="calculate-section">
                            <button id="downloadImage" class="invoice-action-btn" disabled>
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
            <div class="info-card">
                <div class="info-header">
                    <h4><i class="fas fa-book-open"></i> How to convert images </h4>
                </div>
                <div class="content-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>👉 Step-by-step guide</h4>
                            <ol style="line-height:30px;">
                                <li><strong>Upload Image</strong> - Click "Choose File" and select the image you want to convert from your device.</li>
                                <li><strong>Select Target Format</strong> - Choose your desired output format (PNG, JPG, or WEBP are fully supported).</li>
                                <li><strong>Adjust Settings</strong> - Set quality level and optionally resize the image while maintaining aspect ratio.</li>
                                <li><strong>Convert Image</strong> - Click the "Convert Image" button to process your image instantly.</li>
                                <li><strong>Download Result</strong> - Preview the converted image and download it to your device.</li>
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
                        <h3><i class="fas fa-info-circle"></i> About Image Converter</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-image"></i> What is Image Converter?</h4>
                                    <p>The Image Converter is a powerful online tool that allows you to convert images between different formats quickly and easily. Whether you need to convert JPG to PNG, WEBP to JPG, or any other format combination, this tool provides instant conversion with high-quality results. Perfect for web developers, designers, photographers, and anyone who needs to optimize images for different purposes.</p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Key Features & Benefits</h4>
                                    <ul class="feature-list">
                                        <li><strong>Multiple Format Support</strong> - Convert between JPG, PNG, and WEBP formats (GIF, BMP, TIFF have limited browser support).</li>
                                        <li><strong>Quality Control</strong> - Adjust compression quality to balance file size and image quality.</li>
                                        <li><strong>Resize Options</strong> - Optionally resize images while maintaining aspect ratio.</li>
                                        <li><strong>Instant Preview</strong> - See your converted image before downloading.</li>
                                        <li><strong>No Registration Required</strong> - Use the tool immediately without any sign-up process.</li>
                                        <li><strong>Secure Processing</strong> - All conversions happen in your browser for privacy and security.</li>
                                        <li><strong>High-Quality Output</strong> - Maintain image quality during conversion process.</li>
                                        <li><strong>Cross-Platform Compatibility</strong> - Works on desktop, tablet, and mobile devices.</li>
                                        <li><strong>Free to Use</strong> - No cost, no watermarks, no limitations.</li>
                                    </ul>
                                </div>
                            </div>

                                                         <div class="col-lg-12">
                                 <div class="content-block">
                                     <h4><i class="fas fa-question-circle"></i> Common Use Cases</h4>
                                     <ul class="feature-list">
                                         <li><strong>Web Optimization</strong> - Convert images to WEBP for better web performance.</li>
                                         <li><strong>Transparency Support</strong> - Convert to PNG when you need transparent backgrounds.</li>
                                         <li><strong>File Size Reduction</strong> - Convert to JPG for smaller file sizes with good quality.</li>
                                         <li><strong>Animation Preservation</strong> - Use GIF format for animated images (viewing only, conversion limited).</li>
                                         <li><strong>Print Quality</strong> - Convert to TIFF for high-quality printing requirements (viewing only, conversion limited).</li>
                                         <li><strong>Compatibility</strong> - Ensure images work across different platforms and applications.</li>
                                     </ul>
                                 </div>
                             </div>

                             <div class="col-lg-12">
                                 <div class="content-block">
                                     <h4><i class="fas fa-exclamation-triangle"></i> Browser Compatibility Note</h4>
                                     <p><strong>Important:</strong> Due to browser limitations, GIF, BMP, and TIFF conversion is not supported in most browsers. These formats can be viewed and uploaded, but conversion to other formats may not work. For best results, use PNG, JPG, or WEBP formats for conversion.</p>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
