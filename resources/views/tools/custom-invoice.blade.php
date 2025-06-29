<style>
    .card-header-2 {
        background-color: #fff;
        padding: 0;
    }
</style>
<h1 class="font-size-18 font-weight-bold">Create Custom Invoice</h1>
<p>Create professional, branded invoices in minutes with our easy-to-use custom invoice generator. Whether you're a freelancer, small business, or agency, you can design invoices that reflect your brand, add taxes, include multi-line descriptions, and download them instantly - no design skills needed.</p>
<form action="javascript:void(0)" id="custominvoicefrm" method="post">
<div class="row">
    <div class="col-lg-6">
        <div class="card pb-0">
            <div class="card-header card-header-2">
                <h1 class="font-size-18 font-weight-bold">Add Your Branding</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="invoice_logo">Upload your logo if any</label>
                            <input class="form-control" id="invoice_logo" name="invoice_logo" type="file"/>
                            <small style="font-size: 11px;">Logo size should be 75 X 75</small>
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
                            <label for="invoice_create_date">Invoice Date</label>
                            <input type="text" name="invoice_create_date" class="form-control" id="invoice_create_date" value="{{date('d/m/Y')}}" placeholder="Any Formate" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="invoice_number">Invoice #</label>
                            <input type="text" name="invoice_number" class="form-control" id="invoice_number" value="" placeholder="701"/>
                        </div>
                    </div>
					<div class="col-lg-4">
                        <div class="form-group">
                            <label for="status">Status</label>
							<select name="status" id="status" class="form-control">
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
    </div>
    <div class="col-lg-6">
        <div class="card pb-0">
            <div class="card-header card-header-2">
                <h1 class="font-size-18 font-weight-bold">Billing & Shipping Address</h1>
            </div>
            <div class="card-body">
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
                        <h1 class="font-size-18 font-weight-bold">Invoice Items</h1>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button type="button" id="btn_add_row" class="btn btn-primary" onClick="customInvoice.addCustomeOption();">Add New Row</button>
                    </div>
                </div>                
            </div>
            <div class="card-body">
                <table class="table" id="invoice_item_section">
                    <thead class="text-center">
                        <tr>
                            <th><input style="width:52px;" Placeholder="#" class="form-control" type="text" name="tableHeader[sr]" value="#"/></th>
                            <th><input type="text" class="form-control" Placeholder="Item" name="tableHeader[item]" value="Item"/></th>
                            <th><input type="text" class="form-control" Placeholder="Qty" name="tableHeader[qty]" value="Qty"/></th>
                            <th><input type="text" class="form-control" Placeholder="Price" name="tableHeader[price]" value="Price"/></th>
                            <th><input type="text" class="form-control" Placeholder="Total" name="tableHeader[total]" value="Total"/></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot></tfoot>
                </table>  
            </div>
            <div class="card-footer card-header-2 text-right" style="border:none;">
                <button type="button" id="btn_create_invoice" class="btn btn-primary" onClick="customInvoice.generateInvoice('pdf');">Create Invoice PDF</button>
                <button type="button" id="btn_create_print" class="btn btn-primary" onClick="customInvoice.generateInvoice('print');">Preview</button>
            </div>
        </div>
    </div>
</div>
</form>
