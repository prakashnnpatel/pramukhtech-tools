var colorpicker = function()
{
    const $colorInput = $('#colorInput');
    const $hexInput = $('#hexCode');
    const $rgbInput = $('#rgbCode');
    const $preview = $('#colorPreview');
    const $recentColors = $('#recentColors');

     // Utility functions
    function hexToRgb(hex) {
      hex = hex.replace('#', '');
      if (hex.length !== 6) return null;
      const bigint = parseInt(hex, 16);
      const r = (bigint >> 16) & 255;
      const g = (bigint >> 8) & 255;
      const b = bigint & 255;
      return `rgb(${r}, ${g}, ${b})`;
    }

    function rgbToHex(rgb) {
      const result = /^rgb\s*\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*\)$/.exec(rgb);
      if (!result) return null;
      const r = parseInt(result[1]), g = parseInt(result[2]), b = parseInt(result[3]);
      if ([r, g, b].some(x => x < 0 || x > 255)) return null;
      return "#" + [r, g, b].map(x => x.toString(16).padStart(2, '0')).join('');
    }

    function updateColor(colorHex) {
      const rgb = hexToRgb(colorHex);
      $colorInput.val(colorHex);
      $preview.css('background-color', colorHex);
      $hexInput.val(colorHex);
      $rgbInput.val(rgb);
      saveRecentColor(colorHex);
    }

    function saveRecentColor(hex) {
      let colors = JSON.parse(localStorage.getItem('recentColors')) || [];
      colors = [hex, ...colors.filter(c => c !== hex)].slice(0, 8);
      localStorage.setItem('recentColors', JSON.stringify(colors));
      renderRecentColors();
    }

    function renderRecentColors() {
      let colors = JSON.parse(localStorage.getItem('recentColors')) || [];
      $recentColors.empty();
      colors.forEach(color => {
        $('<div>')
          .addClass('recent-color')
          .css('background-color', color)
          .on('click', () => updateColor(color))
          .appendTo($recentColors);
      });
    }

    // Color input change
    $colorInput.on('input', function () {
      updateColor($(this).val());
    });

    // Manual HEX input
    $hexInput.on('input', function () {
      const val = $(this).val();
      if (/^#[0-9A-Fa-f]{6}$/.test(val)) {
        updateColor(val);
      }
    });

    // Manual RGB input
    $rgbInput.on('input', function () {
      const val = $(this).val();
      const hex = rgbToHex(val);
      if (hex) {
        updateColor(hex);
      }
    });

    // Initial render
    updateColor($colorInput.val());
    renderRecentColors();
}

$(function() {
    colorpicker();
});
window.colorpicker = colorpicker;