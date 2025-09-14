@extends('layouts.app')

@push('page_css')
@vite('resources/css/jquery-ui.css')
@vite('resources/css/greeting-cards.css')
@endpush

@section('content')
<div class="container-fluid mt-4">
	<div class="row">
		<!-- Sidebar for controls -->
		<div class="col-md-3 mb-3">
			<div class="card p-3">
				<h5>Card Elements</h5>
				<button class="btn btn-primary btn-sm mb-2" id="add-text">Add Text</button>
				<button class="btn btn-secondary btn-sm mb-2" id="add-image">Add Image</button>
				<hr>
				<div id="editor-controls" style="display:none;">
					<h6>Edit Text</h6>
					<div class="mb-2">
						<label>Font:</label>
						<select id="font-family" class="form-select form-select-sm">
							<option value="Arial">Arial</option>
							<option value="Times New Roman">Times New Roman</option>
							<option value="Comic Sans MS">Comic Sans</option>
							<option value="Georgia">Georgia</option>
							<option value="Courier New">Courier New</option>
						</select>
					</div>
					<div class="mb-2">
						<label>Size:</label>
						<input type="number" id="font-size" class="form-control form-control-sm" min="10" max="80" value="20">
					</div>
					<div class="mb-2">
						<label>Color:</label>
						<input type="color" id="font-color" class="form-control form-control-sm" value="#222222">
					</div>
					<div class="mb-2 d-flex flex-wrap gap-1 align-items-center">
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
					<div class="mb-2">
						<button class="btn btn-danger btn-sm" id="delete-element">Delete</button>
						<button class="btn btn-light btn-sm" id="bring-front">Bring to Front</button>
						<button class="btn btn-light btn-sm" id="send-back">Send to Back</button>
					</div>
					<hr>
				</div>
				<h6>Actions</h6>
				<button class="btn btn-success btn-block mb-2" id="preview-card">Preview</button>
				<button class="btn btn-info btn-block" id="download-card">Download</button>
			</div>
			@isset($card)
			<div class="card mt-3 p-2">
				<h6 class="mb-1">Template:</h6>
				<div><strong>{{ $card->title }}</strong></div>
				<div class="small text-muted">{{ $card->description }}</div>
			</div>
			@endisset
		</div>
		<!-- Editor Canvas -->
		<div class="col-md-9">
			<div id="card-editor-wrapper" class="d-flex justify-content-center align-items-center" style="min-height: 600px;">
				<div id="card-canvas" style="position: relative; width: 600px; height: 400px; background: #fff; border: 1px solid #ccc; overflow: hidden;">
					<!-- Card elements (text/images) will be added here dynamically -->
				</div>
			</div>
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
@endpush
