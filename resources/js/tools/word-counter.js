var wordCounter = function() {
    // DOM elements
    const $textInput = $('#textInput');
    const $wordCount = $('#wordCount');
    const $charCount = $('#charCount');
    const $sentenceCount = $('#sentenceCount');
    const $paragraphCount = $('#paragraphCount');
    const $spaceCount = $('#spaceCount');
    const $readingTime = $('#readingTime');
    const $speakingTime = $('#speakingTime');
    const $numberCount = $('#numberCount');
    const $specialCharCount = $('#specialCharCount');
    const $upperCaseCount = $('#upperCaseCount');
    const $lowerCaseCount = $('#lowerCaseCount');
    const $clearText = $('#clearText');
    const $copyText = $('#copyText');

    // Count words in text
    function countWords(text) {
        if (!text || text.trim() === '') return 0;
        return text.trim().split(/\s+/).length;
    }

    // Count characters in text
    function countCharacters(text) {
        return text.length;
    }

    // Count sentences in text
    function countSentences(text) {
        if (!text || text.trim() === '') return 0;
        const matches = text.match(/[^.!?]+[.!?]*(?:\s|$)/g);
        return matches ? matches.filter(s => s.trim() !== '').length : 0;
    }

    // Count whitespace characters in text
    function countSpaces(text) {
        if (!text || text.trim() === '') return 0;
        const matches = text.match(/\s/g);
        return matches ? matches.length : 0;
    }

    // Count paragraphs in text
    function countParagraphs(text) {
        if (!text || text.trim() === '') return 0;
        const paragraphs = text.split(/\n+/).filter(p => p.trim() !== '');
        return paragraphs.length;
    }

    // Count duplicate words in text
    function countDuplicateWords(text) {
        if (!text || text.trim() === '') return { summary: '', grandTotal: 0 };
        const words = text
            .toLowerCase()
            .replace(/[^\w\s']/g, '')
            .split(/\s+/)
            .filter(w => w !== '');
        const counts = {};
        words.forEach(word => {
            counts[word] = (counts[word] || 0) + 1;
        });
        const duplicates = Object.entries(counts)
            .filter(([word, count]) => count > 1)
            .map(([word, count]) => `${word}: ${count}`);
        const grandTotal = duplicates.length;
        return {
            summary: duplicates.join(', '),
            grandTotal: grandTotal
        };
    }

    // Count numbers
    function countNumbers(text) {
        if (!text || text.trim() === '') return 0;
        const matches = text.match(/\d+/g);
        return matches ? matches.length : 0;
    }

    // Count special characters (non-alphanumeric excluding spaces)
    function countSpecialChars(text) {
        if (!text || text.trim() === '') return 0;
        const matches = text.match(/[^a-zA-Z0-9\s]/g);
        return matches ? matches.length : 0;
    }

    // Count uppercase letters
    function countUppercase(text) {
        if (!text || text.trim() === '') return 0;
        const matches = text.match(/[A-Z]/g);
        return matches ? matches.length : 0;
    }

    // Count lowercase letters
    function countLowercase(text) {
        if (!text || text.trim() === '') return 0;
        const matches = text.match(/[a-z]/g);
        return matches ? matches.length : 0;
    }

    // Calculate reading time (200 words/min)
    function calculateReadingTime(wordCount) {
        return (wordCount / 200).toFixed(2);
    }

    // Calculate speaking time (125 words/min)
    function calculateSpeakingTime(wordCount) {
        return (wordCount / 125).toFixed(2);
    }

    // Update all counts
    function updateCounts() {
        const text = $textInput.val();
        const words = countWords(text);

        $wordCount.text(words);
        $charCount.text(countCharacters(text));
        $sentenceCount.text(countSentences(text));
        $paragraphCount.text(countParagraphs(text));
        $spaceCount.text(countSpaces(text));

        var duplicateSummary = countDuplicateWords(text);
        $("#duplicateWords").text(duplicateSummary.summary);
        $("#duplicateCount").text(duplicateSummary.grandTotal);

        $numberCount.text(countNumbers(text));
        $specialCharCount.text(countSpecialChars(text));
        $upperCaseCount.text(countUppercase(text));
        $lowerCaseCount.text(countLowercase(text));

        $readingTime.text(calculateReadingTime(words) + " min");
        $speakingTime.text(calculateSpeakingTime(words) + " min");
    }

    // Clear text
    function clearText() {
        $textInput.val('');
        updateCounts();
    }

    // Copy text to clipboard
    function copyText() {
        $textInput.select();
        document.execCommand('copy');
        const originalText = $copyText.html();
        $copyText.html('<i class="fas fa-check"></i> Copied!');
        setTimeout(() => {
            $copyText.html(originalText);
        }, 2000);
    }

    // Event listeners
    function setupEventListeners() {
        $textInput.on('input', updateCounts);
        $clearText.on('click', clearText);
        $copyText.on('click', copyText);
    }

    // Initialize
    function initialize() {
        setupEventListeners();
        updateCounts();
    }

    initialize();
};

$(function() {
    wordCounter();
});

window.wordCounter = wordCounter;
