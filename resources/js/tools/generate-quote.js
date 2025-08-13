var uploadedInvoiceLogo = "";
var customInvoice = function()
{
    function addCustomeOption(flag = '')
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
        if(flag != "init") {
            $("#tr_item_"+suggectionAddedCnt).trigger('focus');
        }        
        $("#invoice_item_section tfoot").html(`
            <tr class="summary-row">                            
                <td  colspan="4" class="text-right label-cell">
                    <input type="text" style="font-weight: bold;display: inherit;width: auto; text-align: right;" class="form-control" Placeholder="Sub Total" name="itemSummeryHeader[subtotal]" value="Sub Total"/> 
                </td>
                <td><input type="text" id="tr_subtotal" name="itemSummery[subtotal]" class="form-control" value="0" onBlur="customInvoice.invoiceItemTotalCalculation();"></td>
            </tr>
            <tr id="tr_total_descount_section" class="summary-row" style="display:none;">
                <td colspan="4" class="text-right label-cell"> 
                    <input type="text" style="font-weight: bold;display: inherit;width: auto; text-align: right;" class="form-control" Placeholder="Discount" name="itemSummeryHeader[discount]" value="Discount"/>
                </td>
                <td><input type="text" id="tr_discount" name="itemSummery[discount]" class="form-control" value="0" onBlur="customInvoice.invoiceItemTotalCalculation();"></td>
            </tr>
            <tr class="summary-row">
                <td colspan="4" class="text-right label-cell">                
                    <input type="text" style="font-weight: bold;display: inherit;width: auto; text-align: right;" class="form-control" Placeholder="Tax" name="itemSummeryHeader[tax]" value="Tax"/>
                </td>
                <td><input type="text" id="tr_tax" name="itemSummery[tax]" class="form-control" value="0" onBlur="customInvoice.invoiceItemTotalCalculation();"></td>
            </tr>
            <tr class="summary-row">
                <td  colspan="3" class="text-right label-cell">
                    <textarea name="notes" class="form-control" placeholder="Notes"></textarea>
                </td>
                <td class="text-right label-cell">
                    <input type="text" style="font-weight: bold;display: inherit;width: auto; text-align: right;" class="form-control" Placeholder="Grand Total" name="itemSummeryHeader[grand_total]" value="Grand Total"/>                 
                </td>
                <td>
                    <input type="text" id="tr_grand_total" name="itemSummery[grand_total]" class="form-control" value="0.00">
                    <a href="javascript:void(0);" role="button" title="Add Discount" onClick="customInvoice.showDiscount(this);">+ Add Discount</a>
                </td>
            </tr>            
        `);
        invoiceSubToalCalculation();
        invoiceItemTotalCalculation();
    }

    var showDiscount = function(obj)
    {
        $(obj).hide();
        $("#tr_total_descount_section").show();
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
        let discount = parseFloat($("#tr_discount").val());
        let tax = parseFloat($("#tr_tax").val());
        if(!isNaN(subTotal) && !isNaN(tax)) {
           let totalCal = 0.00;
            if(!isNaN(discount)) {
                totalCal = subTotal - discount
            }
            $("#tr_grand_total").val((totalCal + tax).toFixed(2));
        }
        else {
            $("#tr_grand_total").val(0.00);
        }
    }

    function optionPredefineHtml()
    {
        let predefineHtml = `<tr class="cnt_invoice_custome_row" id="custom_row_{row_index}">
            <td data-label="Sr.no">
                <div class="d-flex justify-content-start">                    
                    <div style="margin-right:10px;">
                        <input style="width:50px;" type="text" name="itemdetail[{row_index}][id]" id="tr_id_{row_index}" class="form-control">
                    </div>    
                    <div>
                        <a href="javascript:void(0);" title="Delete Row" onClick="customInvoice.deleteSuggestedRow({row_index});"><i class="fa-solid fa-trash mt-2"></i></a>                 
                    </div>                
                </div>
            </td>
            <td data-label="Item">
                <input type="text" id="tr_item_{row_index}" name="itemdetail[{row_index}][item_name]" class="form-control">
            </td>
            <td data-label="Qty">
                <input type="text" id="tr_qty_{row_index}" name="itemdetail[{row_index}][item_qty]" onBlur="customInvoice.invoiceItemCalculation({row_index})" class="form-control">
            </td>
            <td data-label="Price">
                <input type="text" id="tr_price_{row_index}" name="itemdetail[{row_index}][item_price]" onBlur="customInvoice.invoiceItemCalculation({row_index});customInvoice.addAutoRow({row_index})" class="form-control">
            </td>
            <td data-label="Total">
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
                $("#btn_create_invoice").text(`Download PDF`);
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
            addCustomeOption("init");

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
        addAutoRow,
        showDiscount,
    }
}();


// Initialize when page loads
$(function () {
    customInvoice.init();
});
window.customInvoice = customInvoice;
