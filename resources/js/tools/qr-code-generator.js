const qrTool = function() {
    const $text = $('#qrText');
    const $size = $('#qrSize');
    const $margin = $('#qrMargin');
    const $ecc = $('#qrECC');
    const $format = $('#qrFormat');
    const $fg = $('#qrFg');
    const $bg = $('#qrBg');
    const $logoFile = $('#qrLogoFile');

    const $generate = $('#qrGenerate');
    const $download = $('#qrDownload');
    const $clear = $('#qrClear');
    const $preview = $('#qrPreview');

    let lastDataUrl = '';

    function buildFormData() {
        const fd = new FormData();
        fd.append('text', $text.val());
        fd.append('size', $size.val());
        fd.append('margin', $margin.val());
        fd.append('ecc', $ecc.val());
        fd.append('format', $format.val());
        fd.append('fg', $fg.val().replace('#',''));
        fd.append('bg', $bg.val().replace('#',''));
        if ($logoFile[0].files && $logoFile[0].files[0]) {
            fd.append('logo', $logoFile[0].files[0]);
        }
        return fd;
    }

    async function generate() {
        const fd = buildFormData();
        $preview.html('<span class="text-muted">Generating...</span>');
        $download.prop('disabled', true);
        try {
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const res = await fetch('/qr-code-generator/generate', {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'X-CSRF-TOKEN': token },
                body: fd
            });
            if (!res.ok) throw new Error('Failed');
            const data = await res.json();
            lastDataUrl = data.dataUrl;
            if (data.format === 'svg') {
                const img = document.createElement('img');
                img.src = lastDataUrl;
                img.alt = 'QR code';
                img.style.maxWidth = '100%';
                $preview.empty().append(img);
            } else {
                const img = document.createElement('img');
                img.src = lastDataUrl;
                img.alt = 'QR code';
                img.style.maxWidth = '100%';
                $preview.empty().append(img);
            }
            $download.prop('disabled', false);
        } catch (e) {
            $preview.html('<span class="text-danger">Error generating QR code.</span>');
        }
    }

    function download() {
        if (!lastDataUrl) return;
        const a = document.createElement('a');
        const ext = $format.val() === 'svg' ? 'svg' : 'png';
        a.href = lastDataUrl;
        a.download = `qr-code.${ext}`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }

    function clearAll() {
        $text.val('');
        lastDataUrl = '';
        $preview.html('<span class="text-muted">No QR code yet. Click Generate.</span>');
        $download.prop('disabled', true);
    }

    function bind() {
        $generate.on('click', generate);
        $download.on('click', download);
        $clear.on('click', clearAll);
        // Live update on input changes (debounced)
        let t;
        $('#qrText, #qrSize, #qrMargin, #qrECC, #qrFormat, #qrFg, #qrBg, #qrLogoFile').on('input change', function() {
            clearTimeout(t);
            t = setTimeout(generate, 350);
        });
    }

    function init() {
        bind();
        // initial preview
        generate();
    }

    init();
};

$(function() { qrTool(); });

window.qrTool = qrTool;


