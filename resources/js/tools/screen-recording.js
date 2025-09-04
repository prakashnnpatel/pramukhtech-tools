const startRecordingButton = $("#startRecording");
const stopRecordingButton = $("#stopRecording");
const downloadRecordingButton = $("#downloadRecording");
const recordedVideo = $("#recordedVideo")[0];

let recorder;
const recordedChunks = [];

startRecordingButton.on("click", () => {
	navigator.mediaDevices.getUserMedia({ audio: true })
		.then((audioStream) => {
			navigator.mediaDevices.getDisplayMedia({ video: true })
				.then((screenStream) => {
					$("#startRecording").hide();
					$("#stopRecording").show();
					//$("#downloadRecording").show();
					// Combine audio and screen streams
					const combinedStream = new MediaStream([...audioStream.getTracks(), ...screenStream.getTracks()]);

					recorder = new RecordRTC(combinedStream, {
						type: 'video',
						mimeType: 'video/webm',
					});

					recorder.startRecording();
					startRecordingButton.prop("disabled", true);
					stopRecordingButton.prop("disabled", false);
				})
				.catch((error) => {
					//console.error("Error accessing screen:", error);
				});
		})
		.catch((error) => {
			//console.error("Error accessing microphone:", error);
		});
});

stopRecordingButton.on("click", () => {
	if (recorder) {
		recorder.stopRecording(() => {
			const blob = recorder.getBlob();
			const videoURL = window.URL.createObjectURL(blob);

			recordedVideo.src = videoURL;
			recordedVideo.style.display = "block";
			downloadRecordingButton.prop("disabled", false);
			$("#startRecording").show();
			$("#stopRecording").hide();
			$("#downloadRecording").show();
		});
		startRecordingButton.prop("disabled", false);
		stopRecordingButton.prop("disabled", true);
	}
});

downloadRecordingButton.on("click", () => {
	const a = document.createElement("a");
	a.style.display = "none";
	document.body.appendChild(a);

	a.href = recordedVideo.src;
	//a.download = "recorded-video.webm";
	a.download = "toolHubspot-recorded-video.mp4";
	a.click();

	document.body.removeChild(a);
});