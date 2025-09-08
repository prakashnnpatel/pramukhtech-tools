@push('page_css')
<style>
.drop-area {
    display: flex;              /* if you want flex centering */
  flex-direction: column;  
    border: 2px dashed #6c757d; /* dashed border */
    border-radius: 10px;
    min-height: 250px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    cursor: pointer;
    background-color: #f8f9fa;
    padding: 20px;  
}
</style>
@endpush

<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="far fa-file-pdf"></i></div>
        <div class="header-title">Merge Multiple Images Into One PDF</div>
        <div class="header-desc">Drag & drop your images below and download as a single PDF.</div>
    </div>
    <div class="tool-card">
        <h5 class="mb-3">Turn multiple photos or images in any format into a polished, professional PDF.</h5>
        <form id="imageForm" action="{{ route('merge.images.pdf') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-lg-12">
                    <!-- Drag & Drop Area -->
                    <div id="dropArea" class="mb-3 bg-light drop-area">
                        <p class="mb-3">Drag & Drop Images Here or Click to Upload</p>
                        <small class="text-muted d-block">Maximum size: 50MB per image</small>
                        <small class="text-muted d-block">Supported formats: JPEG, PNG, JPG, GIF, SVG, WEBP, BMP, TIFF</small>
                        <input type="file" id="fileInput" name="images[]" accept="image/*" multiple hidden>
                    </div>
                </div>              

                <div class="col-lg-12" id="preview_images_container" style="display:none;">
                    <!-- Preview Container -->
                    <ul id="previewList" class="list-unstyled d-flex flex-wrap gap-3 p-2 border rounded bg-white mb-4">
                        <!-- Images will appear here -->
                    </ul>
                </div>

				<div class="col-lg-12">
					<label class="form-label"><strong>Layout Option:</strong></label><br>
					<label style="display:inline-flex; align-items:center; margin-right:20px; cursor:pointer;">
					  <input type="radio" name="layout" id="layout1" value="next_by_next" checked>
					  <div style="width:40px; height:40px; border:1px solid #333; margin-left:8px; display:grid; grid-template-columns:1fr 1fr; grid-template-rows:1fr 1fr; gap:2px; padding:2px;">
						<div style="background:#ddd;"></div>
						<div style="background:#bbb;"></div>
						<div style="background:#ccc;"></div>
						<div style="background:#aaa;"></div>
					  </div>
					  <span style="margin-left:6px;">Images side by side</span>
					</label>

					<label style="display:inline-flex; align-items:center; margin-right:20px; cursor:pointer;">
					  <input type="radio" name="layout" id="layout2" value="new_page">
					  <div style="width:40px; height:40px; border:1px solid #333; margin-left:8px; display:flex; flex-direction:column; justify-content:space-evenly; padding:2px;">
						<div style="width:90%; height:35%; background:#ddd; margin:auto;"></div>
						<div style="width:90%; height:35%; background:#bbb; margin:auto;"></div>
					  </div>
					  <span style="margin-left:6px;">Each image in new page</span>
					</label>
				</div>

                <div class="col-lg-12">
                    <div class="calculate-section">
                        <button type="submit" class="calculate-btn" id="merge_download_pdf_btn">Merge & Download PDF
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

   @include('suggestionlist', ['slidertype' => 'H'])

    <!-- Step-by-step guide -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> How to combine images into one PDF</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4><i class="fas fa-star"></i> Step-by-step guide</h4>
								<ol style="line-height:30px;">
                                    <li><strong>Add images:</strong> Click the upload box or drag & drop your files inside it.</li>
                                    <li><strong>Review previews:</strong> Thumbnails will appear below. Use the <span class="badge bg-danger">x</span> on a thumbnail to remove any image you don’t need.</li>
                                    <li><strong>Choose layout:</strong> Select <em>Each image on a new page</em> or <em>Side-by-side</em> (grid) in the Layout options.</li>                                    
                                    <li><strong>Merge:</strong> Click <span class="badge bg-success">Merge &amp; Download PDF</span>. The tool will combine your images into a single PDF and start the download.</li>
                                    <li>
                                    <strong>Save & share:</strong> Open the downloaded PDF to verify, then save or share it as needed.
                                    </li>
                                </ol>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ url('/') }}/images/tools/merge-images-to-pdf.png" alt="Merge Multiple Images Into One PDF" class="img-fluid responsive-img"/>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <h5 class="mb-2"><i class="fas fa-lightbulb"></i> Tips</h5>
                                <ul class="mb-0" style="line-height:26px; margin-left:1rem;">
                                    <li><strong>Order:</strong> Images are merged in the order you add them (unless reordering is enabled).</li>
                                    <li><strong>Side-by-side layout:</strong> Images auto-fit with small margins; for best results, use images with similar orientation.</li>
                                    <li><strong>Upload issues?</strong> Ensure each file is an image and ≤ 50MB.</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

    <!-- Information Section -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About the Combine Images Into One PDF Tool </h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-file"></i> Create Professional PDF</h4>
                                    <p>The <b>Combine Images Into One PDF</b> tool makes it simple to convert multiple images into a single, shareable document. Instead of sending separate image files, you can merge them seamlessly into a compact PDF that's easy to view, print, or share across devices. With just a few clicks, your photos, scanned documents, or design files are organized in the exact order you want.</p>
                                    
									 <p>This tool supports popular image formats like <b>JPEG, PNG, JPG, GIF, SVG, WEBP, BMP, and TIFF</b>, and allows uploads of up to <b>50MB per image</b>. You can choose whether each image appears on a new page or side-by-side in a grid layout, giving you flexibility for personal, professional, or business use.</p>
                                    <p>Whether you're creating a photo album, submitting documents online, or preparing reports, the tool ensures your images are combined efficiently into a <b>high-quality, ready-to-use PDF</b> without requiring any software installation. Everything works directly in your browser, keeping the process quick and secure.</p>                                    
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> Key Features</h4>
                                    <ul class="feature-list">
                                        <li><strong>All-in-one document:</strong> Merge multiple images into one neat PDF file.
										</li>
                                        <li><strong>Fast & easy:</strong> Drag, drop, and download within seconds.</li>
                                        <li><strong>Flexible layout:</strong> Place each image on a new page or arrange them side by side.</li>
                                        <li><strong>Secure process:</strong> No need to install apps; everything runs in-browser.</li>
                                        <li><strong> Universal compatibility:</strong> PDFs are easy to open, share, and print on any device./li>
                                        <li><strong>Wide format support:</strong> Works with JPEG, PNG, JPG, GIF, SVG, WEBP, BMP, and TIFF.</li>
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
