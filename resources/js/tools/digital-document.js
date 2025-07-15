// Import Summernote CSS and JS
import 'summernote/dist/summernote-bs4.min.css';
import 'summernote/dist/summernote-bs4.min.js';
var uploadedInvoiceLogo = "";
var digitaldocument = function()
{
    var generateDocument= function(flag)
    {   
        var invoiceData = {};
        invoiceData['flag'] = flag;
        invoiceData['invoice_logo'] = uploadedInvoiceLogo;
        $.each($("#custominvoicefrm").serializeArray(), function(index, recordInfo){
            invoiceData[recordInfo['name']] = recordInfo['value'];
        });

        $.ajax({
            url: '/digital-document',
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
                $("#btn_create_invoice").text(`Download Document`);
                $("#btn_create_print").text(`Preview Document`);
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
        init:function()
        {  
             $('#document_content').summernote({
                height: 500,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'hr']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ]
             });
              $('#invoice_logo').on('change', function (e) {
                  const file = e.target.files[0];
                  if (file && file.type.startsWith('image/')) {
                      const reader = new FileReader();
                      reader.onload = function (e) {
                          uploadedInvoiceLogo = e.target.result;  
                          $("#invoice_logo_preview").attr("src", uploadedInvoiceLogo).show();  
                          $("#uploadsection").attr("class", "col-lg-3");   
                          $("#logosection").attr("class", "col-lg-3").show();                                       
                      };
                      reader.readAsDataURL(file);
                  }
              });
          }, 
          generateDocument         
      }
}();

// Initialize when page loads
$(function () {
    digitaldocument.init();
});
window.digitaldocument = digitaldocument;