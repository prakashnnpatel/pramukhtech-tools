@push('page_css')
<style>
  /* ...existing styles... */
  .modal-backdrop.show {
    z-index: 2050 !important;
  }

  #croppedPreviewModal {
    z-index: 2100 !important;
  }

  /* Make Cropper.js cropping lines and handles dark yellow */
  .cropper-crop-box,
  .cropper-view-box {
    border: 2px dashed #3f07e6ff !important;
    border-radius: 10px;
  }

  .cropper-dashed {
    border-color: #b38600 !important;
  }

  .cropper-point {
    background-color: #45ed08ff !important;
    border-color: #b38600 !important;
  }

  .cropper-line {
    background-color: #b38600 !important;
  }
</style>
@endpush
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

  #preview_images_container {
    display: none;
  }

  #previewList {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    padding: 0;
    margin: 0;
  }

  #previewList li {
    border: 1px solid #eee;
    border-radius: 6px;
    width: 120px;
    height: 120px;
    overflow: hidden;
    position: relative;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  #previewList img {
    max-width: 100%;
    max-height: 100%;
    display: block;
    margin: auto;
  }
</style>
@endpush
<div class="fd-calculator-container">
  <div class="calculator-header">
    <div class="header-content">
      <div class="header-icon">
        <i class="fas fa-crop-alt"></i>
      </div>
      <div class="header-text">
        <h1 class="calculator-title">Image Cropper</h1>
        <p class="calculator-subtitle">Crop your images to the perfect size. Upload, crop, and download instantly.</p>
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
            <h3><i class="fas fa-upload"></i> Upload & Crop</h3>
            <p>Select your image and crop it to your desired size.</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 mb-3">
                <label class="form-label">Drag & Drop Image or Click to Upload</label>
                <div id="dropArea" class="drop-area">
                  <span id="dropText">Drop image here or click to select</span>
                  <input type="file" id="cropImageFile" accept="image/*" style="display:none;">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1">
                <div id="imageControls" style="display:none; margin-bottom:10px; text-align:center;">
                  <button type="button" class="invoice-defaul-btn" id="rotateLeftBtn" title="Rotate Left"><i class="fas fa-undo"></i></button>
                  <button type="button" class="invoice-defaul-btn" id="rotateRightBtn" title="Rotate Right"><i class="fas fa-redo"></i> </button>
                  <button type="button" class="invoice-defaul-btn" id="flipHorizontalBtn" title="Flip H"><i class="fas fa-arrows-alt-h"></i></button>
                  <button type="button" class="invoice-defaul-btn" id="flipVerticalBtn" title="Flip V"><i class="fas fa-arrows-alt-v"></i>&nbsp;</button>
                  <button type="button" class="invoice-defaul-btn" id="zoomInBtn" title="Zoom In"><i class="fas fa-search-plus"></i></button>
                  <button type="button" class="invoice-defaul-btn" id="zoomOutBtn" title="Zoom Out"><i class="fas fa-search-minus"></i> </button>
                  <button type="button" class="invoice-defaul-btn" id="resetBtn" title="Reset"><i class="fas fa-sync-alt"></i> </button>
                </div>
              </div>
              <div class="col-lg-11">
                <div id="cropperContainer" style="display:none; margin-bottom:10px; width:100%;">
                  <img id="imagePreview" src="#" alt="Image Preview" style="width:100%; max-width:100%; max-height:350px; display:block; margin:auto; object-fit:contain; background:#fff;" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div id="previewDownloadBtns" style="display:none; text-align:center;">
                  <button type="button" class="invoice-action-btn" id="previewBtn">Preview</button>
                  <button type="button" class="invoice-action-btn" id="cropBtn">Download</button>
                </div>
              </div>
            </div>
            <!-- Cropped Preview Modal -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 mb-4">
    <!-- How to Use Section -->
    <div class="info-card">
      <div class="info-header">
        <h4><i class="fas fa-book-open"></i> How to crop an image</h4>
      </div>
      <div class="content-body">
        <div class="row">
          <div class="col-lg-12">
            <h4>👉 Step-by-step guide</h4>
            <ol style="line-height:30px;">
              <li><strong>Upload Image</strong> - Drag & drop or click to select your image file.</li>
              <li><strong>Adjust Cropping Area</strong> - Move and resize the cropping box to select the desired area.</li>
              <li><strong>Use Controls</strong> - Rotate, flip, zoom, or reset as needed for perfect cropping.</li>
              <li><strong>Preview</strong> - Click the "Preview" button to see the cropped result in a popup.</li>
              <li><strong>Download</strong> - Click "Download" to save your cropped image instantly.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Unique Content Section: Why Use Our Cropper? -->
  <div class="info-section mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="info-content-card">
          <div class="content-header">
            <h3><i class="fas fa-star"></i> What Makes Our Image Cropper Unique?</h3>
          </div>
          <div class="content-body">
            <ul class="feature-list">
              <li><strong>Zero Upload Guarantee:</strong> Your images never leave your device—privacy is built-in.</li>
              <li><strong>Instant Results:</strong> Crop, rotate, and download in seconds, no waiting or registration.</li>
              <li><strong>All-in-One Controls:</strong> Rotate, flip, zoom, and reset—no need for extra software.</li>
              <li><strong>Universal Format Support:</strong> Works with JPG, PNG, WEBP, GIF, BMP, and more.</li>
              <li><strong>Mobile Optimized:</strong> Use on any device, anywhere, anytime.</li>
              <li><strong>No Watermarks, No Ads:</strong> Your cropped image is clean and professional.</li>
              <li><strong>Accessibility First:</strong> Keyboard navigation and screen reader friendly.</li>
              <li><strong>Open for Feedback:</strong> Suggest features or report issues—this tool evolves with your needs.</li>
            </ul>
            <p class="mt-3">
              Unlike other cropper tools, our solution is designed for speed, privacy, and simplicity. Whether you’re a student, designer, or business user, you get a seamless experience with no hidden catches.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Section -->
  <div class="info-section">
    <div class="row">
      <div class="col-lg-12">
        <div class="info-content-card">
          <div class="content-header">
            <h3><i class="fas fa-info-circle"></i> About Image Cropper Tool</h3>
          </div>
          <div class="content-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="content-block">
                  <h4><i class="fas fa-crop-alt"></i> What is Image Cropper?</h4>
                  <p>The Image Cropper is a free, easy-to-use online tool that lets you crop, rotate, flip, and adjust your images instantly. Whether you need to trim a photo for social media, remove unwanted areas, or prepare images for documents, this tool provides a fast and intuitive solution. No registration or software installation required—just upload, crop, and download your image in seconds.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="content-block">
                  <p>Our cropper supports all major image formats (JPG, PNG, WEBP, GIF, BMP, and more) and works directly in your browser for maximum privacy and speed. With advanced controls for rotation, flipping, and zooming, you can achieve the perfect crop every time. The tool is ideal for students, professionals, designers, and anyone who needs quick image editing without hassle.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="content-block">
                  <h4><i class="fas fa-lightbulb"></i> Key Features & Benefits</h4>
                  <ul class="feature-list">
                    <li><strong>Instant Cropping</strong> - Crop images in seconds with a simple interface.</li>
                    <li><strong>Advanced Controls</strong> - Rotate, flip, zoom, and reset for perfect results.</li>
                    <li><strong>High-Quality Output</strong> - Download cropped images in original quality.</li>
                    <li><strong>All Formats Supported</strong> - Works with JPG, PNG, WEBP, GIF, BMP, and more.</li>
                    <li><strong>Free & Secure</strong> - No registration, no watermark, and everything runs in your browser.</li>
                    <li><strong>Mobile Friendly</strong> - Fully responsive and works on any device.</li>
                    <li><strong>Privacy First</strong> - Your images never leave your device.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Use Cases (Unique Content Section) -->
  <div class="info-section mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="info-content-card">
          <div class="content-header">
            <h3><i class="fas fa-lightbulb"></i> Use Cases for Image Cropper Tool</h3>
          </div>
          <div class="content-body">
            <ul class="feature-list">
              <li><strong>Social Media Posts:</strong> Instantly crop images to fit Instagram, Facebook, Twitter, or LinkedIn requirements for profile, cover, or post images.</li>
              <li><strong>Document Preparation:</strong> Trim scanned documents, ID cards, or certificates for clean uploads to forms and applications.</li>
              <li><strong>Website & Blog:</strong> Resize and crop images for banners, thumbnails, and featured images to match your site’s layout.</li>
              <li><strong>Design Projects:</strong> Prepare assets for graphic design, presentations, or print by cropping to exact dimensions.</li>
              <li><strong>Photo Cleanup:</strong> Remove unwanted backgrounds or objects from photos before sharing or printing.</li>
              <li><strong>Profile Pictures:</strong> Adjust and crop your photo for professional profiles, resumes, or avatars.</li>
              <li><strong>Mobile Optimization:</strong> Crop images for faster loading and better display on mobile devices.</li>
              <li><strong>Educational Use:</strong> Teachers and students can crop diagrams, screenshots, or assignments for presentations and submissions.</li>
            </ul>
            <p class="mt-3">The intuitive UI makes cropping easy for everyone—just upload, adjust, and download. No technical skills required!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQ Section -->
  <div class="info-section mt-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="info-content-card">
          <div class="content-header">
            <h3><i class="fas fa-question-circle"></i> Frequently Asked Questions (FAQ)</h3>
          </div>
          <div class="content-body">
            <div class="accordion" id="faqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                    Is my image uploaded to your server?
                  </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    No, your image is processed entirely in your browser. It never leaves your device, ensuring privacy and security.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    What image formats are supported?
                  </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    You can crop JPG, PNG, WEBP, GIF, BMP, and most other common image formats.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Will the cropped image have a watermark?
                  </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    No, the cropped image is watermark-free and in original quality.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    Can I use this tool on mobile devices?
                  </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes, the Image Cropper is fully responsive and works on smartphones and tablets.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    Is there any limit on image size?
                  </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    There is no strict limit, but very large images may be limited by your browser's memory and performance.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                    Can I rotate, flip, or zoom my image before cropping?
                  </button>
                </h2>
                <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faq6" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Yes, you can use the provided controls to rotate, flip, zoom, and reset your image before cropping.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="faq7">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                    Do I need to install any software or register?
                  </button>
                </h2>
                <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faq7" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    No installation or registration is required. Just use the tool directly in your browser.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="croppedPreviewModal" tabindex="-1" aria-labelledby="croppedPreviewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background:#fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="croppedPreviewModalLabel">Cropped Preview</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center" style="background:#fff;">
        <canvas id="croppedPreviewCanvas" style="max-width:100%; border:1px solid #eee; background:#fff;"></canvas>
      </div>
    </div>
  </div>
</div>

@push('page_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet" />
<script>
  let cropper;
  let scaleX = 1,
    scaleY = 1;
  let selectedFile = null;
  // Drag & Drop logic and preview like merge-images-to-pdf
  $('#dropArea').on('click', function() {
    $('#cropImageFile').click();
  });
  $('#dropArea').on('dragover', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('bg-primary text-white');
  });
  $('#dropArea').on('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('bg-primary text-white');
  });
  $('#dropArea').on('drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('bg-primary text-white');
    const files = e.originalEvent.dataTransfer.files;
    if (files && files[0]) {
      handleImage(files[0]);
    }
  });
  $('#cropImageFile').on('change', function(e) {
    const file = e.target.files[0];
    if (file) handleImage(file);
  });

  function handleImage(file) {
    selectedFile = file;
    const reader = new FileReader();
    reader.onload = function(event) {
      // Show in cropper (below upload area)
      const cropImg = document.getElementById('imagePreview');
      cropImg.src = event.target.result;
      $('#cropperContainer').show();
      $('#dropText').show();
      $('#imageControls').show();
      $('#previewDownloadBtns').show();
      $('#croppedPreviewContainer').hide();
      if (cropper) cropper.destroy();
      scaleX = 1;
      scaleY = 1;
      cropper = new Cropper(cropImg, {
        aspectRatio: NaN,
        viewMode: 1,
        autoCropArea: 1
      });
    };
    reader.readAsDataURL(file);
  }
  // Controls (same as before)
  $('#rotateLeftBtn').on('click', function() {
    if (cropper) cropper.rotate(-90);
  });
  $('#rotateRightBtn').on('click', function() {
    if (cropper) cropper.rotate(90);
  });
  $('#flipHorizontalBtn').on('click', function() {
    if (cropper) {
      scaleX = -scaleX;
      cropper.scaleX(scaleX);
    }
  });
  $('#flipVerticalBtn').on('click', function() {
    if (cropper) {
      scaleY = -scaleY;
      cropper.scaleY(scaleY);
    }
  });
  $('#zoomInBtn').on('click', function() {
    if (cropper) cropper.zoom(0.1);
  });
  $('#zoomOutBtn').on('click', function() {
    if (cropper) cropper.zoom(-0.1);
  });
  $('#resetBtn').on('click', function() {
    if (cropper) {
      cropper.reset();
      scaleX = 1;
      scaleY = 1;
    }
  });
  // Preview (show in modal)
  $('#previewBtn').on('click', function() {
    if (cropper) {
      const canvas = cropper.getCroppedCanvas();
      if (canvas) {
        $('#croppedPreviewCanvas').get(0).width = canvas.width;
        $('#croppedPreviewCanvas').get(0).height = canvas.height;
        const ctx = $('#croppedPreviewCanvas').get(0).getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(canvas, 0, 0);
        // Show modal (Bootstrap 5)
        var modal = new bootstrap.Modal(document.getElementById('croppedPreviewModal'));
        modal.show();
      }
    }
  });
  // Ensure Bootstrap 5 JS is loaded
  if (typeof bootstrap === 'undefined') {
    var script = document.createElement('script');
    script.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js';
    document.head.appendChild(script);
  }
  // Download
  $('#cropBtn').on('click', function() {
    if (cropper) {
      const canvas = cropper.getCroppedCanvas();
      if (canvas) {
        const link = document.createElement('a');
        link.href = canvas.toDataURL('image/png');
        link.download = 'ToolHubspot-cropped-image.png';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      }
    }
  });
</script>
@endpush