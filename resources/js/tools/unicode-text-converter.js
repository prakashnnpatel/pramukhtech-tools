const UTC_STYLES = [
	{ key: 'bold', name: 'Math Bold', mapA: 0x1D400, mapa: 0x1D41A, map0: null },
	{ key: 'italic', name: 'Math Italic', mapA: 0x1D434, mapa: 0x1D44E, map0: null },
	{ key: 'boldItalic', name: 'Math Bold Italic', mapA: 0x1D468, mapa: 0x1D482, map0: null },
	{ key: 'script', name: 'Math Script', mapA: 0x1D49C, mapa: 0x1D4B6, map0: null },
	{ key: 'boldScript', name: 'Math Bold Script', mapA: 0x1D4D0, mapa: 0x1D4EA, map0: null },
	{ key: 'fraktur', name: 'Fraktur', mapA: 0x1D504, mapa: 0x1D51E, map0: null },
	{ key: 'double', name: 'Double Struck', mapA: 0x1D538, mapa: 0x1D552, map0: 0x1D7D8 },
	{ key: 'sans', name: 'Sans', mapA: 0x1D5A0, mapa: 0x1D5BA, map0: 0x1D7E2 },
	{ key: 'sansBold', name: 'Sans Bold', mapA: 0x1D5D4, mapa: 0x1D5EE, map0: 0x1D7EC },
	{ key: 'sansItalic', name: 'Sans Italic', mapA: 0x1D608, mapa: 0x1D622, map0: null },
	{ key: 'sansBoldItalic', name: 'Sans Bold Italic', mapA: 0x1D63C, mapa: 0x1D656, map0: null },
	{ key: 'mono', name: 'Monospace', mapA: 0x1D670, mapa: 0x1D68A, map0: 0x1D7F6 },
	{ key: 'circled', name: 'Circled', mapA: 0x24B6, mapa: 0x24D0, map0: 0x2460 },
	{ key: 'squared', name: 'Squared', mapA: 0x1F130 - 1, mapa: null, map0: null },
	{ key: 'negSquared', name: 'Negative Squared', mapA: 0x1F170 - 1, mapa: null, map0: null },
	{ key: 'fullwidth', name: 'Fullwidth', mapA: 0xFF21, mapa: 0xFF41, map0: 0xFF10 }
];

// Exceptions for characters not present or encoded differently in certain alphabets
// e.g., Blackboard (double-struck) and Fraktur have gaps (C, H, N, P, Q, R, Z, etc.)
const EXCEPTIONS = {
	// Double-struck special letters
	'double': {
		'C': 0x2102, 'H': 0x210D, 'N': 0x2115, 'P': 0x2119, 'Q': 0x211A, 'R': 0x211D, 'Z': 0x2124
	},
	// Fraktur special letters
	'fraktur': {
		'C': 0x212D, 'H': 0x210C, 'I': 0x2111, 'R': 0x211C, 'Z': 0x2128
	},
	// Script special letters
	'script': {
		'B': 0x212C, 'E': 0x2130, 'F': 0x2131, 'H': 0x210B, 'I': 0x2110, 'L': 0x2112, 'M': 0x2133, 'R': 0x211B, 'e': 0x212F, 'g': 0x210A, 'o': 0x2134
	}
};

function mapChar(codePoint, baseUpper, baseLower, baseDigit) {
	// A-Z
	if (codePoint >= 0x41 && codePoint <= 0x5A && baseUpper) {
		return baseUpper + (codePoint - 0x41);
	}
	// a-z
	if (codePoint >= 0x61 && codePoint <= 0x7A && baseLower) {
		return baseLower + (codePoint - 0x61);
	}
	// 0-9
	if (codePoint >= 0x30 && codePoint <= 0x39 && baseDigit) {
		return baseDigit + (codePoint - 0x30);
	}
	return codePoint;
}

function transform(text, style) {
	let out = '';
	for (const ch of text) {
		const cp = ch.codePointAt(0);
		// Special cases for squared/circled A-Z only
		let mapped = cp;
		if (style.key === 'squared' || style.key === 'negSquared') {
			if (cp >= 0x41 && cp <= 0x5A) {
				mapped = (style.key === 'squared' ? 0x1F130 - 1 : 0x1F170 - 1) + (cp - 0x41) + 1;
			}
			else if (cp === 0x23) { // '#'
				mapped = 0x20E3; // combining enclosing keycap (fallback)
			}
		} else {
			// Apply exceptions if present
			const ex = EXCEPTIONS[style.key];
			if (ex && ex[ch]) {
				mapped = ex[ch];
			} else {
			mapped = mapChar(cp, style.mapA, style.mapa, style.map0);
			}
		}

		// Fallback: if mapped equals original and it's an ASCII letter/digit but style should change it,
		// keep original to avoid showing odd placeholder like 𝔆; otherwise use mapped.
		out += String.fromCodePoint(mapped);
	}
	return out;
}

function buildResultRow(label, value) {
	const row = document.createElement('div');
	row.className = 'summary-item';
	const labelEl = document.createElement('div');
	labelEl.className = 'summary-label';
	labelEl.textContent = label;
	const valueEl = document.createElement('div');
	valueEl.className = 'summary-value';
	valueEl.textContent = value;
	const action = document.createElement('button');
	action.className = 'invoice-action-btn';
	action.innerHTML = '<i class="fas fa-copy"></i> Copy';
	action.addEventListener('click', () => {
		let originalText = $(action).html();
		$(action).html('<i class="fas fa-check"></i> Copied!');
		navigator.clipboard.writeText(value)
		setTimeout(() => {
			$(action).html(originalText);
		}, 2000);
	});
	row.appendChild(labelEl);
	row.appendChild(valueEl);
	row.appendChild(action);
	return row;
}

function renderAllStyles(text) {
	const container = document.getElementById('utc-results');
	if (!container) return;
	container.innerHTML = '';
	UTC_STYLES.forEach(style => {
		const converted = transform(text, style);
		container.appendChild(buildResultRow(style.name, converted));
	});
}

document.addEventListener('DOMContentLoaded', function() {
	const src = document.getElementById('utc-source');
	const btnClear = document.getElementById('utc-clear');
	const btnCopyAll = document.getElementById('utc-copy-all');

	function update() {
		renderAllStyles(src.value || 'Unicode Text Converter 2025 !');
	}

	src && src.addEventListener('input', update);
	btnClear && btnClear.addEventListener('click', function() { src.value = ''; update(); src.focus(); });
	btnCopyAll && btnCopyAll.addEventListener('click', function() {
		const items = Array.from(document.querySelectorAll('#utc-results .summary-item .summary-value')).map(e => e.textContent);
		navigator.clipboard.writeText(items.join('\n'));
		const originalText = $("#utc-copy-all").html();
		$("#utc-copy-all").html('<i class="fas fa-check"></i> Copied All !');
		setTimeout(() => {
			$("#utc-copy-all").html(originalText);
		}, 2000);		
	});

	update();
});


