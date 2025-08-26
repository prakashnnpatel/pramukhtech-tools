var CodeMinifier = function () {
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

    function minifyJS(code) {
        try {
            return code
                .replace(/\/\*[\s\S]*?\*\//g, '') // block comments
                .replace(/(^|[^:])\/\/.*$/gm, '$1') // line comments
                .replace(/\s+/g, ' ') // collapse whitespace
                .replace(/\s*([{};:,\(\)\[\]=\+\-\*\/<>&\|!\?])\s*/g, '$1') // trim around tokens
                .trim();
        } catch (e) { return code; }
    }

    function minifyCSS(code) {
        try {
            return code
                .replace(/\/\*[\s\S]*?\*\//g, '')
                .replace(/\s+/g, ' ')
                .replace(/\s*([{};:,>\(\)])\s*/g, '$1')
                .replace(/;}/g, '}')
                .trim();
        } catch (e) { return code; }
    }

    function minifyHTML(code) {
        try {
            return code
                .replace(/>\s+</g, '><')
                .replace(/\s{2,}/g, ' ')
                .trim();
        } catch (e) { return code; }
    }

    function runMinify() {
        var lang = $('#cm-language').val();
        var input = $('#cm-input').val();
        var output = input;
        if (lang === 'javascript') output = minifyJS(input);
        if (lang === 'css') output = minifyCSS(input);
        if (lang === 'html') output = minifyHTML(input);
        $('#cm-output').val(output);
    }

    return {
        init: function () {
            $('#cm-clear').on('click', function () {
                $('#cm-input').val('');
                $('#cm-output').val('');
            });
            $('#cm-minify').on('click', runMinify);
            $('#cm-copy-output').on('click', function () {                
				const originalText = $(this).html();
				$(this).html('<i class="fas fa-check"></i> Copied!');
				copyToClipboard($('#cm-output').val());
				setTimeout(() => {
					$(this).html(originalText);
				}, 2000);
            });
        }
    };
}();

$(function () {
    CodeMinifier.init();
});
window.CodeMinifier = CodeMinifier;


