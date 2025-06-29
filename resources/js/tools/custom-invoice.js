var uploadedInvoiceLogo = "";
var customInvoice = function()
{
    function addCustomeOption()
    {
        var suggectionAddedCnt = $(".cnt_invoice_custome_row").length;        
        if($("#custom_row_-"+suggectionAddedCnt).length == 0) {
            var preparHtml = optionPredefineHtml().replace(/{row_index}/g, suggectionAddedCnt);
        }
        else {
            suggectionAddedCnt = (Math.floor(Math.random() * 1000));
            var preparHtml = optionPredefineHtml().replace(/{row_index}/g, suggectionAddedCnt);			
        }
        $("#invoice_item_section tbody").append(preparHtml);
        $("#tr_id_"+suggectionAddedCnt).val(($(".cnt_invoice_custome_row").length));
        $("#tr_item_"+suggectionAddedCnt).trigger('focus');
        $("#invoice_item_section tfoot").html(`
            <tr>
                <td style="text-align:right;" colspan="4">
                    <input type="text" style="width:200px; margin-left: 76%; font-weight: bold;" name="itemSummeryHeader[subtotal]" class="form-control" Placeholder="Sub Total" value="Sub Total"/>
                </td>
                <td><input type="text" id="tr_subtotal" name="itemSummery[subtotal]" onBlur="customInvoice.invoiceItemTotalCalculation();"  value="0" class="form-control"></td>
            </tr>
            <tr>
                <td style="text-align:right;" colspan="4">
                    <input type="text" style="width:200px; margin-left: 76%; font-weight: bold;" name="itemSummeryHeader[tax]" class="form-control" Placeholder="Tax" value="Tax"/>
                </td>
                <td><input type="text" id="tr_tax" name="itemSummery[tax]" value="0.00" onBlur="customInvoice.invoiceItemTotalCalculation();" class="form-control"></td>
            </tr>
            <tr>
                <td style="text-align:right;" colspan="4">                    
                    <input type="text" style="width:200px; margin-left: 76%; font-weight: bold;" name="itemSummeryHeader[grand_total]" class="form-control" Placeholder="Grand Total" value="Grand Total"/>
                </td>
                <td><input type="text" id="tr_grand_total" name="itemSummery[grand_total]" value="0.00" class="form-control"></td>
            </tr>    
        `);
        invoiceSubToalCalculation();
        invoiceItemTotalCalculation();
    }

    var addAutoRow = function(index)
    {
        let totalRow = $(".cnt_invoice_custome_row").length;
        let lastRow = (index + 1);
        if(totalRow == lastRow && $("#tr_total_"+index).val() != "" && $("#tr_total_"+index).val() != "0" && $("#tr_total_"+index).val() != "0.00") {
            addCustomeOption();
        }
    }

    var deleteSuggestedRow = function(index) {       
		$("#custom_row_"+index).remove();					
	}

    var invoiceItemCalculation = function(index) {
        let itemQty = $("#tr_qty_"+index).val();
        let itemPrice = $("#tr_price_"+index).val();
        if(!isNaN(itemQty) && !isNaN(itemPrice))
        {
            let totalRowSum = parseFloat(itemPrice * itemQty).toFixed(2);
            $("#tr_total_"+index).val(totalRowSum);
        }
        else {
            $("#tr_total_"+index).val(0.00);
        }
        invoiceSubToalCalculation();
    }

    var invoiceSubToalCalculation = function(){
        var subTotal=0.00;
        $(".item_total").each(function(index, totalInfo){
            let itemTotal = $(totalInfo).val();
            if(!isNaN(itemTotal)) {
                subTotal = parseFloat(subTotal) + parseFloat(itemTotal);
            }   
        });
        if(!isNaN(subTotal)) {
            $("#tr_subtotal").val(subTotal.toFixed(2));
        }
        else {
            $("#tr_subtotal").val(0.00);
        }
        invoiceItemTotalCalculation();
    }

    var invoiceItemTotalCalculation = function(){
        let subTotal = parseFloat($("#tr_subtotal").val());
        let tax = parseFloat($("#tr_tax").val());
        if(!isNaN(subTotal) && !isNaN(tax)) {
            $("#tr_grand_total").val((subTotal + tax).toFixed(2));
        }
        else {
            $("#tr_grand_total").val(0.00);
        }
    }

    function optionPredefineHtml()
    {
        let predefineHtml = `<tr class="cnt_invoice_custome_row" id="custom_row_{row_index}">
            <td>
                <div class="d-flex justify-content-start">                    
                    <div style="margin-right:10px;">
                        <input style="width:50px;" type="text" name="itemdetail[{row_index}][id]" id="tr_id_{row_index}" class="form-control">
                    </div>    
                    <div>
                        <a href="javascript:void(0);" title="Delete Row" onClick="customInvoice.deleteSuggestedRow({row_index});"><i class="fa-solid fa-trash mt-2"></i></a>                 
                    </div>                
                </div>
            </td>
            <td>
                <input type="text" id="tr_item_{row_index}" name="itemdetail[{row_index}][item_name]" class="form-control">
            </td>
            <td>
                <input type="text" id="tr_qty_{row_index}" name="itemdetail[{row_index}][item_qty]" onBlur="customInvoice.invoiceItemCalculation({row_index})" class="form-control">
            </td>
            <td>
                <input type="text" id="tr_price_{row_index}" name="itemdetail[{row_index}][item_price]" onBlur="customInvoice.invoiceItemCalculation({row_index});customInvoice.addAutoRow({row_index})" class="form-control">
            </td>
            <td>
                <input type="text" id="tr_total_{row_index}" name="itemdetail[{row_index}][item_total]" class="form-control item_total" value="0">
            </td>
        </tr>`;
        return predefineHtml;
    }

    var generateInvoice= function(flag)
    {   
        var invoiceData = {};
        invoiceData['flag'] = flag;
        invoiceData['invoice_logo'] = uploadedInvoiceLogo;
        $.each($("#custominvoicefrm").serializeArray(), function(index, recordInfo){
            invoiceData[recordInfo['name']] = recordInfo['value'];
        });

        $.ajax({
            url: '/generate-invoice',
            type: "POST",
            data: invoiceData,
            beforeSend : function(){
                if(flag == "pdf")
                {   
                    $("#btn_create_invoice").html(`<span class="spinner-border spinner-border-sm" 
                        role="status" aria-hidden="true"></span> Please Wait...`);                    
                }
                else {
                    $("#btn_create_print").html( `<span class="spinner-border spinner-border-sm"
                         role="status" aria-hidden="true"></span> Please Wait...`);
                         
                } 
                $("#btn_create_print, #btn_create_invoice").attr("disabled", true)
            },
            complete: function() {
                $("#btn_create_invoice").text(`Create Invoice PDF`);
                $("#btn_create_print").text(`Preview`);
                $("#btn_create_print, #btn_create_invoice").attr("disabled", false)
            },
            success: function(r) {
                if(r != "" && r != 0)
				{
					if(flag == "pdf") {
						window.open(r);
					} else {
						var newWin = window.open('','Print-Window');
						newWin.document.open();
						newWin.document.write(r);
						newWin.document.close();
					}
				}
            }
        });       
    }

    return{
		init:function(){
            addCustomeOption("");

            $('#invoice_logo').on('change', function (e) {
                const file = e.target.files[0];
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        uploadedInvoiceLogo = e.target.result;  
                        $("#invoice_logo_preview").attr("src", uploadedInvoiceLogo).show();  
                        $("#uploadsection").attr("class", "col-lg-8");   
                        $("#logosection").attr("class", "col-lg-4").show();                                       
                    };
                    reader.readAsDataURL(file);
                }
            });
        },
        addCustomeOption,
        deleteSuggestedRow,
        invoiceItemCalculation,
        generateInvoice,
        invoiceItemTotalCalculation,
        addAutoRow
    }
}();


// Initialize when page loads
$(function () {
    customInvoice.init();
});
window.customInvoice = customInvoice;
