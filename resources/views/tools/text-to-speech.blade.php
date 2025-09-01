@push('page_css')
<style>
    .voice-preview {
        background: #e9ecef;
        border-radius: 10px;
        padding: 15px;
        margin: 15px 0;
        display: none;
    }
    .audio-player {
        width: 100%;
        margin: 15px 0;
    }
    .download-section {
        background: #d4edda;
        border-radius: 10px;
        padding: 15px;
        margin: 15px 0;
        display: none;
    }
</style>
@endpush
<div class="tool-page-container">
    <div class="tool-header mb-4">
    <div class="header-icon"><i class="fas fa-volume-up"></i></div>
    <div class="header-title">Text to Speech</div>
    <div class="header-desc">Easily convert your text into natural-sounding speech in a variety of languages and voices. Perfect for accessibility, presentations, and more.</div>
    </div>
    <div class="calculator-card">
        <div class="card-header">
            <h3><i class="fas fa-volume-up"></i> Text to Speech</h3>
            <p>Transform any written text into clear, natural speech. Choose from multiple languages and voices to suit your needs-ideal for accessibility, learning, and content creation.</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">                            
                    <div class="form-group">
                        <label for="textInput">Enter Text to Convert:</label>
                         <button id="sampleTextBtn" class="btn btn-sm float-right" style="background: #E2E8FA;color: #000;">Sample Text</button>
                        <textarea id="textInput" class="form-control" rows="8" placeholder="Type or paste your text here (e.g. a paragraph, sentence, or script)"></textarea>
                        <span class="ml-auto text-muted float-right mt-1" id="textLength">Length: 0</span>                       
                    </div>
                </div>
                 <div class="col-lg-4">
                    <div class="bg-light rounded p-3">
                        <div class="form-group">
                            <label for="languageSelect">Language:</label>
                            <select id="languageSelect" class="form-control"></select>
                        </div>
                        <div class="form-group">
                            <label for="voiceSelect">Voice:</label>
                            <select id="voiceSelect" class="form-control"></select>
                        </div>
                        <div class="form-group">
                            <label for="speedRange">Speed: <span id="speedValue">1.0</span>x</label>
                            <input type="range" id="speedRange" min="0.5" max="2" step="0.1" value="1.0">
                        </div>
                        <div class="form-group">
                            <label for="pitchRange">Pitch: <span id="pitchValue">1.0</span></label>
                            <input type="range" id="pitchRange" min="0" max="2" step="0.1" value="1.0">
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="card-footer"> 
            <div class="row">
                <div class="col-lg-12 text-center">
                    <button id="previewBtn" class="invoice-action-btn"><i class="fas fa-volume-up mr-1"></i> Play Speech</button>
                    <button id="stopBtn" class="invoice-defaul-btn" style="display:none;"><i class="fas fa-stop mr-1"></i> Stop</button>
                    <button id="clearTextBtn" type="button" class="invoice-defaul-btn">Clear</button>

                </div>
            </div>
        </div>            
    </div>

    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About Text to Speech</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-volume-up"></i> What is Text to Speech?</h4>
                                    <p>Text to Speech (TTS) technology converts written text into spoken words using computer-generated voices. It helps make content accessible, engaging, and easy to consume for everyone.</p>
                                    <p>Our tool lets you instantly listen to any text in multiple languages and voices, with adjustable speed and pitch for a personalized experience.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-users"></i> Who Can Use This Tool?</h4>
                                    <p>This Text to Speech tool is useful for a wide range of users, including:</p>
                                    <ul class="feature-list">
                                        <li><strong>Students:</strong> Listen to study material, notes, or articles for better understanding and retention.</li>
                                        <li><strong>Teachers & Educators:</strong> Create audio versions of lessons and resources for students.</li>
                                        <li><strong>YouTubers & Content Creators:</strong> Generate voiceovers for videos and presentations.</li>
                                        <li><strong>Language Learners:</strong> Practice pronunciation and comprehension in different languages.</li>
                                        <li><strong>Visually Impaired Users:</strong> Make written content accessible and easy to consume.</li>
                                        <li><strong>Professionals:</strong> Convert reports, emails, or documents to speech for multitasking.</li>
                                        <li><strong>Anyone:</strong> Instantly hear any text for convenience, accessibility, or entertainment.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> Key Features</h4>
                                    <ul class="feature-list">
                                        <li><strong>Multi-language Support:</strong> Listen to text in many languages and accents.</li>
                                        <li><strong>Voice Selection:</strong> Choose from a variety of voices for each language.</li>
                                        <li><strong>Speed & Pitch Control:</strong> Adjust how fast and how high/low the speech sounds.</li>
                                        <li><strong>Instant Playback:</strong> Hear your text immediately in the browser-no downloads required.</li>
                                        <li><strong>Accessibility:</strong> Make content easier to understand for visually impaired users, language learners, and more.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
