<style>
    .card-header-2 {
        background-color: #fff;
        padding: 0;
    }
</style>

<style>
/* Desktop defaults */
table.table tfoot td.label-cell {
    text-align: right;
    font-weight: bold;
    vertical-align: middle;
}
#invoice-action-buttons button {
    min-width: 150px;
    margin-left:5px;
}
@media (max-width: 768px) {
    table.table thead {
        display: none;
    }

    table.table, table.table tbody, table.table tfoot, table.table tr, table.table td {
        display: block;
        width: 100%;
    }

    table.table tr {
        margin-bottom: 1rem;
        border: 1px solid #ddd;
        padding: 0.5rem;
        border-radius: 6px;
        background: #fff;
    }

    table.table td {
        padding: 8px 10px;
        position: relative;
    }

    table.table td::before {
        content: attr(data-label);
        font-weight: bold;
        display: block;
        margin-bottom: 6px;
        color: #555;
    }

    table.table tfoot tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 10px;
        background: #fff;
    }

    table.table tfoot td {
        display: block;
        width: 100% !important;
        text-align: left !important;
        padding: 6px 10px;
    }

    table.table tfoot td.label-cell::before {
        content: attr(class); /* This avoids displaying anything extra */
        display: none;
    }

    table.table tfoot td:not(.label-cell)::before {
        content: attr(data-label);
        font-weight: bold;
        display: block;
        margin-bottom: 4px;
    }

    table.table tfoot input.form-control {
        width: 100%;
        
    }

    #invoice-action-buttons {
        flex-direction: column;
        align-items: stretch;
    }

    #invoice-action-buttons button {
        width: 100%;
        margin-bottom:5px;
    }
}
</style>
<div class="invoice-builder-container">
    <div class="calculator-header mb-4">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-file-invoice"></i>
            </div>
            <div class="header-text">
                <h1 class="calculator-title">Create Free Invoice - Fully Customizable & Downloadable</h1>
            </div>
        </div>
    </div>
    <h2 class="font-size-18 font-weight-bold mb-3">Make Branded Invoices with one click! Trusted by millions of people!</h2>
    <p>Create and download professional invoices in seconds with ToolHubSpot's Free Custom Invoice Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool offers a simple yet powerful way to design invoices that reflect your brand. You have full control over every field - add your logo, company details, customer information, items, taxes, and more.</p>
    <p>With a 100% customizable template and no sign-up required, you can generate invoices and download them in high-quality PDF format - completely free. Start invoicing smarter and faster with ToolHubSpot today!</p>
    <p>Check the video for quick help: <a href="https://www.youtube.com/watch?v=fKOlLUcIJZA" target="_blank" title="Quick Help">Watch on YouTube</a></p>

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
                                <textarea class="invoice-form-control" rows="4" name="invoice_from_address" id="invoice_from_address" placeholder="Billing Address">ABC Company Ltd.
Full Address...
Phone: 792X-XXX-XXX
Email: abcxxxx@gmail.com</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="invoice-form-label"><i class="fas fa-user"></i> To Address</label>
                                <textarea class="invoice-form-control" placeholder="Shipping Address" rows="4" name="invoice_to_address" id="invoice_to_address">Receiver Name
Full Address...
Phone: 987X-XXX-XXX
Email: receixxxx@gmail.com</textarea>
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
</div>
