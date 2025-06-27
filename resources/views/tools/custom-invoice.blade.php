
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
        <div class="card">
            <div class="card-header card-header-2">
                <h1 class="font-size-18 font-weight-bold">Invoice Branding</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Choose Invoice Logo</label>
                            <input class="form-control" id="invoice_logo" name="invoice_logo" type="file"/>
                            <small>Logo Size should be 150 X 150</small>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Invoice Title</label>
                            <input type="text" name="invoice_heading" maxlength="13" class="form-control" id="invoice_create_date" value="" />
                            <small style="font-size: 10px;">If logo not upload then title show in invoice header</small>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Invoice Create Date</label>
                            <input type="text" name="invoice_create_date" class="form-control" id="invoice_create_date" value="{{date('d/m/Y')}}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Invoice #</label>
                            <input type="text" name="invoice_number" class="form-control" id="invoice_number" value="1001" />
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header card-header-2">
                <h1 class="font-size-18 font-weight-bold">Other Setting</h1>
            </div>
            <div class="card-body">
                <div class="row">    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>From Address</label>
                            <textarea class="form-control" name="invoice_from_address" id="invoice_from_address"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>To Address</label>
                            <textarea class="form-control" name="invoice_to_address" id="invoice_to_address"></textarea>
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
                            <th>#</th>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot></tfoot>
                </table>  
            </div>
            <div class="card-footer card-header-2 text-right" style="border:none;">
                <button type="button" id="btn_add_row" class="btn btn-primary" onClick="customInvoice.generateInvoice('pdf');">Generate Invoice</button>
                <button type="button" id="btn_add_row" class="btn btn-primary" onClick="customInvoice.generateInvoice('print');">Print Invoice</button>
            </div>
        </div>
    </div>
</div>
</form>
