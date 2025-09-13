$(function() {
    let originalImage = null;
    let resizedDataUrl = null;
    const $imgUpload = $('#imgUpload');
    const $imgDropArea = $('#imgDropArea');
    const $resizeMode = $('#resizeMode');
    const $resizeWidth = $('#resizeWidth');
    const $resizeHeight = $('#resizeHeight');
    const $resizeBtn = $('#resizeBtn');
    const $downloadBtn = $('#downloadBtn');
    const $imgPreview = $('#imgPreview');
    const $targetSize = $('#targetSize');
    const $targetSizeUnit = $('#targetSizeUnit');

    function resetPreview() {
        $imgPreview.html('<span class="text-muted">No image uploaded.</span>');
        $downloadBtn.prop('disabled', true);
        originalImage = null;
        resizedDataUrl = null;
    }

    function showPreview(img) {
        $imgPreview.html(img);
    }

    function handleFile(file) {
        if (!file.type.startsWith('image/')) {
            resetPreview();
            return;
        }
        // Show file name in drop area
        $('#dropText').text(file.name);
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = new Image();
            img.onload = function() {
                originalImage = img;
                $resizeWidth.val(img.width);
                $resizeHeight.val(img.height);
                showPreview(img);
            };
            img.src = e.target.result;
            img.style.maxWidth = '100%';
            img.style.maxHeight = '400px';
        };
        reader.readAsDataURL(file);
    }

    // Drag & drop and click-to-upload logic (like crop-image)
    $imgDropArea.on('dragover', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('dragover');
    });
    $imgDropArea.on('dragleave', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragover');
    });
    $imgDropArea.on('drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragover');
        if (e.originalEvent.dataTransfer.files && e.originalEvent.dataTransfer.files[0]) {
            handleFile(e.originalEvent.dataTransfer.files[0]);
        }
    });
    $imgDropArea.on('click', function(e) {
        if (e.target.id !== 'imgUpload') {
            $imgUpload.trigger('click');
        }
    });
    $imgUpload.on('change', function(e) {
        if (e.target.files && e.target.files[0]) {
            handleFile(e.target.files[0]);
        }
    });

    $resizeMode.on('change', function() {
        if (!originalImage) return;
        if ($resizeMode.val() === 'percent') {
            $resizeWidth.val(100);
            $resizeHeight.val(100);
        } else {
            $resizeWidth.val(originalImage.width);
            $resizeHeight.val(originalImage.height);
        }
    });

    $resizeBtn.on('click', function() {
        if (!originalImage) return;
        let width = parseInt($resizeWidth.val());
        let height = parseInt($resizeHeight.val());
        if ($resizeMode.val() === 'percent') {
            width = Math.round(originalImage.width * width / 100);
            height = Math.round(originalImage.height * height / 100);
        }
        if (width < 1 || height < 1) return;
        const canvas = document.createElement('canvas');
        canvas.width = width;
        canvas.height = height;
        const ctx = canvas.getContext('2d');
        ctx.drawImage(originalImage, 0, 0, width, height);

        // If target size is set, compress to that size (JPEG)
        let target = parseFloat($targetSize.val());
        let unit = $targetSizeUnit.val();
        let targetBytes = null;
        if (target && !isNaN(target)) {
            if (unit === 'mb') {
                targetBytes = target * 1024 * 1024;
            } else {
                targetBytes = target * 1024;
            }
        }
        if (targetBytes) {
            let minQ = 0.1, maxQ = 0.95, step = 0.02;
            let dataUrl, sizeBytes, lastGoodUrl = null;
            for (let q = maxQ; q >= minQ; q -= step) {
                dataUrl = canvas.toDataURL('image/jpeg', q);
                sizeBytes = Math.round((dataUrl.length * 3 / 4));
                if (sizeBytes <= targetBytes) {
                    lastGoodUrl = dataUrl;
                    break;
                }
                lastGoodUrl = dataUrl; // fallback to lowest quality
            }
            resizedDataUrl = lastGoodUrl;
        } else {
            // Default: PNG (lossless)
            resizedDataUrl = canvas.toDataURL('image/png');
        }
        const img = new Image();
        img.src = resizedDataUrl;
        img.style.maxWidth = '100%';
        img.style.maxHeight = '400px';
        showPreview(img);
        $downloadBtn.prop('disabled', false);
    });

    $downloadBtn.on('click', function() {
        if (!resizedDataUrl) return;
        const a = document.createElement('a');
        // Use .jpg if compressed, else .png
        let ext = 'png';
        if ($targetSize.val() && !isNaN(parseFloat($targetSize.val()))) ext = 'jpg';
        a.href = resizedDataUrl;
        a.download = 'ToolHubspot-resized-image.' + ext;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });

    resetPreview();
});
