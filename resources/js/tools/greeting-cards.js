// --- Text Style Controls ---
$(document).on('click', '#bold-btn', function() {
	if (window.selectedElement) {
		let fontWeight = window.selectedElement.css('font-weight');
		window.selectedElement.css('font-weight', (fontWeight === 'bold' || fontWeight >= 600) ? 'normal' : 'bold');
	}
});

$(document).on('click', '#italic-btn', function() {
	if (window.selectedElement) {
		let fontStyle = window.selectedElement.css('font-style');
		window.selectedElement.css('font-style', fontStyle === 'italic' ? 'normal' : 'italic');
	}
});

$(document).on('click', '#underline-btn', function() {
	if (window.selectedElement) {
		let textDecoration = window.selectedElement.css('text-decoration-line');
		window.selectedElement.css('text-decoration', textDecoration === 'underline' ? 'none' : 'underline');
	}
});

$(document).on('click', '#align-left-btn', function() {
	if (window.selectedElement) {
		window.selectedElement.css('text-align', 'left');
	}
});

$(document).on('click', '#align-center-btn', function() {
	if (window.selectedElement) {
		window.selectedElement.css('text-align', 'center');
	}
});


$(document).on('click', '#align-right-btn', function() {
	if (window.selectedElement) {
		window.selectedElement.css('text-align', 'right');
	}
});

// Bullet List Toggle
$(document).on('click', '#bullet-list-btn', function() {
	if (window.selectedElement && window.selectedElement.hasClass('draggable-text')) {
		let $el = window.selectedElement;
		let html = $el.html();
		// If already a list, remove list
		if ($el.data('is-bullet-list')) {
			// Remove <ul><li>...</li></ul> and convert to plain text with <br>
			let items = $el.find('li').map(function(){ return $(this).text(); }).get();
			$el.html(items.join('<br>'));
			$el.data('is-bullet-list', false);
		} else {
			// Convert lines to bullet list
			let lines = html.replace(/<div>|<br>/gi, '\n').replace(/<[^>]+>/g, '').split(/\n|\r/).filter(Boolean);
			if (lines.length === 0) lines = [$el.text()];
			let ul = $('<ul style="padding-left: 1.2em; margin:0; list-style-type: disc;"></ul>');
			lines.forEach(function(line){ ul.append($('<li></li>').text(line)); });
			$el.html(ul.prop('outerHTML'));
			$el.data('is-bullet-list', true);
		}
	}
});

// Use jQuery UI draggable if available for .draggable-text and .draggable-img
function makeDraggable($el) {
	if (typeof $el.draggable === 'function') {
		$el.draggable({
			containment: '#card-canvas',
			scroll: false
		});
	} else {
		// fallback: simple mouse drag
		var isDragging = false, startX, startY, origX, origY;
		$el.on('mousedown', function(e) {
			isDragging = true;
			startX = e.pageX;
			startY = e.pageY;
			origX = parseInt($el.css('left'));
			origY = parseInt($el.css('top'));
			$el.css('z-index', 1000);
			e.preventDefault();
		});
		$(document).on('mousemove.draggable', function(e) {
			if (isDragging) {
				var dx = e.pageX - startX;
				var dy = e.pageY - startY;
				$el.css({ left: origX + dx, top: origY + dy });
			}
		}).on('mouseup.draggable', function() {
			isDragging = false;
			$el.css('z-index', 10);
		});
	}
}

if (typeof window.jQuery === 'undefined') {
	alert('jQuery is not loaded. Please ensure jQuery is included before this script.');
}

$(document).ready(function() {
	// Main Canvas Border Controls
	function updateMainCanvasBorder() {
		var color = $('#main-canvas-border-color').val();
		var width = $('#main-canvas-border-width').val();
		var style = $('#main-canvas-border-style').val();
		// Remove any existing border style first to avoid conflicts
		$('#card-canvas').css({
			'border-color': '',
			'border-width': '',
			'border-style': ''
		});
		
		// Only apply if not 'none' and width > 0
		if (style !== 'none' && parseInt(width) > 0) {
			$('#card-canvas').css('border', width + 'px ' + style + ' ' + color);
		} else {
			$('#card-canvas').css('border', 'none');
		}
	}

	$('#main-canvas-border-color, #main-canvas-border-width, #main-canvas-border-style').on('input change', function() {
		updateMainCanvasBorder();
	});
	// Set initial border on page load (after DOM ready)
	setTimeout(updateMainCanvasBorder, 0);
	// Main Canvas Background Color Picker
	$('#main-canvas-bg-color').on('input change', function() {
		var color = $(this).val();
		$('#card-canvas').css('background', color);
	});
	// --- Letter Spacing Slider ---
	$("#letter-spacing-slider").slider({
		range: "min",
		value: 0,
		min: 0,
		max: 10,
		step: 0.1,
		slide: function(event, ui) {
			if (window.selectedElement) {
				window.selectedElement.css('letter-spacing', ui.value + 'px');
			}
		}
	});
	// --- Line Spacing Slider ---
	$("#line-spacing-slider").slider({
		range: "min",
		value: 1,
		min: 1,
		max: 3,
		step: 0.05,
		slide: function(event, ui) {
			if (window.selectedElement) {
				window.selectedElement.css('line-height', ui.value);
			}
		}
	});
	// --- Padding Slider ---
	$("#padding-slider").slider({
		range: "min",
		value: 0,
		min: 0,
		max: 40,
		step: 1,
		slide: function(event, ui) {
			if (window.selectedElement) {
				window.selectedElement.css('padding', ui.value + 'px');
			}
		}
	});
	// Show highlight on hover for images only (preserve user border)
	$(document).on('mouseenter', '.draggable-img', function() {
		$(this).css('outline', '2px solid #667eea');
	});
	$(document).on('mouseleave', '.draggable-img', function() {
		$(this).css('outline', '');
	});

	// Add focus/selected class for .draggable-text
	$(document).on('mousedown click', '.draggable-text', function(e) {
		$('.draggable-text').removeClass('selected');
		$(this).addClass('selected');
		// Make editable and focus so user can type
		$(this).attr('contenteditable', 'true').focus();
		// Move cursor to end of content in text box
		var el = this;
		if (window.getSelection && document.createRange) {
			var range = document.createRange();
			range.selectNodeContents(el);
			range.collapse(false);
			var sel = window.getSelection();
			sel.removeAllRanges();
			sel.addRange(range);
		}
	});
	// Remove 'selected' class when clicking outside any .draggable-text
	$(document).on('mousedown', function(e) {
		if (!$(e.target).closest('.draggable-text').length) {
			$('.draggable-text').removeClass('selected');
		}
	});
	$(document).on('blur', '.draggable-text', function() {
		$(this).removeClass('selected');
	});
	// Helper: Make image resizable (jQuery UI or fallback)
	function makeResizable($img) {
	// Remove all other handles
	$('.image-action-wrapper').remove();	
	// Add handles only to the clicked image
	   if ($img.next('.image-action-wrapper').length === 0) {
		   var $imageActionHandle = $('<div class="image-action-wrapper"></div>');
		   var $resizeHandle = $('<div class="resize-handle" title="Resize image"></div>');
		   var $rotateHandle = $('<div class="rotate-handle" title="Rotate image"></div>');
		   var $deleteHandle = $('<div class="delete-handle" title="Delete image"></div>');
		   // Border/Radius controls (now in a flex row)
		   var $controlsRow = $('<div class="img-border-controls" style="display:flex;align-items:center;gap:6px;margin-left:8px;"></div>');
		   var $radiusInput = $('<input type="number" min="0" max="100" value="'+(parseInt($img.css('border-radius'))||0)+'" class="img-radius-input" title="Radius (px)" style="width:38px;">');
		   var $borderColor = $('<input type="color" value="#'+((($img.css('border-color')||'#000').replace(/rgb\\((\\d+), (\\d+), (\\d+)\\)/, function(m,r,g,b){return ((1<<24)+(parseInt(r)<<16)+(parseInt(g)<<8)+parseInt(b)).toString(16).slice(1);}) ).replace('#',''))+'" class="img-border-color" title="Border Color" style="width:28px; height:28px;">');
		   var borderWidth = parseInt($img.css('border-width'))||1;
		   var $borderWidth = $('<input type="number" min="0" max="20" value="'+borderWidth+'" class="img-border-width" title="Border Width (px)" style="width:32px;">');
		   var borderStyle = $img.css('border-style')||'solid';
		   var $borderStyle = $('<select class="img-border-style" title="Border Style" style="width:60px;">'+
			   '<option value="solid">Solid</option><option value="dashed">Dashed</option><option value="dotted">Dotted</option><option value="double">Double</option><option value="groove">Groove</option><option value="ridge">Ridge</option><option value="inset">Inset</option><option value="outset">Outset</option><option value="none">None</option>'+
		   '</select>');
		   $borderStyle.val(borderStyle);
		   $controlsRow.append($radiusInput, $borderColor, $borderWidth, $borderStyle);
		   // Wrap the image with the parent div
		   $img.after($imageActionHandle);
		   $('.image-action-wrapper').append($resizeHandle, $rotateHandle, $deleteHandle, $controlsRow);

		   $img.css('position', 'absolute');
		   $img.parent().css('position', 'relative');
			// Position the handles at the bottom right of the image
			   function updateHandlePosition() {
				   var imgOffset = $img.position();
				   var imgWidth = $img.outerWidth();
				   var imgHeight = $img.outerHeight();
				   $resizeHandle.css({
					   left: imgOffset.left + imgWidth - $resizeHandle.outerWidth()/2 + 'px',
					   top: imgOffset.top + imgHeight - $resizeHandle.outerHeight()/2 + 10 + 'px',
					   position: 'absolute'
				   });
				   $rotateHandle.css({
					   left: imgOffset.left + imgWidth - $rotateHandle.outerWidth()/2 - 28 + 'px',
					   top: imgOffset.top + imgHeight - $rotateHandle.outerHeight()/2 + 10 + 'px',
					   position: 'absolute'
				   });
				   $deleteHandle.css({
					   left: imgOffset.left + imgWidth - $deleteHandle.outerWidth()/2 - 56 + 'px',
					   top: imgOffset.top + imgHeight - $deleteHandle.outerHeight()/2 + 10 + 'px',
					   position: 'absolute'
				   });
				   // Controls row: always static in flex, no need to position
			   }
		   // Border/Radius controls logic
		   $radiusInput.on('input change', function() {
			   $img.css('border-radius', $(this).val() + 'px');
		   });
		   $borderColor.on('input change', function() {
			   var color = $(this).val();
			   var width = $borderWidth.val() || 1;
			   var style = $borderStyle.val() || 'solid';
			   $img.css('border', width + 'px ' + style + ' ' + color);
		   });
		   $borderWidth.on('input change', function() {
			   var width = $(this).val() || 1;
			   var color = $borderColor.val();
			   var style = $borderStyle.val() || 'solid';
			   $img.css('border', width + 'px ' + style + ' ' + color);
		   });
		   $borderStyle.on('input change', function() {
			   var style = $(this).val() || 'solid';
			   var width = $borderWidth.val() || 1;
			   var color = $borderColor.val();
			   $img.css('border', width + 'px ' + style + ' ' + color);
		   });
		   // Delete logic
		   $deleteHandle.on('mousedown', function(e) {
			   $img.remove();
			   $imageActionHandle.remove();
			   e.preventDefault();
			   e.stopPropagation();
		   });
			updateHandlePosition();
			// Update handle position on resize or drag
			$img.on('resize move', updateHandlePosition);
			var observer = new MutationObserver(updateHandlePosition);
			observer.observe($img[0], { attributes: true, attributeFilter: ['style', 'width', 'height'] });
			var resizing = false, startX, startY, startW, startH;
			$resizeHandle.on('mousedown', function(e) {
				resizing = true;
				startX = e.pageX; startY = e.pageY;
				startW = $img.width(); startH = $img.height();
				e.preventDefault();
				e.stopPropagation();
			});
			$(document).on('mousemove.resizer', function(e) {
				if (resizing) {
					var dx = e.pageX - startX;
					var dy = e.pageY - startY;
					var ratio = startW / startH;
					var newW = Math.max(30, startW + dx);
					var newH = Math.max(30, newW / ratio);
					$img.width(newW).height(newH);
					updateHandlePosition();
				}
			}).on('mouseup.resizer', function() {
				resizing = false;
			});
			// Rotate logic
			var rotating = false, rotateStartX, rotateStartY, startAngle = 0;
			$rotateHandle.on('mousedown', function(e) {
				rotating = true;
				var offset = $img.offset();
				var centerX = offset.left + $img.outerWidth()/2;
				var centerY = offset.top + $img.outerHeight()/2;
				rotateStartX = e.pageX - centerX;
				rotateStartY = e.pageY - centerY;
				var transform = $img.css('transform');
				if (transform && transform !== 'none') {
					var values = transform.split('(')[1].split(')')[0].split(',');
					var a = values[0], b = values[1];
					startAngle = Math.round(Math.atan2(b, a) * (180/Math.PI));
				} else {
					startAngle = 0;
				}
				e.preventDefault();
				e.stopPropagation();
			});
			$(document).on('mousemove.rotate', function(e) {
				if (rotating) {
					var offset = $img.offset();
					var centerX = offset.left + $img.outerWidth()/2;
					var centerY = offset.top + $img.outerHeight()/2;
					var x = e.pageX - centerX;
					var y = e.pageY - centerY;
					var angle = Math.atan2(y, x) * (180/Math.PI);
					var rotateDeg = angle - Math.atan2(rotateStartY, rotateStartX) * (180/Math.PI) + startAngle;
					$img.css('transform', 'rotate(' + rotateDeg + 'deg)');
					updateHandlePosition();
				}
			}).on('mouseup.rotate', function() {
				rotating = false;
				// Ensure handles are visible and positioned after rotation
				setTimeout(updateHandlePosition, 10);
			});
			// Also update handle position if transform changes (rotation)
			var observerTransform = new MutationObserver(updateHandlePosition);
			observerTransform.observe($img[0], { attributes: true, attributeFilter: ['style', 'transform'] });
			// Also update on window resize
			$(window).on('resize', updateHandlePosition);
		}
		// If jQuery UI resizable is available, enable it
		if (typeof $img.resizable === 'function') {
			if (!$img.hasClass('ui-resizable')) {
				$img.resizable({
					aspectRatio: true,
					handles: 'n, e, s, w, ne, se, sw, nw',
					containment: '#card-canvas',
					start: function() { $img.addClass('resizing'); },
					stop: function() { $img.removeClass('resizing'); }
				});
			}
		}
	}
	// Close card preview modal when close icon is clicked
	$(document).on('click', '#card-preview-modal .close', function() {
		$('#card-preview-modal').modal('hide');
	});
	var zIndex = 1;

	// Render template if data is available
	if (window.cardTemplateData) {
		try {
			var tpl = typeof window.cardTemplateData === 'string' ? JSON.parse(window.cardTemplateData) : window.cardTemplateData;
			// Set background color if present
			if (tpl.bgColor) {
				$('#card-canvas').css('background', tpl.bgColor);
			}
			// Render elements (text/images)
			if (Array.isArray(tpl.elements)) {
				tpl.elements.forEach(function(el) {
					if (el.type === 'text') {
						var $text = $('<div class="draggable-text"></div>')
							.attr('id', el.id || ('text-' + Date.now()))
							.text(el.text || 'Edit me');
						if (el.css) {
							if (typeof el.css === 'string') {
								$text.attr('style', el.css);
							} else if (typeof el.css === 'object') {
								$text.css(el.css);
							}
						}
						$('#card-canvas').append($text);
						makeDraggable($text);
					} else if (el.type === 'image') {
						var $img = $('<img class="draggable-img">')
							.attr('id', el.id || ('img-' + Date.now()))
							.attr('src', el.src);
						if (el.css) {
							if (typeof el.css === 'string') {
								$img.attr('style', el.css);
							} else if (typeof el.css === 'object') {
								$img.css(el.css);
							}
						} else {
							$img.css({
								position: 'absolute',
								top: el.top || '80px',
								left: el.left || '80px',
								maxWidth: el.maxWidth || '200px',
								maxHeight: el.maxHeight || '150px',
								border: '1px solid #888',
								cursor: 'move',
								zIndex: zIndex++
							});
						}
						$('#card-canvas').append($img);
						makeDraggable($img);
						// Show resize handle only on click
						$img.on('click', function(e) {
							makeResizable($(this));
							e.stopPropagation();
						});
					}
				});
			}
		} catch (e) {
			console.error('Failed to parse template data:', e);
		}
	}


	// Add Text

		$('#add-text').off('click').on('click', function() {
			var $canvas = $('#card-canvas');
			if ($canvas.length === 0) {
				alert('Card canvas not found.');
				console.error('No #card-canvas found in DOM.');
				return;
			}
			var textId = 'text-' + Date.now();
			var $text = $('<div class="draggable-text" contenteditable="true"></div>')
				.attr('id', textId)
				
				.text('Edit me');
			$canvas.append($text);
			makeDraggable($text);
			selectElement($text);
			$text.focus();
			console.log('Added text box to canvas.');
		});

	// Text element selection and controls
	$(document).on('click', '.draggable-text', function(e) {
		selectElement($(this));
		e.stopPropagation();
	});
	//Hide the controls when clicking outside text
	/*$(document).on('click', function(e) {
		if (!$(e.target).closest('.draggable-text').length) {
			selectElement(null);
		}
	});*/

	function selectElement($el) {
		window.selectedElement = $el;
		if ($el && $el.hasClass('draggable-text')) {
			$('#editor-controls').show();
			$('#font-family').val($el.css('font-family').replace(/"/g, ''));
			$('#font-size').val(parseInt($el.css('font-size')));
			$('#font-color').val(rgb2hex($el.css('color')));
			// Set sliders to current values
			var ls = parseFloat($el.css('letter-spacing')) || 0;
			var lh = parseFloat($el.css('line-height')) || 1;
			var pd = parseInt($el.css('padding')) || 0;
			$("#letter-spacing-slider").slider('value', ls);
			$("#line-spacing-slider").slider('value', lh);
			$("#padding-slider").slider('value', pd);

			// Set background color
			var bg = $el.css('background-color');
			$('#background-color').val(rgb2hex(bg));
			// Set border color
			var borderColor = $el.css('border-color');
			$('#border-color').val(rgb2hex(borderColor));
			// Set border style
			var borderStyle = $el.css('border-style') || 'none';
			$('#border-style').val(borderStyle);
			// Set border width
			var borderWidth = parseInt($el.css('border-width')) || 0;
			$('#border-width').val(borderWidth);
		} else {
			$('#editor-controls').hide();
		}
	}
	// Background color
	$('#background-color').on('input', function() {
		if (window.selectedElement) {
			window.selectedElement.css('background-color', $(this).val());
		}
	});

	// Border color
	$('#border-color').on('input', function() {
		if (window.selectedElement) {
			window.selectedElement.css('border-color', $(this).val());
		}
	});

	// Border style
	$('#border-style').on('change', function() {
		if (window.selectedElement) {
			window.selectedElement.css('border-style', $(this).val());
		}
	});

	// Border width
	$('#border-width').on('input', function() {
		if (window.selectedElement) {
			var val = parseInt($(this).val()) || 0;
			window.selectedElement.css('border-width', val + 'px');
		}
	});

	// Font family
	$('#font-family').on('change', function() {
		if (window.selectedElement) {
			window.selectedElement.css('font-family', $(this).val());
		}
	});
	// Font size
	$('#font-size').on('input', function() {
		if (window.selectedElement) {
			window.selectedElement.css('font-size', $(this).val() + 'px');
		}
	});
	// Font color
	$('#font-color').on('input', function() {
		if (window.selectedElement) {
			window.selectedElement.css('color', $(this).val());
		}
	});
	// Delete element
	$('#delete-element').on('click', function() {
		if (window.selectedElement) {
			window.selectedElement.remove();
			selectElement(null);
		}
	});
	// Bring to front
	$('#bring-front').on('click', function() {
		if (window.selectedElement) {
			window.selectedElement.css('z-index', zIndex++);
		}
	});
	// Send to back
	$('#send-back').on('click', function() {
		if (window.selectedElement) {
			window.selectedElement.css('z-index', 1);
		}
	});

	function rgb2hex(rgb) {
		if (!rgb) return '#222222';
		var result = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
		if (!result) return rgb;
		return "#" +
			("0" + parseInt(result[1],10).toString(16)).slice(-2) +
			("0" + parseInt(result[2],10).toString(16)).slice(-2) +
			("0" + parseInt(result[3],10).toString(16)).slice(-2);
	}

	// Add Image
	$('#add-image').on('click', function() {
		var $input = $('<input type="file" accept="image/*" style="display:none;">');
		$input.on('change', function(e) {
			var file = e.target.files[0];
			if (file) {
				var reader = new FileReader();
				reader.onload = function(evt) {
					var imgId = 'img-' + Date.now();
					var $img = $('<img class="draggable-img">')
						.attr('id', imgId)
						.attr('src', evt.target.result)
						.css({
							position: 'absolute',
							top: '80px',
							left: '80px',
							maxWidth: '200px',
							maxHeight: '150px',
							border: '1px solid #888',
							cursor: 'move',
							zIndex: zIndex++
						});
					$('#card-canvas').append($img);
					makeDraggable($img);
					$img.on('click', function(e) {
						makeResizable($(this));
						e.stopPropagation();
					});
					
				};
				reader.readAsDataURL(file);
			}
		});
		$input.click();
	});

	// Hide all handles when clicking outside any image or its controls
	$(document).on('click', function(e) {
		if (!$(e.target).hasClass('draggable-img') && $(e.target).closest('.image-action-wrapper').length === 0) {
			$('.image-action-wrapper').remove();
		}
	});

	// Make elements draggable
	function makeDraggable($el) {
		var isDragging = false, startX, startY, origX, origY;
		$el.on('mousedown', function(e) {
			isDragging = true;
			startX = e.pageX;
			startY = e.pageY;
			origX = parseInt($el.css('left'));
			origY = parseInt($el.css('top'));
			$el.css('z-index', zIndex++);
			e.preventDefault();
		});
		$(document).on('mousemove', function(e) {
			if (isDragging) {
				var dx = e.pageX - startX;
				var dy = e.pageY - startY;
				$el.css({ left: origX + dx, top: origY + dy });
			}
		}).on('mouseup', function() {
			isDragging = false;
		});
	}

	// Preview card (using html2canvas)
	$('#preview-card').on('click', function() {
		if (typeof html2canvas === 'undefined') {
			alert('Preview requires html2canvas.');
			return;
		}
		html2canvas(document.getElementById('card-canvas')).then(function(canvas) {
			$('#preview-image').attr('src', canvas.toDataURL('image/png'));
			$('#card-preview-modal').modal('show');
		});
	});

	// Download card (using html2canvas)
	$('#download-card').on('click', function() {
		if (typeof html2canvas === 'undefined') {
			alert('Download requires html2canvas.');
			return;
		}
		html2canvas(document.getElementById('card-canvas')).then(function(canvas) {
			var link = document.createElement('a');
			link.download = 'greeting-card.png';
			link.href = canvas.toDataURL('image/png');
			link.click();
		});
	});

	// Optional: double-click to edit text
	$(document).on('dblclick', '.draggable-text', function() {
		$(this).attr('contenteditable', 'true').focus();
	});
	$(document).on('blur', '.draggable-text', function() {
		$(this).attr('contenteditable', 'false');
	});
});
