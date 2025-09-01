document.addEventListener('DOMContentLoaded', function () {
    // Helper to ensure voices are loaded before populating
    function ensureVoicesLoaded(callback) {
        let voices = speechSynthesis.getVoices();
        if (voices && voices.length > 0) {
            callback();
        } else {
            // Try again after a short delay
            setTimeout(function() { ensureVoicesLoaded(callback); }, 100);
        }
    }
    // Initialize select2 on language dropdown
    if (window.$ && $.fn.select2) {
        $('#languageSelect').select2({
            width: '100%',
            placeholder: 'Select a language',
            allowClear: false
        });
        $('#voiceSelect').select2({
            width: '100%',
            placeholder: 'Select a voice',
            allowClear: false,
            templateResult: function(state) {
                if (!state.id) return state.text;
                var data = $(state.element).data();
                var info = [];
                if (data.gender) info.push(data.gender);
                if (data.accent) info.push(data.accent);
                return $('<span>' + state.text + (info.length ? ' <span class="text-muted">(' + info.join(', ') + ')</span>' : '') + '</span>');
            }
        });
        ensureVoicesLoaded(loadVoicesAndLanguages);
    } else {
        ensureVoicesLoaded(loadVoicesAndLanguages);
    }
    const textInput = document.getElementById('textInput');
    const voiceSelect = document.getElementById('voiceSelect');
    const languageSelect = document.getElementById('languageSelect');
    const speedRange = document.getElementById('speedRange');
    const speedValue = document.getElementById('speedValue');
    const pitchRange = document.getElementById('pitchRange');
    const pitchValue = document.getElementById('pitchValue');
    const previewBtn = document.getElementById('previewBtn');
    const stopBtn = document.getElementById('stopBtn');
    // Removed download button
    // Removed audioPlayer and voicePreview

    let speechSynthesisUtterance = null;

    // Load voices and languages
    // Map of language codes to user-friendly names
    const languageNames = {
        'af-ZA': 'Afrikaans (South Africa)',
        'ar-SA': 'Arabic (Saudi Arabia)',
        'bg-BG': 'Bulgarian (Bulgaria)',
        'ca-ES': 'Catalan (Spain)',
        'zh-CN': 'Chinese (Mandarin, China)',
        'zh-HK': 'Chinese (Hong Kong)',
        'zh-TW': 'Chinese (Taiwan)',
        'hr-HR': 'Croatian (Croatia)',
        'cs-CZ': 'Czech (Czech Republic)',
        'da-DK': 'Danish (Denmark)',
        'nl-NL': 'Dutch (Netherlands)',
        'en-AU': 'English (Australia)',
        'en-GB': 'English (United Kingdom)',
        'en-IN': 'English (India)',
        'en-US': 'English (United States)',
        'fi-FI': 'Finnish (Finland)',
        'fr-CA': 'French (Canada)',
        'fr-FR': 'French (France)',
        'de-DE': 'German (Germany)',
        'el-GR': 'Greek (Greece)',
        'hi-IN': 'Hindi (India)',
        'hu-HU': 'Hungarian (Hungary)',
        'id-ID': 'Indonesian (Indonesia)',
        'it-IT': 'Italian (Italy)',
        'ja-JP': 'Japanese (Japan)',
        'ko-KR': 'Korean (Korea)',
        'no-NO': 'Norwegian (Norway)',
        'pl-PL': 'Polish (Poland)',
        'pt-BR': 'Portuguese (Brazil)',
        'pt-PT': 'Portuguese (Portugal)',
        'ro-RO': 'Romanian (Romania)',
        'ru-RU': 'Russian (Russia)',
        'sk-SK': 'Slovak (Slovakia)',
        'es-ES': 'Spanish (Spain)',
        'es-MX': 'Spanish (Mexico)',
        'sv-SE': 'Swedish (Sweden)',
        'th-TH': 'Thai (Thailand)',
        'tr-TR': 'Turkish (Turkey)',
        'uk-UA': 'Ukrainian (Ukraine)',
        'vi-VN': 'Vietnamese (Vietnam)',
        // Add more as needed
    };

    function loadVoicesAndLanguages() {
        const voices = speechSynthesis.getVoices();
        // Get unique languages
        const languages = [...new Set(voices.map(v => v.lang))];
        languageSelect.innerHTML = '';
        languages.forEach(lang => {
            const option = document.createElement('option');
            option.value = lang;
            option.textContent = languageNames[lang] || lang;
            languageSelect.appendChild(option);
        });
        // Set default language
        languageSelect.value = languages[0] || '';
        populateVoices(languageSelect.value);
    }

    function populateVoices(selectedLang) {
        let voices = speechSynthesis.getVoices();
        if (!voices || voices.length === 0) {
            setTimeout(function() { populateVoices(selectedLang); }, 100);
            return;
        }
        voices = voices.filter(v => v.lang === selectedLang);
        voiceSelect.innerHTML = '';
        voices.forEach(voice => {
            const option = document.createElement('option');
            option.value = voice.name;
            // Try to show gender and accent (not all browsers support gender)
            let info = [];
            if (voice.gender) info.push(voice.gender);
            if (voice.localService) info.push('Local');
            if (voice.lang) info.push(voice.lang);
            option.textContent = voice.name + (info.length ? ' (' + info.join(', ') + ')' : '');
            // For select2 template
            option.dataset.gender = voice.gender || '';
            option.dataset.accent = voice.lang || '';
            voiceSelect.appendChild(option);
        });
        if (window.$ && $.fn.select2) {
            $('#voiceSelect').trigger('change.select2');
        }
        if (voices.length > 0) voiceSelect.value = voices[0].name;
    }
    // Sample text button
    const sampleTextBtn = document.getElementById('sampleTextBtn');
    if (sampleTextBtn) {
        sampleTextBtn.addEventListener('click', function() {
            textInput.value = "Welcome to ToolHubSpot's Text to Speech tool! Instantly convert any text to natural-sounding speech in multiple languages and voices.";
            updateTextLength();
        });
    }

    // Clear text button
    const clearTextBtn = document.getElementById('clearTextBtn');
    if (clearTextBtn) {
        clearTextBtn.addEventListener('click', function() {
            textInput.value = '';
            updateTextLength();
        });
    }

    // Text length display
    const textLengthSpan = document.getElementById('textLength');
    function updateTextLength() {
        if (textLengthSpan) textLengthSpan.textContent = 'Length: ' + textInput.value.length;
    }
    textInput.addEventListener('input', updateTextLength);
    updateTextLength();

    // Always reload voices when browser fires onvoiceschanged
    if (speechSynthesis.onvoiceschanged !== undefined) {
        speechSynthesis.onvoiceschanged = function() {
            ensureVoicesLoaded(loadVoicesAndLanguages);
        };
    }

    // If select2 is enabled, use its change event
    if (window.$ && $.fn.select2) {
        $('#languageSelect').on('change', function() {
            populateVoices(this.value);
        });
    } else {
        languageSelect.addEventListener('change', function() {
            populateVoices(languageSelect.value);
        });
    }

    speedRange.addEventListener('input', () => {
        speedValue.textContent = speedRange.value;
    });
    pitchRange.addEventListener('input', () => {
        pitchValue.textContent = pitchRange.value;
    });

    previewBtn.addEventListener('click', () => {
        const text = textInput.value.trim();
        if (!text) {
            Swal.fire({icon:"error",title:"Oops!",text:"Please enter text to convert to speech!"});
            return;
        }
        if (!voiceSelect.value) {
            Swal.fire({icon:"error",title:"No Voice Available",text:"No voice is available for the selected language. Please try another language."});
            return;
        }
        speechSynthesis.cancel();
        const selectedLang = languageSelect.value;
        const selectedVoice = voiceSelect.value;
        speechSynthesisUtterance = new SpeechSynthesisUtterance(text);
        speechSynthesisUtterance.voice = speechSynthesis.getVoices().find(v => v.name === selectedVoice && v.lang === selectedLang) || null;
        speechSynthesisUtterance.rate = parseFloat(speedRange.value);
        speechSynthesisUtterance.pitch = parseFloat(pitchRange.value);

        speechSynthesisUtterance.onstart = () => {
            previewBtn.style.display = 'none';
            stopBtn.style.display = 'inline-block';
        };
        speechSynthesisUtterance.onend = () => {
            previewBtn.style.display = 'inline-block';
            stopBtn.style.display = 'none';
        };
        speechSynthesisUtterance.onerror = () => {
            previewBtn.style.display = 'inline-block';
            stopBtn.style.display = 'none';
            //Swal.fire({icon:"error",title:"Oops!",text:"Error in speech synthesis."});
        };
        speechSynthesis.speak(speechSynthesisUtterance);
    });

    stopBtn.addEventListener('click', () => {
        if (speechSynthesisUtterance) speechSynthesis.cancel();
        previewBtn.style.display = 'inline-block';
        stopBtn.style.display = 'none';
    });
});
