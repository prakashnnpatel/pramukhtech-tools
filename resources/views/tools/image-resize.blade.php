@push('page_css')
<style>
    .drop-area {
    display: flex;
    flex-direction: column;
    border: 2px dashed #6c757d;
    border-radius: 10px;
    min-height: 100px;
    align-items: center;
    justify-content: center;
    text-align: center;
    cursor: pointer;
    background-color: #f8f9fa;
    padding: 20px;
    margin-bottom: 1rem;
    }

    .drop-area.dragover {
    background-color: #e9ecef;
    border-color: #3f07e6ff;
    }
</style>
@endpush
<div class="fd-calculator-container">
  <div class="calculator-header">
    <div class="header-content">
      <div class="header-icon">
        <i class="fas fa-image"></i>
      </div>
      <div class="header-text">
        <h1 class="calculator-title">Image Resize Tool</h1>
        <p class="calculator-subtitle">Resize your images by pixel or percentage. Preview and download instantly.</p>
      </div>
    </div>
  </div>
  <div class="calculator-main">
    <div class="row">
      <div class="col-lg-12">
        @include('suggestionlist', ['slidertype' => 'H'])
      </div>
      <div class="col-lg-6 mb-4">
        <div class="calculator-card">
          <div class="card-header">
            <h3><i class="fas fa-sliders"></i> Settings</h3>
            <p>Upload an image, set your desired size, and preview the result.</p>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Drag & Drop Image or Click to Upload</label>
              <div id="imgDropArea" class="drop-area">
                <span id="dropText">Drop image here or click to select</span>
                <input type="file" id="imgUpload" accept="image/*" style="display:none;">
              </div>
            </div>
            </style>           
            <div class="row g-3">
              <div class="col-12">
                <label for="targetSize" class="form-label">Target File Size</label>
                <div class="input-group">
                  <input type="number" class="form-control" id="targetSize" min="1" step="1" placeholder="e.g. 200">
                  <select id="targetSizeUnit" class="form-select" style="max-width:90px;">
                    <option value="kb">KB</option>
                    <option value="mb">MB</option>
                  </select>
                </div>
                <small class="form-text">Set the maximum file size for the output image (e.g. 200 KB or 2 MB).</small>
              </div>
              <div class="col-6">
                <label for="resizeMode" class="form-label">Resize Mode</label>
                <select id="resizeMode" class="form-select">
                  <option value="pixel">Pixel</option>
                  <option value="percent">Percentage</option>
                </select>
              </div>
              <div class="col-6"></div>
              <div class="col-6">
                <label for="resizeWidth" class="form-label">Width</label>
                <input type="number" class="form-control" id="resizeWidth" min="1" placeholder="Width">
              </div>
              <div class="col-6">
                <label for="resizeHeight" class="form-label">Height</label>
                <input type="number" class="form-control" id="resizeHeight" min="1" placeholder="Height">
              </div>
            </div>
            <div class="calculate-section mt-3">
              <button id="resizeBtn" class="invoice-action-btn">
                <i class="fas fa-compress"></i> Resize
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="calculator-card">
          <div class="card-header">
            <h3><i class="fas fa-eye"></i> Preview</h3>
          </div>
          <div class="card-body text-center">
            <div id="imgPreview" style="min-height:440px;display:flex;align-items:center;justify-content:center; background:#fff; border-radius:12px;">
              <span class="text-muted">No image uploaded.</span>
            </div>
            <div class="calculate-section mt-3">
              <button id="downloadBtn" class="invoice-action-btn" disabled>
                <i class="fas fa-download"></i> Download
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- How to Resize Image Section -->
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="info-card">
      <div class="info-header">
        <h4><i class="fas fa-book-open"></i> How to Resize Image</h4>
      </div>
      <div class="content-body">
        <div class="row">
          <div class="col-lg-12">
            <h4>👉 Step-by-step guide</h4>
            <ol style="line-height:30px;">
              <li><strong>Upload Image</strong> - Drag & drop or click to select your image file.</li>
              <li><strong>Set Resize Options</strong> - Choose resize mode (pixel/percentage), enter width and height, and optionally set a target file size (KB/MB).</li>
              <li><strong>Resize</strong> - Click the <b>Resize</b> button to process your image.</li>
              <li><strong>Preview & Download</strong> - Preview the resized image and click <b>Download</b> to save it.</li>
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
                    <h3><i class="fas fa-info-circle"></i> About Image Resize Tool</h3>
                </div>
                <div class="content-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-block">
                                <h4><i class="fas fa-qrcode"></i> Fast, free, privacy-friendly image resizing in your browser</h4>
                                 <p>
                                    The <strong>Image Resize Tool</strong> lets you quickly resize and compress images online. Whether you need to reduce file size for web uploads, social media, or email, or simply want to adjust dimensions, this tool makes it easy. No software installation required—everything works in your browser.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="content-block">
                                <h4><i class="fas fa-lightbulb"></i> Key Features & Benefits</h4>
                                <ul class="feature-list">
                                    <li><strong>Instant Image Resizing</strong> – Quickly resize images by pixel or percentage with real-time preview.</li>
                                    <li><strong>File Size Control</strong> – Set a target file size (KB/MB) to optimize images for web, email, or social media.</li>
                                    <li><strong>Supports Multiple Formats</strong> – Works with popular image types like JPG, PNG, GIF, and more.</li>
                                    <li><strong>High-Quality Output</strong> – Maintains image clarity and aspect ratio during resizing.</li>
                                    <li><strong>Privacy-Friendly</strong> – All processing happens in your browser; images are never uploaded to a server.</li>
                                    <li><strong>User-Friendly Interface</strong> – Simple drag & drop or click-to-upload, with intuitive controls.</li>
                                    <li><strong>Free & Accessible</strong> – No registration or software installation required; use directly from any web browser.</li>
                                    <li><strong>Cross-Platform Compatibility</strong> – Works seamlessly on desktops, tablets, and mobile devices.</li>
                                    <li><strong>Fast Download</strong> – Instantly download your resized image after processing.</li>
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
<script src="/js/tools/image-resize.js"></script>