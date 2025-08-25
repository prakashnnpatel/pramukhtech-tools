var CodeBeautifier = function () {
	function copyToClipboard(text) {
		try {
			navigator.clipboard.writeText(text);
		} catch (e) {
			var temp = document.createElement('textarea');
			temp.value = text;
			document.body.appendChild(temp);
			temp.select();
			document.execCommand('copy');
			document.body.removeChild(temp);
		}
	}

	function beautifyJS(code) {
		try {
			var indentVal = $('#cb-indent').val() || '2';
			var useTabs = indentVal === 'tab';
			var size = useTabs ? 1 : parseInt(indentVal, 10);
			return window.js_beautify ? window.js_beautify(code, { indent_size: size, indent_with_tabs: useTabs }) : code;
		} catch (e) { return code; }
	}

	function beautifyCSS(code) {
		try {
			var indentVal = $('#cb-indent').val() || '2';
			var useTabs = indentVal === 'tab';
			var size = useTabs ? 1 : parseInt(indentVal, 10);
			return window.css_beautify ? window.css_beautify(code, { indent_size: size, indent_with_tabs: useTabs }) : code;
		} catch (e) { return code; }
	}

	function beautifyHTML(code) {
		try {
			var indentVal = $('#cb-indent').val() || '2';
			var useTabs = indentVal === 'tab';
			var size = useTabs ? 1 : parseInt(indentVal, 10);
			return window.html_beautify ? window.html_beautify(code, { indent_size: size, indent_with_tabs: useTabs }) : code;
		} catch (e) { return code; }
	}

	function runBeautify() {
		var lang = $('#cb-language').val();
		var input = $('#cb-input').val();
		var output = input;
		if (lang === 'javascript') output = beautifyJS(input);
		if (lang === 'css') output = beautifyCSS(input);
		if (lang === 'html') output = beautifyHTML(input);
		$('#cb-output').val(output);
	}

	return {
		init: function () {
			$('#cb-clear').on('click', function () {
				$('#cb-input').val('');
				$('#cb-output').val('');
			});
			$('#cb-beautify').on('click', runBeautify);
			$('#cb-copy-output').on('click', function () {
				copyToClipboard($('#cb-output').val());
			});
		}
	};
}();

$(function () {
	CodeBeautifier.init();
});
window.CodeBeautifier = CodeBeautifier;



