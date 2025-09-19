@extends('layouts.app')

@push('page_css')
@vite('resources/css/jquery-ui.css')
@vite('resources/css/greeting-cards.css')
@endpush

@section('content')
<div class="fd-calculator-container">
	<div class="calculator-main">
		<div class="row">
			<div class="col-lg-12 mb-4">
				<div class="calculator-card">
					<div class="card-header">
						   <div class="d-flex justify-content-between align-items-center w-100">
							   <div>
								   <h3 class="mb-0">{{$card->title}}</h3>
								   <p class="calculator-subtitle mb-0">{{$card->description}}</p>
							   </div>
							   <button class="btn btn-sm btn-outline-secondary collapse-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#main-card-body" aria-expanded="true" aria-controls="main-card-body" style="border:1px solid #ddd;">
								   <span class="collapse-icon" aria-hidden="true" style="display: inline-block; transition: transform 0.3s;">
									   <!-- Bootstrap chevron-down SVG -->
									   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
										   <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
									   </svg>
								   </span>
								   <span class="visually-hidden">Toggle section</span>
							   </button>
						   </div>
					   </div>
					   <div class="card-body collapse show" id="main-card-body">
						{{-- Canvas Background & Border Controls --}}
						<div class="row mb-3">
							<div class="col-lg-12 d-flex align-items-center" style="gap: 8px;">
								<label class="form-label">Backgrounds:</label>
								<div id="main-canvas-bg-thumbs" style="display: flex; flex-wrap: wrap; gap: 8px; max-width: 420px; max-height: 90px; overflow-x: auto; overflow-y: hidden; border: 1px solid #eee; padding: 4px 0 4px 4px; background: #fafafa; border-radius: 6px;">
									<div class="bg-thumb" data-img="" style="width: 60px; height: 40px; border: 2px solid #ccc; border-radius: 4px; background: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 12px; color: #888;">None</div>
									<img src="/images/greeting-cards/backgrounds/birthday-1.jpeg" class="bg-thumb" data-img="/images/greeting-cards/backgrounds/birthday-1.jpeg" style="width: 60px; height: 40px; object-fit: cover; border: 2px solid #ccc; border-radius: 4px; cursor: pointer;" title="Birthday 1" />
									<img src="/images/greeting-cards/backgrounds/birthday-2.jpg" class="bg-thumb" data-img="/images/greeting-cards/backgrounds/birthday-2.jpg" style="width: 60px; height: 40px; object-fit: cover; border: 2px solid #ccc; border-radius: 4px; cursor: pointer;" title="Birthday 2" />
									<img src="/images/greeting-cards/backgrounds/birthday-3.jpeg" class="bg-thumb" data-img="/images/greeting-cards/backgrounds/birthday-3.jpeg" style="width: 60px; height: 40px; object-fit: cover; border: 2px solid #ccc; border-radius: 4px; cursor: pointer;" title="Birthday 3" />
									<img src="/images/greeting-cards/backgrounds/birthday-4.jpeg" class="bg-thumb" data-img="/images/greeting-cards/backgrounds/birthday-4.jpeg" style="width: 60px; height: 40px; object-fit: cover; border: 2px solid #ccc; border-radius: 4px; cursor: pointer;" title="Birthday 4" />
								</div>
							</div>
						</div>				
					</div>
				</div>
			</div>

			{{-- Editor Canvas --}}
			<div class="col-lg-8 mb-4">
				<div class="row mb-4">
                    <div class="col-lg-12">
						<div class="calculator-card">
							<div class="card-body">
								<div id="card-editor-wrapper" class="d-flex justify-content-center align-items-center">
									<div id="card-canvas" style="position: relative;  background: #fff; overflow: hidden;">
										<!-- Card elements (text/images) will be added here dynamically -->
									</div>
								</div>
							</div>							
						</div>						
					</div>
				</div>
				{{-- Canvas Background & Border Controls --}}
				<div class="calculator-card">
					   <div class="card-header d-flex justify-content-between align-items-center">
						   <h4 class="mb-0">Manage Main Container</h4>
						   <button class="btn btn-sm btn-outline-secondary collapse-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#main-container-settings" aria-expanded="true" aria-controls="main-container-settings" id="toggle-main-container-settings" style="border:1px solid #ddd;">
							   <span class="collapse-icon" aria-hidden="true" style="display: inline-block; transition: transform 0.3s;">
								   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
									   <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
								   </svg>
							   </span>
							   <span class="visually-hidden">Toggle section</span>
						   </button>
					   </div>
					   <div class="card-body collapse show" id="main-container-settings">
						<div class="row">
							<div class="col-lg-3">
								<label for="main-canvas-bg-color" class="form-label">Main Background</label>
								<input type="color" id="main-canvas-bg-color" value="#ffffff" style="width: 40px; height: 32px; padding: 0; border: none; background: none;" class="form-control">
							</div>
							<div class="col-lg-3">
								<label for="main-canvas-border-color" class="form-label">Border Color</label>
								<input type="color" id="main-canvas-border-color" value="#cccccc" style="width: 40px; height: 32px; padding: 0; border: none; background: none;" class="form-control">
							</div>
							<div class="col-lg-3">
								<label for="main-canvas-border-width" class="form-label">Border Width</label>
								<div class="input-group-custom">
									<div class="input-wrapper">
										<input type="number" class="form-control custom-input" id="main-canvas-border-width" value="1" min="0" max="30">
										<span class="input-suffix mr-4">px</span>
									</div>                                    
								</div>
							</div>
							<div class="col-lg-3">
								<label for="main-canvas-border-style" class="form-label">Border Style</label>
								<select id="main-canvas-border-style" class="form-select">
									<option value="solid">Solid</option>
									<option value="dashed">Dashed</option>
									<option value="dotted">Dotted</option>
									<option value="double">Double</option>
									<option value="groove">Groove</option>
									<option value="ridge">Ridge</option>
									<option value="inset">Inset</option>
									<option value="outset">Outset</option>
									<option value="none">None</option>
								</select>
							</div>
							<div class="col-lg-6">
								<div class="input-group-custom">
									<label for="canvas-zoom-slider">Zoom: <span id="canvas-zoom-value">100%</span></label>
									<div class="slider-container">
										<div id="canvas-zoom-slider" class="custom-slider"></div>
										<div class="slider-labels">
											<span>25%</span>
											<span>200%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- Sidebar for controls --}}
			<div class="col-lg-4 mb-4">
				<div class="info-card" style="height: auto;">
					<div class="info-header">
						<h4> Card Elements</h4>
					</div>
					<div class="card-body" style="padding: 15px;">
						<div class="row">
                            <div class="col-lg-12 mb-4">
								<button class="invoice-defaul-btn" id="add-text" title="Add a new text element"> Add Text</button>							
								<button class="invoice-defaul-btn" id="add-image" title="Upload your photo"><i class="fa-solid fa-camera"></i> Add Photo</button>
							</div>
						</div>
						{{-- Text Editor Controls --}}
						<div class="row" id="editor-controls" style="display:none;">
							<h6>Edit Text</h6>
							<div class="col-lg-12 mb-3">
								<button type="button" class="btn btn-outline-secondary btn-sm" id="bold-btn" title="Bold"><b>B</b></button>
								<button type="button" class="btn btn-outline-secondary btn-sm" id="italic-btn" title="Italic"><i>I</i></button>
								<button type="button" class="btn btn-outline-secondary btn-sm" id="underline-btn" title="Underline"><u>U</u></button>
								<!-- Bullet List Button -->
								<button type="button" class="btn btn-outline-secondary btn-sm" id="bullet-list-btn" title="Bullet List">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
										<circle cx="3" cy="4" r="1.5"/>
										<rect x="7" y="3" width="7" height="2" rx="1"/>
										<circle cx="3" cy="8" r="1.5"/>
										<rect x="7" y="7" width="7" height="2" rx="1"/>
										<circle cx="3" cy="12" r="1.5"/>
										<rect x="7" y="11" width="7" height="2" rx="1"/>
									</svg>
								</button>
								   <!-- Rotate Text Button -->
								   <button type="button" class="btn btn-outline-secondary btn-sm" id="rotate-text-btn" title="Rotate Text, Click and hold to rotate">
									   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="16" height="16">
										   <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
									   </svg>
								   </button>
								<div class="btn-group ms-2" role="group" aria-label="Text alignment">
									<button type="button" class="btn btn-outline-secondary btn-sm" id="align-left-btn" title="Align Left">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
											<rect width="12" height="2" x="0" y="2" rx="1"/>
											<rect width="8" height="2" x="0" y="6" rx="1"/>
											<rect width="12" height="2" x="0" y="10" rx="1"/>
											<rect width="6" height="2" x="0" y="14" rx="1"/>
										</svg>
									</button>
									<button type="button" class="btn btn-outline-secondary btn-sm" id="align-center-btn" title="Align Center">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
											<rect width="12" height="2" x="2" y="2" rx="1"/>
											<rect width="8" height="2" x="4" y="6" rx="1"/>
											<rect width="12" height="2" x="2" y="10" rx="1"/>
											<rect width="6" height="2" x="5" y="14" rx="1"/>
										</svg>
									</button>
									<button type="button" class="btn btn-outline-secondary btn-sm" id="align-right-btn" title="Align Right">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
											<rect width="12" height="2" x="4" y="2" rx="1"/>
											<rect width="8" height="2" x="8" y="6" rx="1"/>
											<rect width="12" height="2" x="4" y="10" rx="1"/>
											<rect width="6" height="2" x="10" y="14" rx="1"/>
										</svg>
									</button>
								</div>
							</div>
							<div class="col-lg-6 mb-3">
								<label for="font-family" class="form-label">Font:</label>
								<select id="font-family" class="form-select form-select-sm">
									<option value="Arial">Arial</option>
									<option value="Times New Roman">Times New Roman</option>
									<option value="Comic Sans MS">Comic Sans</option>
									<option value="Georgia">Georgia</option>
									<option value="Courier New">Courier New</option>
								</select>
							</div>
							<div class="col-lg-6 mb-3">
								<label for="font-size" class="form-label">Size:</label>
								<input type="number" id="font-size" class="form-control form-control-sm" min="10" max="80" value="20">
							</div>
							<!-- Text Color Controls -->
							<div class="col-lg-4 mb-3">
								<label for="font-color" class="form-label">Text Color:</label>
								<input type="color" id="font-color" class="form-control form-control-sm" value="#222222">
							</div>
							<!-- Text Background Controls -->
							<div class="col-lg-4 mb-3">
								<label for="background-color" class="form-label">Background Color:</label>
								<input type="color" id="background-color" class="form-control form-control-sm" value="#ffffff">
							</div>
							<!-- Text Border Controls -->
							<div class="col-lg-4 mb-3">
								<label for="border-color" class="form-label">Border Color:</label>
								<input type="color" id="border-color" class="form-control form-control-sm" value="#000000">
							</div>
							<div class="col-lg-6 mb-3">
								<label for="border-style" class="form-label">Border Style:</label>
								<select id="border-style" class="form-select form-select-sm">
									<option value="none">None</option>
									<option value="solid">Solid</option>
									<option value="dashed">Dashed</option>
									<option value="dotted">Dotted</option>
									<option value="double">Double</option>
									<option value="groove">Groove</option>
									<option value="ridge">Ridge</option>
									<option value="inset">Inset</option>
									<option value="outset">Outset</option>
								</select>
							</div>
							<div class="col-lg-6 mb-2">
								<label for="border-width" class="form-label">Border Width:</label>
								<div class="input-group-custom">
                                    <div class="input-wrapper">
                                        <input type="number" class="form-control form-control-sm" id="border-width" min="0" max="20" value="1">
                                        <span class="input-suffix mr-4">px</span>
                                    </div>
                                </div>
							</div>
							{{-- Letter Spacing Slider --}}
							<div class="col-lg-12 mb-2">
								<label for="letter-spacing-slider" class="form-label">Letter Spacing</label>
								<div class="slider-container">
									<div id="letter-spacing-slider" class="custom-slider"></div>
									<div class="slider-labels">
										<span>0</span>
										<span>10px</span>
									</div>
								</div>
							</div>
							{{-- Line Spacing Slider --}}
							<div class="col-lg-12 mb-2">
								<label for="line-spacing-slider" class="form-label">Line Spacing</label>
								<div class="slider-container">
									<div id="line-spacing-slider" class="custom-slider"></div>
									<div class="slider-labels">
										<span>1</span>
										<span>3</span>
									</div>
								</div>
							</div>
							{{-- Padding Slider --}}
							<div class="col-lg-12 mb-2">
								<label for="padding-slider" class="form-label">Padding</label>
								<div class="slider-container">
									<div id="padding-slider" class="custom-slider"></div>
									<div class="slider-labels">
										<span>0</span>
										<span>40px</span>
									</div>
								</div>
							</div>
							<div class="col-lg-12 mb-3">
								<button class="btn btn-danger btn-sm" id="delete-element" title="Delete the text element">Delete</button>
								<button class="btn btn-light btn-sm" id="bring-front" title="Bring the text to Front">Bring to Front</button>
								<button class="btn btn-light btn-sm" id="send-back" title="Bring the text to Back">Send to Back</button>
							</div>
						</div>
						{{-- Action Buttons --}}
						<div class="row">
							<div class="col-lg-12 mb-3">
								<button class="btn btn-success btn-block" id="preview-card" style="border-radius: 30px; padding: 12px 32px;" title="Preview the template before downloading"><i class="fa-solid fa-magnifying-glass"></i> Preview</button>
							</div>
							<div class="col-lg-12">
								<button class="invoice-action-btn" style="width:100%; display:block;" id="download-card" title="Download and Share"><i class="fas fa-download"></i> Download</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Card Preview Modal --}}
<div id="card-preview-modal" class="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Card Preview</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<img id="preview-image" src="" alt="Card Preview" style="max-width: 100%; border: 1px solid #ccc;">
			</div>
		</div>
	</div>
</div>
@endsection

@push('page_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@isset($card)
	<script>
		window.cardTemplateData = @json($card->template_data);
	</script>
@endisset
@vite('resources/js/tools/greeting-cards.js')
<style>
	.collapse-toggle-btn .collapse-icon {
		transition: transform 0.3s;
	}
	.collapse-toggle-btn[aria-expanded="false"] .collapse-icon {
		transform: rotate(-90deg);
	}
	.collapse-toggle-btn[aria-expanded="true"] .collapse-icon {
		transform: rotate(0deg);
	}
</style>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
@endpush
