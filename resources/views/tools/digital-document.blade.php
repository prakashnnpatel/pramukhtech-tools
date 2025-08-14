<div class="tool-page-container">
    <div class="tool-header mb-4">
        <div class="header-icon"><i class="fas fa-file-signature"></i></div>
        <div class="header-title">Create Free Digital Document & Download</div>
        <div class="header-desc">Create Branded Digital Documents Instantly – Trusted by Millions!</div>
    </div>
    <div class="tool-card">
        <form action="javascript:void(0)" id="custominvoicefrm" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tool-card mb-4">
                        <h3 class="font-size-18 font-weight-bold">Add Your Branding</h3>
                        <div class="row">
                            <div class="col-lg-6" id="uploadsection">
                                <div class="form-group">
                                    <label for="invoice_logo">Upload your logo if any</label>
                                    <input class="form-control" id="invoice_logo" name="invoice_logo" type="file"/>
                                    <small style="font-size: 11px;">Logo size should be 75 X 75</small>
                                </div>
                            </div>
                            <div class="col-lg-4" id="logosection" style="display:none;">
                                <div class="form-group mt-4">
                                    <img src="" style="display:none;width: 85px;height: auto;" id="invoice_logo_preview"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="invoice_heading">Company Name</label>
                                    <input type="text" name="invoice_heading" maxlength="50" class="form-control" id="invoice_heading" value="" placeholder="Company or Your Full Name"/>
                                    <small style="font-size: 11px;">If the logo does not exist, then this will be displayed in the header.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h3 class="font-size-18 font-weight-bold">Your Document Content</h3>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <textarea rows="25" class="form-control" id="document_content" name="document_content" style="min-height: 400px;"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h3 class="font-size-18 font-weight-bold">Digital Signature</h3>
                        <div class="row">
                            <div class="col-lg-5 mb-3">
                                <div class="form-group">                                    
                                    <div id="sig"></div>
                                    <div class="text-right mt-2 m-auto">
                                        <button id="clear" class="btn btn-sm" style="background: #E2E8FA;color: #000;">Clear Signature</button>
                                    </div>
                                    <textarea id="signature64" name="contact_agreement_sign" style="display: none"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-end gap-2 w-100 mb-3" id="document-action-buttons">
                        <button type="button" id="btn_create_invoice" class="invoice-action-btn" onClick="digitaldocument.generateDocument('pdf');">
                            <i class="fas fa-download"></i> Download Document
                        </button>
                        <button type="button" id="btn_create_print" class="invoice-action-btn" onClick="digitaldocument.generateDocument('print');">
                            <i class="fas fa-eye"></i> Preview Document
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Information Section -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About Digital Document </h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-file"></i> Create Branded Digital Documents</h4>
                                    <p>Make Branded Quotes with one click! Trusted by millions of people!</p>
									 <p>Design and download professional digital documents in seconds with ToolHubSpot's Free Custom Document Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool provides an easy and powerful way to create documents that reflect your brand identity.</p>
                                    <p>Take full control of every element — add your logo, Company name more.</p>
                                    <p>With a 100% customizable template and no sign-up required, you can generate and download high-quality PDFs — completely free. Start creating smarter, branded digital documents today with ToolHubSpot!</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-star"></i> Key Features</h4>
                                    <ul class="feature-list">
                                        <li><strong>Add Branding:</strong> Support custome branding like logo or business name.
										</li>
                                        <li><strong>No Need Html:</strong> Not need to know about html.</li>
                                        <li><strong>PDF Download & Print:</strong> Download professional document as PDFs or print directly.</li>
                                        <li><strong>Digital Signature:</strong> Add your digital signature</li>
                                    </ul>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Step-by-step guide -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> How to create digital document?</h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4><i class="fas fa-star"></i> Step-by-step guide</h4>
								<ol style="line-height:30px;">
                                    <li>Add your logo or company name for branding.</li>
                                    <li>Enter the document content you want to include. You can style it as you like using the editor options.</li>
                                    <li>Provide your signature in the <strong>Digital Signature</strong> field.</li>
                                    <li>Click the <strong>Preview Document</strong> button to review how your document looks before printing.</li>
                                    <li>Click the <strong>Download Document</strong> button to generate a PDF.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>