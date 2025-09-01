document.addEventListener('DOMContentLoaded', function () {
	const form = document.getElementById('splitPdfForm');
	const resultDiv = document.getElementById('splitPdfResult');

	if (form) {
		form.addEventListener('submit', function (e) {
			e.preventDefault();
			resultDiv.innerHTML = '';

			const formData = new FormData(form);

			fetch('/split-pdf/split', {
				method: 'POST',
				headers: {
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				},
				body: formData
			})
			.then(async response => {
				if (!response.ok) {
					let errorMsg = 'Network response was not ok';
					try {
						const data = await response.json();
						if (data.error) errorMsg = data.error;
					} catch {}
					throw new Error(errorMsg);
				}
				return response.blob();
			})
			.then(blob => {
				const url = window.URL.createObjectURL(blob);
				const a = document.createElement('a');
				a.href = url;
				a.download = 'split-pdf.pdf';
				document.body.appendChild(a);
				a.click();
				a.remove();
				window.URL.revokeObjectURL(url);
				resultDiv.innerHTML = '<div class="alert alert-success" id="splitPdfSuccessAlert">Your PDF has been split and is ready for download!</div>';
				setTimeout(() => {
					const alert = document.getElementById('splitPdfSuccessAlert');
					if (alert) alert.remove();
				}, 4000);
			})
			.catch(error => {
				resultDiv.innerHTML = `<div class="alert alert-danger">Error: ${error.message}</div>`;
			});
		});
	}
});
