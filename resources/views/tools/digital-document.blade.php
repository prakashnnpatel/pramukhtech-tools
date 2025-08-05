<style>
    .card-header-2 {
        background-color: #fff;
        padding: 0;
    }
    .kbw-signature { width: 100%; height: 200px; border:1px solid #000;}   
    @media (max-width: 768px) {
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
<h1 class="font-weight-bold">Create Free Digital Document & Downloadable</h1>
<h2 class="font-size-18 font-weight-bold">Create Branded Digital Documents Instantly – Trusted by Millions!</h2>
<p>Design and download professional digital documents in seconds with ToolHubSpot's Free Custom Document Generator. Whether you're a freelancer, small business owner, or entrepreneur, our tool provides an easy and powerful way to create documents that reflect your brand identity.</p>
<p>Take full control of every element — add your logo, Company name more.</p>
<p>With a 100% customizable template and no sign-up required, you can generate and download high-quality PDFs — completely free. Start creating smarter, branded digital documents today with ToolHubSpot!</p>
<form action="javascript:void(0)" id="custominvoicefrm" method="post">
<div class="row">
    <div class="col-lg-12">
        <div class="card pb-0">
            <div class="card-header card-header-2">
                <h3 class="font-size-18 font-weight-bold">Add Your Branding</h3>
            </div>
            <div class="card-body p-0 pt-2">
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
        </div>
        <div class="card pb-0">
            <div class="card-header card-header-2">
                <h3 class="font-size-18 font-weight-bold">Your Document Content</h3>
            </div>
            <div class="card-body p-0 pt-2 pb-3">
                <div class="row">
                    <div class="col-lg-12">
                        <textarea rows="20" class="form-control" id="document_content" name="document_content"></textarea>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <div>
                                <label>Signature</label>
                                <div id="sig"></div>	
                                <div class="text-right mt-2 m-auto">						
                                    <button id="clear" class="btn  btn-sm" style="background: #E2E8FA;color: #000;">Clear Signature</button>
                                </div>
                                <textarea id="signature64" name="contact_agreement_sign" style="display: none"></textarea>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
            <div class="card-footer card-header-2 mb-3" style="border:none;">
                <div class="d-flex flex-wrap justify-content-end gap-2 w-100" id="invoice-action-buttons">
                    <button type="button" id="btn_create_invoice" class="th-btn btn-md mr-2" onClick="digitaldocument.generateDocument('pdf');">Download Document</button>
                    <button type="button" id="btn_create_print" class="th-btn btn-md" onClick="digitaldocument.generateDocument('print');">Preview Document</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>