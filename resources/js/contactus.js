var ContactUs = function(){
	var formvalidator = function(){
		if($("#contactUsFrm").length > 0)
			$("#contactUsFrm").validate();
	}

	/* Send Contact Us */
	var sendInquiry  = function() {
		$("#contactUsFrm").trigger('submit');
		if($('#contactUsFrm').valid()) 
        {	
            var data = {};		
			data = $("#contactUsFrm").serialize();	
			$.ajax({
				url: "/contact-us",
	            type: "POST",
				data: data,
                beforeSend : function(){
                   $("#contactusbtn").html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Please Wait...`);  
                   $("#contactusbtn").attr("disabled", true)
                },
                complete: function() {
                    $("#btn_create_invoice").html(`<i class="fas fa-paper-plane"></i> Send Message`);                   
                    $("#contactusbtn").attr("disabled", false)
                },
				success: function(r)
				{
					Swal.fire({title:"Thank you!", text:"Your message has been sent successfully.", icon:"success"}).then(function(){							
                        window.location.reload();
					});
				},
				error: function (data) {
                    console.log(data);
					Swal.fire({icon:"error",title:"oops",text:JSON.parse(data.responseText).message});
				}
			});
		}
	}

	return{
		init:function(){
			formvalidator();
		},
		sendInquiry,
	}
}();

// Initialize when page loads
$(function () {
    ContactUs.init();
});
window.ContactUs = ContactUs;