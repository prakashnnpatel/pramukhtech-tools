<div class="tool-page-container">
    <div class="tool-header mb-4">
    <div class="header-icon"><i class="fas fa-file-pdf"></i></div>
        <div class="header-title">Split PDF</div>
    <div class="header-desc">Easily split your PDF into selected pages or individual files. Perfect for extracting chapters, sharing specific sections, or organizing documents.</div>
    </div>
    <div class="calculator-card">
        <form id="splitPdfForm" enctype="multipart/form-data">
            <div class="card-header">
                <h3><i class="fas fa-file-pdf"></i> Split PDF</h3>
                <p>Extract specific pages or split your PDF into multiple files in seconds. Ideal for students, professionals, and anyone needing to organize or share parts of a PDF.</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12" id="splitPdfResult"></div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="pdfFile" class="form-label">Select PDF file</label>
                            <input type="file" class="form-control" id="pdfFile" name="pdf" accept="application/pdf" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="pages" class="form-label">Pages to extract (e.g. 1,3,5)</label>
                        <input type="text" class="form-control" id="pages" name="pages" placeholder="1,3,5" required>
                    </div>                    
                </div>            
            </div>
            <div class="card-footer"> 
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="invoice-action-btn"><i class="fas fa-file-pdf mr-1"></i> Split PDF</button>                    
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="info-section">
        <div class="row">
            <div class="col-lg-8 mt-4">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About Split PDF</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-file-pdf"></i> What is Split PDF?</h4>
                                    <p>Split PDF is a tool that allows you to extract specific pages or split a PDF document into multiple smaller files. This is useful for sharing chapters, removing unnecessary sections, or organizing documents for easier access.</p>
                                    <p>Simply upload your PDF, specify the pages you want, and download your new, customized PDF files in seconds.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-users"></i> Who Can Use This Tool?</h4>
                                    <p>Split PDF is helpful for many people, such as:</p>
                                    <ul class="feature-list">
                                        <li><strong>Students:</strong> Extract chapters or notes from large study materials.</li>
                                        <li><strong>Teachers & Educators:</strong> Share specific assignments or resources with students.</li>
                                        <li><strong>Business Professionals:</strong> Send only relevant sections of reports or contracts.</li>
                                        <li><strong>Legal & Finance:</strong> Organize case files or statements by splitting documents.</li>
                                        <li><strong>Content Creators:</strong> Prepare handouts, guides, or eBooks for distribution.</li>
                                        <li><strong>Anyone:</strong> Quickly split, extract, or organize any PDF for personal or professional use.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> Key Features</h4>
                                    <ul class="feature-list">
                                        <li><strong>Page Selection:</strong> Extract only the pages you need from any PDF.</li>
                                        <li><strong>Batch Splitting:</strong> Split large PDFs into multiple smaller files at once.</li>
                                        <li><strong>Fast & Secure:</strong> Your files are processed quickly and securely.</li>
                                        <li><strong>Easy to Use:</strong> No registration or software installation required.</li>
                                        <li><strong>Free & Unlimited:</strong> Use the tool as often as you need, for any document size.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                @include('suggestionlist')
            </div>
        </div>
    </div>
</div>

