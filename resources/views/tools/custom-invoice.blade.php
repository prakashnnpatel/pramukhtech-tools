<div class="fd-calculator-container">
    <div class="calculator-header mb-4">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-file-invoice"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">Free Invoice Generator</h1>
				<p><i class="fas fa-star"></i> Trusted by millions worldwide!</p>
            </div>
        </div>
    </div>	

    <form action="javascript:void(0)" id="custominvoicefrm" method="post">
        <input type="hidden" name="tool_name" id="tool_name" value="Invoice" />
        <div class="row">
            <div class="col-lg-6">
                <div class="invoice-section-card">
                    <h3><i class="fas fa-building"></i> Add Your Branding</h3>
                    <div class="row">
                        <div class="col-lg-12" id="uploadsection">
                            <div class="form-group">
                                <label for="invoice_logo" class="invoice-form-label"><i class="fas fa-image"></i> Upload your logo if any</label>
                                <input class="invoice-form-control" id="invoice_logo" name="invoice_logo" type="file"/>
                                <small style="font-size: 11px;">Logo size should be 75 X 75</small>
                            </div>
                        </div>
                        <div class="col-lg-4" id="logosection" style="display:none;">
                            <div class="form-group mt-4">
                                <img src="" style="display:none;width: 85px;height: auto;" alt="Invoice Logo" id="invoice_logo_preview"/>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="invoice_heading" class="invoice-form-label"><i class="fas fa-user-tie"></i> Company Name</label>
                                <input type="text" name="invoice_heading" maxlength="50" class="invoice-form-control" id="invoice_heading" value="" placeholder="Company or Your Full Name"/>
                                <small style="font-size: 11px;">If the logo does not exist, then this will be displayed in the header.</small>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="invoice_create_date" class="invoice-form-label"><i class="fas fa-calendar"></i> Invoice Date</label>
                                <input type="text" name="invoice_create_date" class="invoice-form-control" id="invoice_create_date" value="{{date('d/m/Y')}}" placeholder="Any Format" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="invoice_number" class="invoice-form-label"><i class="fas fa-hashtag"></i> Invoice #</label>
                                <input type="text" name="invoice_number" class="invoice-form-control" id="invoice_number" value="" placeholder="701"/>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="status" class="invoice-form-label"><i class="fas fa-flag"></i> Status</label>
                                <select name="status" id="status" class="invoice-form-control">
                                    <option value="PAID">Paid</option>
                                    <option value="UNPAID">Unpaid</option>
                                    <option value="DUE">Due</option>
                                    <option value="">None</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="invoice-section-card">
                    <h3><i class="fas fa-address-card"></i> Billing & Shipping Address</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="invoice-form-label"><i class="fas fa-user"></i> From Address</label>
                                <textarea class="invoice-form-control" rows="4" name="invoice_from_address" id="invoice_from_address" placeholder="Enter your details (name, address, email, and phone)"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="invoice-form-label"><i class="fas fa-user"></i> To Address</label>
                                <textarea class="invoice-form-control" placeholder="Enter your client's details (name, address, email, and phone)" rows="4" name="invoice_to_address" id="invoice_to_address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="invoice-section-card">
                    <div class="row align-items-center mb-3">
                        <div class="col-lg-6">
                            <h3><i class="fas fa-list"></i> Invoice Items</h3>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-end" style="gap: 14px;">
                                <select name="currency" id="currency" class="invoice-form-control" style="max-width: 180px;">
                                    <option value="">Select Currency</option>
                                    @foreach (config('constants.currencies') as $code => $symbol)
                                        <option value="{{ $code }}" {{ old('currency') == $code ? 'selected' : '' }}>
                                            {{ $code }} ({{ $symbol }})
                                        </option>
                                    @endforeach
                                </select>
                                <button type="button" id="btn_add_row" class="invoice-action-btn" onClick="customInvoice.addCustomeOption();"><i class="fas fa-plus"></i> Add New Item</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="invoice-table" id="invoice_item_section">
                            <thead class="text-center">
                                <tr>
                                    <th><input style="width:52px;font-weight: bold;" Placeholder="#" class="invoice-form-control" type="text" name="tableHeader[sr]" value="#"/></th>
                                    <th><input type="text" style="font-weight: bold;" class="invoice-form-control" Placeholder="Item" name="tableHeader[item]" value="Item"/></th>
                                    <th><input type="text" style="font-weight: bold;" class="invoice-form-control" Placeholder="Qty" name="tableHeader[qty]" value="Qty"/></th>
                                    <th><input type="text"  style="font-weight: bold;" class="invoice-form-control" Placeholder="Price" name="tableHeader[price]" value="Price"/></th>
                                    <th><input type="text" style="font-weight: bold;" class="invoice-form-control" Placeholder="Total" name="tableHeader[total]" value="Total"/></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                    <div class="d-flex flex-wrap justify-content-end gap-2 w-100 mt-4" id="invoice-action-buttons">
                        <button type="button" id="btn_create_invoice" class="invoice-action-btn" onClick="customInvoice.generateInvoice('pdf');"><i class="fas fa-file-pdf"></i> Download PDF</button>
                        <button type="button" id="btn_create_print" class="invoice-action-btn" onClick="customInvoice.generateInvoice('print');"><i class="fas fa-print"></i> Print Preview</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Step-by-step guide -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> How to create an invoice with the online generator </h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4><i class="fas fa-star"></i> Step-by-step guide</h4>
								<ol style="line-height:30px;">
									<li>Enter your branding details, such as your logo or company name.</li>
									<li>Fill in the invoice date, invoice number, and status.</li>
									<li>Enter your details (name, address, and contact information) in the <strong>From Address</strong> section.</li>
									<li>Enter the client's details (name, address, and contact information) in the <strong>To Address</strong> section.</li>
									<li>Add product or service details, including quantities and prices. You can also edit the titles/labels as needed.</li>
									<li>Include any applicable taxes or discounts.</li>
									<li>Add notes if you want to provide additional context or a message for your client.</li>
									<li>Review the total amount. You can edit taxes, prices, or any other details if necessary.</li>
									<li>Click the <strong>Preview</strong> button to see how your invoice looks before printing.</li>
									<li>Click the <strong>Download</strong> button to save your invoice as a PDF.</li>
									<li>For quick help: <a href="https://www.youtube.com/watch?v=fKOlLUcIJZA" target="_blank" title="Quick Help">Watch on YouTube</a></li>
								</ol>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<!-- Information Section -->
    <div class="info-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-content-card">
                    <div class="content-header">
                        <h3><i class="fas fa-book-open"></i> About Invoice Generator </h3>
                    </div>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-block">
                                    <h4><i class="fas fa-calculator"></i> Create an Invoice in Minutes</h4>
                                    <p>Make Branded Invoices with one click! Trusted by millions of people!</p>
									<p>Create and download professional invoices in seconds with ToolHubSpot's Free Custom Invoice Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool offers a simple yet powerful way to design invoices that reflect your brand. You have full control over every field - add your logo, company details, customer information, items, taxes, and more.</p>
									<p>With a 100% customizable template and no sign-up required, you can generate invoices and download them in high-quality PDF format - completely free. Start invoicing smarter and faster with ToolHubSpot today!</p>
									<p>Check the video for quick help: <a href="https://www.youtube.com/watch?v=fKOlLUcIJZA" target="_blank" title="Quick Help">Watch on YouTube</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4><i class="fas fa-star"></i> Key Features</h4>
                                <ul class="feature-list">
                                    <li><strong>Multiple Currencies:</strong> Support for global currencies to bill clients anywhere.
                                    </li>
                                    <li><strong>Tax & Discount Options:</strong> Easily add GST, VAT, or custom taxes or discounts.</li>
                                    <li><strong>PDF Download & Print:</strong> Download professional invoices as PDFs or print directly.</li>
                                    <li><strong>Mobile Friendly:</strong> Works perfectly on all devices</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h4><i class="fas fa-lightbulb"></i> Benefits</h4>
                                <ul class="feature-list">
                                    <li><strong>100%</strong> FREE!</li>
                                    <li>Unlimited transactions</li>
                                    <li>Generate professional invoices online</li>
                                    <li>Fully Customizable & Downloadable</li>
                                    <li>Trusted by millions of people!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>
