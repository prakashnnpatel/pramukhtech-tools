$(document).ready(function() {
    let generatedBarcodes = [];
    let pdfUrl = '';

    // Initialize tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();

    // Handle sticker size change
    $('#stickerSize').on('change', function() {
        const size = $(this).val();
        switch(size) {
            case 'small':
                $('#barcodeWidth').val(25);
                $('#barcodeHeight').val(15);
                break;
            case 'medium':
                $('#barcodeWidth').val(40);
                $('#barcodeHeight').val(25);
                break;
            case 'large':
                $('#barcodeWidth').val(60);
                $('#barcodeHeight').val(40);
                break;
        }
    });

    // Sheet presets for rows/cols and suggested barcode sizes
    $('#sheetPreset').on('change', function() {
        const preset = $(this).val();
        if (preset === 'a4_3x8') {
            $('#rowsPerPage').val(8);
            $('#columnsPerPage').val(3);
            $('#stickerSize').val('large');
            $('#barcodeWidth').val(60);
            $('#barcodeHeight').val(30);
        } else if (preset === 'a4_3x7') {
            $('#rowsPerPage').val(7);
            $('#columnsPerPage').val(3);
            $('#stickerSize').val('medium');
            $('#barcodeWidth').val(50);
            $('#barcodeHeight').val(25);
        } else if (preset === 'a4_5x13') {
            $('#rowsPerPage').val(13);
            $('#columnsPerPage').val(5);
            $('#stickerSize').val('small');
            $('#barcodeWidth').val(30);
            $('#barcodeHeight').val(18);
        }
    });

    // Handle custom sticker size
    $('#barcodeWidth, #barcodeHeight').on('input', function() {
        if ($(this).val() > 0) {
            $('#stickerSize').val('custom');
        }
    });

    // Toggle input mode (manual vs range)
    $('#inputMode').on('change', function() {
        const mode = $(this).val();
        if (mode === 'manual') {
            $('.input-mode-manual').show();
            $('.input-mode-range').hide();
        } else {
            $('.input-mode-manual').hide();
            $('.input-mode-range').show();
        }
    });

    // Validate barcode data
    function validateBarcodeData() {
        const mode = $('#inputMode').val();
        if (mode === 'manual') {
            const data = $('#barcodeData').val().trim();
            if (!data) {
                showAlert('Please enter barcode data.', 'warning');
                return false;
            }

            const lines = data.split('\n').filter(line => line.trim() !== '');
            if (lines.length === 0) {
                showAlert('Please enter at least one barcode.', 'warning');
                return false;
            }

            if (lines.length > 50) {
                showAlert('Maximum 50 barcodes allowed.', 'warning');
                return false;
            }

            // Validate barcode type requirements
            const barcodeType = $('#barcodeType').val();
            for (let i = 0; i < lines.length; i++) {
                const line = lines[i].trim();
                if (!validateBarcodeFormat(line, barcodeType)) {
                    showAlert(`Invalid format for barcode ${i + 1}: "${line}"`, 'warning');
                    return false;
                }
            }
            return true;
        } else {
            const start = parseInt($('#rangeStart').val(), 10);
            const end = parseInt($('#rangeEnd').val(), 10);
            const padLen = parseInt($('#padLength').val(), 10) || 0;
            const prefix = ($('#prefix').val() || '').toString();
            const suffix = ($('#suffix').val() || '').toString();

            if (isNaN(start) || isNaN(end)) {
                showAlert('Please enter a valid numeric range.', 'warning');
                return false;
            }
            if (end < start) {
                showAlert('End number must be greater than or equal to start.', 'warning');
                return false;
            }
            const count = (end - start + 1);
            if (count > 50) {
                showAlert('Maximum 50 barcodes allowed in range.', 'warning');
                return false;
            }

            // Build a preview-only array and validate against type
            const barcodeType = $('#barcodeType').val();
            for (let n = start; n <= end; n++) {
                let core = n.toString();
                if (padLen > 0) {
                    core = core.padStart(padLen, '0');
                }
                const candidate = prefix + core + suffix;
                if (!validateBarcodeFormat(candidate, barcodeType)) {
                    showAlert(`Invalid format in range value: "${candidate}"`, 'warning');
                    return false;
                }
            }
            return true;
        }
    }

    // Validate barcode format based on type
    function validateBarcodeFormat(data, type) {
        const cleanData = data.replace(/[^0-9A-Za-z]/g, '');
        
        switch(type) {
            case 'EAN13':
                return /^\d{13}$/.test(cleanData);
            case 'EAN8':
                return /^\d{8}$/.test(cleanData);
            case 'UPC':
                return /^\d{12}$/.test(cleanData);
            case 'UPCE':
                return /^\d{8}$/.test(cleanData);
            case 'CODE39':
                return /^[0-9A-Z\-\.\/\+\s]+$/.test(data);
            case 'CODE128':
                return /^[\x00-\x7F]+$/.test(data);
            default:
                return true;
        }
    }

    // Generate barcodes
    $('#generateBarcodes').on('click', function() {
        if (!validateBarcodeData()) {
            return;
        }

        const button = $(this);
        const originalText = button.html();
        
        button.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Generating...');

        // Build final data payload
        let payloadBarcodes = '';
        if ($('#inputMode').val() === 'manual') {
            payloadBarcodes = $('#barcodeData').val();
        } else {
            const start = parseInt($('#rangeStart').val(), 10);
            const end = parseInt($('#rangeEnd').val(), 10);
            const padLen = parseInt($('#padLength').val(), 10) || 0;
            const prefix = ($('#prefix').val() || '').toString();
            const suffix = ($('#suffix').val() || '').toString();
            const values = [];
            for (let n = start; n <= end; n++) {
                let core = n.toString();
                if (padLen > 0) core = core.padStart(padLen, '0');
                values.push(prefix + core + suffix);
            }
            payloadBarcodes = values.join('\n');
        }

        const formData = {
            barcodeType: $('#barcodeType').val(),
            barcodeWidth: $('#barcodeWidth').val(),
            barcodeHeight: $('#barcodeHeight').val(),
            showText: $('#showText').val(),
            textSize: $('#textSize').val(),
            barcodeData: payloadBarcodes,
            rowsPerPage: $('#rowsPerPage').val(),
            columnsPerPage: $('#columnsPerPage').val(),
            _token: $('meta[name="csrf-token"]').attr('content')
        };

        $.ajax({
            url: '/barcode-sticker-generator/generate',
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    generatedBarcodes = response.barcodes;
                    pdfUrl = response.pdfUrl;
                    
                    // Show preview
                    showPreview(response.preview);
                    
                    // Update stats
                    $('#barcodeCount').text(response.barcodeCount);
                    $('#pageCount').text(response.pageCount);
                    $('#barcodeStats').show();
                    
                    // Enable download button
                    $('#downloadBarcodes').prop('disabled', false);
                    
                    showAlert('Barcode stickers generated successfully!', 'success');
                } else {
                    showAlert(response.message || 'Failed to generate barcodes.', 'error');
                }
            },
            error: function(xhr) {
                let message = 'An error occurred while generating barcodes.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                }
                showAlert(message, 'error');
            },
            complete: function() {
                button.prop('disabled', false).html(originalText);
            }
        });
    });

    // Show preview
    function showPreview(previewData) {
        const preview = $('#barcodePreview');
        preview.empty();

        if (previewData && previewData.length > 0) {
            const container = $('<div class="row g-2"></div>');
            
            previewData.slice(0, 6).forEach(function(barcode) {
                const col = $('<div class="col-4"></div>');
                const barcodeDiv = $('<div class="text-center p-2 border rounded"></div>');
                
                const img = $('<img>', {
                    src: barcode.image,
                    alt: barcode.data,
                    class: 'img-fluid',
                    style: 'max-height: 60px;'
                });
                
                barcodeDiv.append(img);
                
                if ($('#showText').val() == '1') {
                    barcodeDiv.append($('<div class="small text-muted mt-1"></div>').text(barcode.data));
                }
                
                col.append(barcodeDiv);
                container.append(col);
            });
            
            preview.append(container);
            
            if (previewData.length > 6) {
                preview.append($('<div class="text-center mt-2 text-muted small"></div>')
                    .text(`+ ${previewData.length - 6} more barcodes...`));
            }
        } else {
            preview.html('<span class="text-muted">No preview available.</span>');
        }
    }

    // Download PDF
    $('#downloadBarcodes').on('click', function() {
        if (pdfUrl) {
            const link = document.createElement('a');
            link.href = pdfUrl;
            link.download = 'barcode-stickers.pdf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        } else {
            showAlert('No PDF available for download.', 'warning');
        }
    });

    // Clear all
    $('#clearBarcodes').on('click', function() {
        $('#barcodeData').val('');
        $('#barcodePreview').html('<span class="text-muted">No barcodes yet. Click Generate Stickers.</span>');
        $('#barcodeStats').hide();
        $('#downloadBarcodes').prop('disabled', true);
        generatedBarcodes = [];
        pdfUrl = '';
        
        // Reset to default values
        $('#barcodeType').val('CODE128');
        $('#barcodeWidth').val(40);
        $('#barcodeHeight').val(25);
        $('#stickerSize').val('medium');
        $('#showText').val('1');
        $('#textSize').val('10');
        $('#rowsPerPage').val('10');
        $('#columnsPerPage').val('3');
    });

    // Show alert messages
    function showAlert(message, type) {
        const alertClass = type === 'error' ? 'alert-danger' : 
                          type === 'warning' ? 'alert-warning' : 'alert-success';
        
        const alert = $(`
            <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `);
        
        $('.calculator-main').prepend(alert);
        
        // Auto-dismiss after 5 seconds
        setTimeout(function() {
            alert.alert('close');
        }, 5000);
    }
    $('#addSampleData').on('click', function() {
        const sampleData = `1234567890123
9876543210987
5551234567890
1234567890128
9876543210986
5551234567891
1234567890129
9876543210985
5551234567892
1234567890127`;
        
        $('#barcodeData').val(sampleData);
    });

    // Character count for barcode data
    $('#barcodeData').on('input', function() {
        const lines = $(this).val().split('\n').filter(line => line.trim() !== '');
        const count = lines.length;
        
        if (count > 50) {
            $(this).addClass('is-invalid');
            $('.form-text').html(`<span class="text-danger">Too many lines (${count}/50). Please reduce the number of barcodes.</span>`);
        } else {
            $(this).removeClass('is-invalid');
            $('.form-text').html(`Enter one barcode per line. Maximum 50 barcodes allowed. (${count}/50)`);
        }
    });
});
