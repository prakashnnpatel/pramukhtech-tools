<h1 class="font-size-18 font-weight-bold">Online Free Screen Recorder with Audio - Download FREE</h1>
<p>Easily record your screen with audio directly from your browser. Perfect for tutorials, presentations, meetings, and gameplay. <br/>No sign-up required, no watermarks - just hit record, save your video, and download instantly for <strong>FREE!</strong></p>
<div class="card">
	<div class="card-body">
		<div class="row">			
			<div class="col-lg-12 mb-3">
				<button type="button" id="startRecording" class="th-btn mr-2">Start Recording</button>
				<button type="button" id="stopRecording" class="th-btn mr-2" disabled style="background: #E2E8FA;color: #000;">Stop Recording</button>
				<button type="button" id="downloadRecording" class="th-btn" disabled style="background: #E2E8FA;color: #000;">Download Video</button>
			</div>
			<div class="col-lg-12">
				<video id="recordedVideo" style="width:100%; display:none;" controls></video>
			</div>
		</div>
	</div>
</div>
@push('page_scripts')
<script src="https://cdn.WebRTC-Experiment.com/RecordRTC.js"></script>
@endpush
