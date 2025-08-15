<div class="fd-calculator-container">
    <div class="calculator-header">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-font"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">Word Counter Tool</h1>
                <p class="calculator-subtitle">Count words, characters, sentences, and paragraphs in your text instantly.</p>
            </div>
        </div>
    </div>

    <div class="calculator-main">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="calculator-card">
                    <div class="card-header">
                        <h3><i class="fas fa-font"></i> Word Counter</h3>
                        <p>Enter or paste your text below to count words, characters, sentences, and paragraphs.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="textInput">Your Text:</label>
                                    <textarea class="form-control" id="textInput" placeholder="Type or paste your text here..." rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="calculate-section">
                                    <button id="copyText" class="invoice-action-btn">
                                        <i class="fas fa-copy"></i> Copy Text
                                    </button>
                                    <button id="clearText" class="invoice-defaul-btn">
                                        <i class="fas fa-trash-alt"></i> Clear Text
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="col-lg-12">
                <div class="info-card">
                    <div class="info-header">
                        <h4><i class="fas fa-info-circle"></i> Summary</h4>
                    </div>
                    <div class="result-content">
                        <div class="summary-grid">
                            <div class="summary-item">
                                <div class="summary-label">Words</div>
                                <div class="summary-value" id="wordCount">0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Characters</div>
                                <div class="summary-value" id="charCount">0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Sentences</div>    
                                <div class="summary-value" id="sentenceCount">0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Paragraphs</div>
                                <div class="summary-value" id="paragraphCount">0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Spaces</div>
                                <div class="summary-value" id="spaceCount">0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Numbers</div>
                                <div class="summary-value" id="numberCount">0 min</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Special Characters</div>
                                <div class="summary-value" id="specialCharCount">0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Uppercase Letters</div>
                                <div class="summary-value" id="upperCaseCount">0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Lowercase Letters</div>
                                <div class="summary-value" id="lowerCaseCount">0</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Duplicate Words</div>
                                <div class="summary-value" id="duplicateCount">0</div>
                                <div class="summary-label"><small id="duplicateWords"></small></div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Reading Time</div>
                                <div class="summary-value" id="readingTime">0 min</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-label">Speaking Time</div>
                                <div class="summary-value" id="speakingTime">0 min</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About Word Counter</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> What is Word Counter</h4>
                                    <p>Our Word Counter tool is a free online utility that helps you count the number of words, characters, sentences, and paragraphs in your text. It's perfect for writers, students, professionals, and anyone who needs to keep track of their text metrics.</p>
                                    <p>Knowing the word count of a text can be important. For example, if an author has to write a minimum or maximum amount of words for an article, essay, report, story, book, paper, you name it. Word Counter will help to make sure its word count reaches a specific requirement or stays within a certain limit.</p>
                                </div>                                
                            </div>
                            <div class="col-lg-12">                                
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i> Key Features:</h4>
                                    <ul class="feature-list">
                                        <li><b>Instant Counting</b> - Instantly updates counts as you type or paste your text.</li>
                                        <li><b>Comprehensive Metrics</b> - Counts words, characters, sentences, paragraphs, spaces, and duplicate words.</li>
                                        <li><b>Duplicate Word Detection</b> - Highlights repeated words with frequency and total unique duplicates.</li>
                                        <li><b>Reading & Speaking Time Estimation</b> - Predicts how long it will take to read or speak your text.</li>
                                        <li><b>Easy to Use</b> - Simply paste your text and get immediate results.</li>
                                        <li><b>No Registration Required</b> - Use the tool without creating an account.</li>
                                        <li><b>Privacy Focused</b> - Your text is processed in your browser and never stored on our servers.</li>
                                        <li><b>Mobile Friendly</b> - Fully responsive layout for desktop, tablet, and mobile devices.</li>
                                        <li><b>Special Character & Number Count</b> - Identifies digits, punctuation, and special symbols in your content.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">                                
                                <div class="content-block">
                                    <h4><i class="fas fa-lightbulb"></i>Benefits:</h4>
                                    <ul class="feature-list">
                                        <li><b>Perfect for Writers & Bloggers</b> - Keep your content within desired word or character limits.</li>
                                        <li><b>Ideal for Students</b> - Ensure assignments meet length requirements.</li>
                                        <li><b>SEO-Friendly Content Writing</b> - Optimize text length for better search engine rankings.</li>
                                        <li><b>Public Speaking Preparation</b> - Plan speeches with accurate speaking time estimates.</li>
                                        <li><b>Error-Free Editing</b> - Spot duplicate words and overused terms instantly.</li>
                                        <li><b>Time-Saving</b> - No need to open complex software; works right in your browser.</li>
                                        <li><b>Free & Instant</b> - No sign-up or downloads required.</li>
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