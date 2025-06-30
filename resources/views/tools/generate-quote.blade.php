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

<h1 class="font-weight-bold">Generate Free Client Quotes Instantly - Fully Customizable & Downloadable</h1>
<h3 class="font-size-18 font-weight-bold">Make Branded Quote with one click! trusted by millions of people!</h3>
<p>Create and download professional client quotes in seconds with ToolHubSpot's Free Custom Quote Generator. Whether you're a freelancer, small business owner, consultant, or agency, our tool helps you generate polished, branded quotes that impress your clients. Easily add your logo, business information, client details, itemized services, taxes, and more - all from a clean, user-friendly interface.</p>
<p>With fully customizable templates, no login required, and unlimited access, generating high-quality PDF quotes has never been easier. Print or send your quotes instantly - completely free. Trusted by thousands, ToolHubSpot lets you streamline your sales process and present your offers with confidence and professionalism.</p>
<form action="javascript:void(0)" id="custominvoicefrm" method="post">
<input type="hidden" name="tool_name" id="tool_name" value="Quotation" />
<div class="row">
    <div class="col-lg-6">
        <div class="card pb-0">
            <div class="card-header card-header-2">
                <h1 class="font-size-18 font-weight-bold">Add Your Branding</h1>
            </div>
            <div class="card-body p-0 pt-2">
                <div class="row">
                    <div class="col-lg-12" id="uploadsection">
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
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="invoice_heading">Company Name</label>
                            <input type="text" name="invoice_heading" maxlength="50" class="form-control" id="invoice_heading" value="" placeholder="Company or Your Full Name"/>
                            <small style="font-size: 11px;">If the logo does not exist, then this will be displayed in the header.</small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="invoice_create_date">Quote Date</label>
                            <input type="text" name="invoice_create_date" class="form-control" id="invoice_create_date" value="{{date('d/m/Y')}}" placeholder="Any Formate" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="invoice_number">Quote #</label>
                            <input type="text" name="invoice_number" class="form-control" id="invoice_number" value="" placeholder="701"/>
                        </div>
                    </div>
					<div class="col-lg-4">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" id="status" value="" placeholder="Quote Status"/>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card pb-0">
            <div class="card-header card-header-2">
                <h1 class="font-size-18 font-weight-bold">Billing & Shipping Address</h1>
            </div>
            <div class="card-body p-0 pt-2">
                <div class="row">    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>From Address</label>
							<textarea class="form-control" rows="4" name="invoice_from_address" id="invoice_from_address" placeholder="Billing Address">ABC Company Ltd.
Full Address...
Phone: 792X-XXX-XXX
Email: abcxxxx@gmail.com</textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>To Address</label>
                            <textarea class="form-control" placeholder="Shipping Address" rows="4" name="invoice_to_address" id="invoice_to_address">Receiver Name
Full Address...
Phone: 987X-XXX-XXX
Email: receixxxx@gmail.com</textarea>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="row mb-5">
    <div class="col-lg-12">   
        <div class="card">
            <div class="card-hader card-header-2">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="font-size-18 font-weight-bold">Items</h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-end" style="gap: 14px;">
                            <select name="currency" id="currency" style="padding-left: 6px;">
                                <option value="">Select Currency</option>
                                @foreach (config('constants.currencies') as $code => $symbol)
                                    <option value="{{ $code }}" {{ old('currency') == $code ? 'selected' : '' }}>
                                        {{ $code }} ({{ $symbol }})
                                    </option>
                                @endforeach
						    </select>
                            <button type="button" id="btn_add_row" class="th-btn btn-md" onClick="customInvoice.addCustomeOption();">Add New Item</button>
                        </div>						
					</div>					
                </div>                
            </div>
            <div class="card-body p-0 pt-2">
                <table class="table" id="invoice_item_section">
                    <thead class="text-center">
                        <tr>
                            <th><input style="width:52px;font-weight: bold;" Placeholder="#" class="form-control" type="text" name="tableHeader[sr]" value="#"/></th>
                            <th><input type="text" style="font-weight: bold;" class="form-control" Placeholder="Item" name="tableHeader[item]" value="Item"/></th>
                            <th><input type="text" style="font-weight: bold;" class="form-control" Placeholder="Qty" name="tableHeader[qty]" value="Qty"/></th>
                            <th><input type="text"  style="font-weight: bold;" class="form-control" Placeholder="Price" name="tableHeader[price]" value="Price"/></th>
                            <th><input type="text" style="font-weight: bold;" class="form-control" Placeholder="Total" name="tableHeader[total]" value="Total"/></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot></tfoot>
                </table>  
            </div>
            
            <div class="card-footer card-header-2" style="border:none;">
                <div class="d-flex flex-wrap justify-content-end gap-2 w-100" id="invoice-action-buttons">
                    <button type="button" id="btn_create_invoice" class="th-btn btn-md" onClick="customInvoice.generateInvoice('pdf');">Download PDF</button>
                    <button type="button" id="btn_create_print" class="th-btn btn-md" onClick="customInvoice.generateInvoice('print');">Print Preview</button>
                </div>
            </div>

        </div>
    </div>
</div>
</form>
