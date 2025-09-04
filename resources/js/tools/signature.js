var digitalSignature = function()
{
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').on('click', function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');		
    });
    $("#doanload_signature").on("click", function(){
        if($("#signature64").val() != "") {           
            var base64Image = $("#signature64").val();
           $('<a>').attr('id', "download_a_signture").attr('href', base64Image).attr('download', 'toolhubspot_signature.png').appendTo('body').get(0).click();
           $("#download_a_signture").remove();
        }
        else {
            Swal.fire({icon:"error",title:"oops",text:"Please draw your digital signature!"});
        }
    });
}

$(function() {
    digitalSignature();
});
window.digitalSignature = digitalSignature;