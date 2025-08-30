$(document).ready(function() {
    // Add custom CSS for better range slider visibility
    const customCSS = `
        <style>
        .custom-range {
            -webkit-appearance: none;
            appearance: none;
            height: 8px;
            border-radius: 5px;
            background: #e9ecef;
            outline: none;
            border: 1px solid #ced4da;
        }
        
        .custom-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #007bff;
            cursor: pointer;
            border: 2px solid #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .custom-range::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #007bff;
            cursor: pointer;
            border: 2px solid #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .custom-range::-webkit-slider-track {
            background: linear-gradient(to right, #28a745 0%, #28a745 90%, #e9ecef 90%, #e9ecef 100%);
            border-radius: 5px;
            height: 8px;
        }
        
        .custom-range::-moz-range-track {
            background: linear-gradient(to right, #28a745 0%, #28a745 90%, #e9ecef 90%, #e9ecef 100%);
            border-radius: 5px;
            height: 8px;
            border: none;
        }
        
        .custom-range:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        
        .custom-range:hover::-webkit-slider-thumb {
            background: #0056b3;
            transform: scale(1.1);
        }
        
        .custom-range:hover::-moz-range-thumb {
            background: #0056b3;
            transform: scale(1.1);
        }
        </style>
    `;
    
    // Append CSS to head
    $('head').append(customCSS);
    
    let originalImage = null;
    let convertedImage = null;
    let originalFileName = '';
    let originalFileExtension = '';

    // Quality slider update
    $('#imageQuality').on('input', function() {
        const value = $(this).val();
        $('#qualityValue').text(value);
        
        // Update slider track color based on value
        const percentage = value + '%';
        const trackColor = value >= 80 ? '#28a745' : value >= 60 ? '#ffc107' : value >= 40 ? '#fd7e14' : '#dc3545';
        
        // Update CSS for visual feedback
        $(this).css('background', `linear-gradient(to right, ${trackColor} 0%, ${trackColor} ${percentage}, #e9ecef ${percentage}, #e9ecef 100%)`);
    });

    // File input change
    $('#imageFile').on('change', function(e) {
        const file = e.target.files[0];
        if (!file) {
            resetImageConverter();
            return;
        }

        // Validate file type
        if (!file.type.startsWith('image/')) {
            showAlert('Please select a valid image file.', 'error');
            resetImageConverter();
            return;
        }

        // Validate file size (10MB limit)
        if (file.size > 10 * 1024 * 1024) {
            showAlert('File size must be less than 10MB.', 'error');
            resetImageConverter();
            return;
        }

        // Get file extension
        originalFileName = file.name.substring(0, file.name.lastIndexOf('.'));
        originalFileExtension = file.name.substring(file.name.lastIndexOf('.') + 1).toLowerCase();

        // Create image object
        const reader = new FileReader();
        reader.onload = function(e) {
            originalImage = new Image();
            originalImage.onload = function() {
                displayOriginalImage();
                updateImageInfo();
                $('#convertImage').prop('disabled', false);
            };
            originalImage.onerror = function() {
                showAlert('Failed to load image. Please try a different file.', 'error');
                resetImageConverter();
            };
            originalImage.src = e.target.result;
        };
        reader.onerror = function() {
            showAlert('Failed to read file. Please try again.', 'error');
            resetImageConverter();
        };
        reader.readAsDataURL(file);
    });

    // Target format change
    $('#targetFormat').on('change', function() {
        const selectedFormat = $(this).val();
        const formatInfo = getFormatInfo(selectedFormat);
        
        if (originalImage && selectedFormat) {
            if (formatInfo.supported) {
                $('#convertImage').prop('disabled', false);
                showAlert(`Ready to convert to ${selectedFormat.toUpperCase()}. ${formatInfo.description}`, 'info');
            } else {
                $('#convertImage').prop('disabled', true);
                showAlert(`Converting to ${selectedFormat.toUpperCase()} is not supported in this browser. Please select PNG, JPG, or WEBP.`, 'error');
            }
        } else {
            $('#convertImage').prop('disabled', true);
        }
    });

    // Convert image
    $('#convertImage').on('click', function() {
        if (!originalImage || !$('#targetFormat').val()) {
            showAlert('Please select an image and target format.', 'error');
            return;
        }

        const targetFormat = $('#targetFormat').val();
        const quality = $('#imageQuality').val() / 100;
        const targetWidth = $('#imageWidth').val();
        const maintainAspectRatio = $('#maintainAspectRatio').is(':checked');

        // Show loading state
        const $button = $(this);
        const originalText = $button.html();
        $button.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Converting...');

        try {
            // Create canvas for conversion
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');

            // Calculate new dimensions
            let newWidth = originalImage.width;
            let newHeight = originalImage.height;

            if (targetWidth && targetWidth > 0) {
                newWidth = parseInt(targetWidth);
                if (maintainAspectRatio) {
                    newHeight = (originalImage.height * newWidth) / originalImage.width;
                }
            }

            // Set canvas dimensions
            canvas.width = newWidth;
            canvas.height = newHeight;

            // Draw image on canvas
            ctx.drawImage(originalImage, 0, 0, newWidth, newHeight);

            // Check format compatibility and get mime type
            const formatInfo = getFormatInfo(targetFormat);
            
            if (!formatInfo.supported) {
                showAlert(`Converting to ${targetFormat.toUpperCase()} is not supported in this browser. Please try PNG, JPG, or WEBP format.`, 'error');
                $button.prop('disabled', false).html(originalText);
                return;
            }

            // Check if toBlob is supported
            if (!canvas.toBlob) {
                showAlert('Canvas toBlob is not supported in this browser. Please use a modern browser.', 'error');
                $button.prop('disabled', false).html(originalText);
                return;
            }

            // Convert canvas to blob
            canvas.toBlob(function(blob) {
                if (blob) {
                    convertedImage = blob;
                    displayConvertedImage();
                    $('#downloadImage').prop('disabled', false);
                    showAlert('Image converted successfully!', 'success');
                } else {
                    showAlert(`Failed to convert to ${targetFormat.toUpperCase()}. This format may not be supported in your browser.`, 'error');
                }
                $button.prop('disabled', false).html(originalText);
            }, formatInfo.mimeType, quality);

        } catch (error) {
            console.error('Conversion error:', error);
            showAlert('Error converting image. Please try again.', 'error');
            $button.prop('disabled', false).html(originalText);
        }
    });

    // Download converted image
    $('#downloadImage').on('click', function() {
        if (!convertedImage) {
            showAlert('No converted image available.', 'error');
            return;
        }

        const targetFormat = $('#targetFormat').val();
        const downloadLink = document.createElement('a');
        downloadLink.href = URL.createObjectURL(convertedImage);
        downloadLink.download = `${originalFileName}_converted.${targetFormat}`;
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
    });

    // Clear button
    $('#clearImage').on('click', function() {
        resetImageConverter();
    });

    // Display original image
    function displayOriginalImage() {
        const $preview = $('#imagePreview');
        $preview.html(`
            <img src="${originalImage.src}" alt="Original Image" style="max-width:100%; max-height:300px; border-radius:8px;">
        `);
    }

    // Display converted image
    function displayConvertedImage() {
        const $preview = $('#imagePreview');
        const imageUrl = URL.createObjectURL(convertedImage);
        $preview.html(`
            <img src="${imageUrl}" alt="Converted Image" style="max-width:100%; max-height:300px; border-radius:8px;">
        `);
        updateConvertedImageInfo();
    }

    // Update image information
    function updateImageInfo() {
        const $info = $('#imageInfo');
        const targetFormat = $('#targetFormat').val() || 'Not selected';

        $('#originalFormat').text(originalFileExtension.toUpperCase());
        $('#fileSize').text(formatFileSize(originalImage.src.length * 0.75)); // Approximate size
        $('#imageDimensions').text(`${originalImage.width} × ${originalImage.height} px`);
        $('#targetFormatDisplay').text(targetFormat.toUpperCase());

        $info.show();
    }

    // Update converted image information
    function updateConvertedImageInfo() {
        if (convertedImage) {
            const originalSize = originalImage.src.length * 0.75;
            const convertedSize = convertedImage.size;
            const compressionRatio = ((originalSize - convertedSize) / originalSize * 100).toFixed(1);
            
            $('#fileSize').html(`
                <span class="text-muted">Original: ${formatFileSize(originalSize)}</span><br>
                <span class="text-success">Converted: ${formatFileSize(convertedSize)}</span><br>
                <small class="text-info">${compressionRatio}% smaller</small>
            `);
        }
    }

    // Reset converter
    function resetImageConverter() {
        originalImage = null;
        convertedImage = null;
        originalFileName = '';
        originalFileExtension = '';

        $('#imageFile').val('');
        $('#targetFormat').val('');
        $('#imageQuality').val(90);
        $('#qualityValue').text('90');
        $('#imageWidth').val('');
        $('#maintainAspectRatio').prop('checked', true);

        $('#imagePreview').html(`
            <div class="text-center">
                <i class="fas fa-image fa-3x text-muted mb-3"></i>
                <p class="text-muted">No image selected. Upload an image to convert.</p>
            </div>
        `);

        $('#imageInfo').hide();
        $('#convertImage').prop('disabled', true);
        $('#downloadImage').prop('disabled', true);
    }

    // Get format information and compatibility
    function getFormatInfo(format) {
        const formats = {
            'png': {
                mimeType: 'image/png',
                supported: true,
                description: 'Portable Network Graphics - Lossless compression'
            },
            'jpg': {
                mimeType: 'image/jpeg',
                supported: true,
                description: 'JPEG - Lossy compression, good for photos'
            },
            'jpeg': {
                mimeType: 'image/jpeg',
                supported: true,
                description: 'JPEG - Lossy compression, good for photos'
            },
            'webp': {
                mimeType: 'image/webp',
                supported: true, // Most modern browsers support WebP
                description: 'WebP - Modern format, good compression'
            },
            'gif': {
                mimeType: 'image/gif',
                supported: false, // Limited browser support for Canvas toBlob
                description: 'GIF - Limited browser support for conversion'
            },
            'bmp': {
                mimeType: 'image/bmp',
                supported: false, // Limited browser support
                description: 'BMP - Limited browser support for conversion'
            },
            'tiff': {
                mimeType: 'image/tiff',
                supported: false, // Limited browser support
                description: 'TIFF - Limited browser support for conversion'
            }
        };
        
        return formats[format] || formats['png'];
    }



    // Format file size
    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    // Show alert
    function showAlert(message, type = 'info') {
        const alertClass = type === 'error' ? 'alert-danger' : type === 'success' ? 'alert-success' : 'alert-info';
        const alertHtml = `
            <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                <i class="fas fa-${type === 'error' ? 'exclamation-triangle' : type === 'success' ? 'check-circle' : 'info-circle'}"></i>
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        `;
        
        // Remove existing alerts
        $('.alert').remove();
        
        // Add new alert at the top of the calculator-main
        $('.calculator-main').prepend(alertHtml);
        
        // Auto-dismiss after 5 seconds
        setTimeout(function() {
            $('.alert').fadeOut();
        }, 5000);
    }

    // Handle URL parameters for direct format conversion
    function handleUrlParameters() {
        const path = window.location.pathname;
        const formatMatch = path.match(/\/image-converter\/([a-z]+)-to-([a-z]+)/);
        
        if (formatMatch) {
            const fromFormat = formatMatch[1];
            const toFormat = formatMatch[2];
            
            // Check if the target format is supported
            const formatInfo = getFormatInfo(toFormat);
            
            // Update the target format dropdown
            const $targetOption = $(`#targetFormat option[value="${toFormat}"]`);
            if ($targetOption.length > 0 && formatInfo.supported) {
                $targetOption.prop('selected', true);
                
                // Show a helpful message
                showAlert(`Ready to convert ${fromFormat.toUpperCase()} files to ${toFormat.toUpperCase()} format. ${formatInfo.description}`, 'info');
            } else {
                showAlert(`Target format ${toFormat.toUpperCase()} is not supported in this browser. Please use PNG, JPG, or WEBP format.`, 'error');
            }
        }
    }

    // Drag and drop functionality
    const dropZone = document.getElementById('imagePreview');
    
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover'].forEach(eventName => {
        dropZone.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropZone.addEventListener(eventName, unhighlight, false);
    });

    function highlight(e) {
        dropZone.style.backgroundColor = '#e3f2fd';
        dropZone.style.borderColor = '#2196f3';
    }

    function unhighlight(e) {
        dropZone.style.backgroundColor = '#f8f9fa';
        dropZone.style.borderColor = '#dee2e6';
    }

    dropZone.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        
        if (files.length > 0) {
            const file = files[0];
            if (file.type.startsWith('image/')) {
                // Create a fake event object
                const fakeEvent = {
                    target: {
                        files: [file]
                    }
                };
                $('#imageFile')[0].files = [file];
                $('#imageFile').trigger('change');
            } else {
                showAlert('Please drop a valid image file.', 'error');
            }
        }
    }

    // Initialize URL parameter handling
    handleUrlParameters();
});
