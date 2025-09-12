
$(document).ready(function() {
	// When a card template is clicked, redirect to the editor page
	$(document).on('click', '.card-template', function() {
		var cardId = $(this).data('card-id');
		if (cardId) {
			window.location.href = '/greeting-cards/' + encodeURIComponent(cardId);
		}
	});

	// Render live previews for each card
	$('.card-preview-container').each(function() {
		var $container = $(this);
		var slug = $container.attr('id').replace('preview-', '');
		var dataScript = document.getElementById('template-data-' + slug);
		if (!dataScript) return;
		var tpl;
		try {
			tpl = JSON.parse(dataScript.textContent || dataScript.innerText);
		} catch (e) { return; }
		// Set background
		$container.css('background', tpl.bgColor || '#fff');
		// Render elements (text/images)
		if (Array.isArray(tpl.elements)) {
			tpl.elements.forEach(function(el) {
				if (el.type === 'text') {
					var $text = $('<div></div>')
						.css({
							position: 'absolute',
							top: el.top || '20px',
							left: el.left || '20px',
							color: el.color || '#222',
							fontSize: el.fontSize || '16px',
							fontWeight: el.fontWeight || 'normal',
							whiteSpace: 'nowrap',
							maxWidth: '90%',
							overflow: 'hidden',
							textOverflow: 'ellipsis',
							zIndex: 2
						})
						.text(el.text || '');
					$container.append($text);
				} else if (el.type === 'image') {
					var $img = $('<img>')
						.attr('src', el.src)
						.css({
							position: 'absolute',
							top: el.top || '40px',
							left: el.left || '40px',
							maxWidth: el.maxWidth || '80px',
							maxHeight: el.maxHeight || '60px',
							zIndex: 1
						});
					$container.append($img);
				}
			});
		}
	});
});
