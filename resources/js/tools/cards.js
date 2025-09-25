
function formSubmit() {
	var search = $.trim($("#cardSearchFrm").find("#search").val());
	var category = $.trim($("#cardSearchFrm").find("#category").val());
	var searchURL = '/cards';
	
	if (category != "") {
		searchURL += '/' + category;
	}

	if (search != "") {
		searchURL += '?search=' + encodeURIComponent(search);
	}
	//console.log(searchURL);    
	window.location.href = searchURL;
}

$(document).ready(function() {
	
	$('#cardSearchBtn').click(function () {
		formSubmit();
	});

	$('#search').on('keypress', function(e) {
		if (e.which == 13) {
			formSubmit();
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
