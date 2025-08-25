var Search = function() {    
    function formSubmit() {
        var search = $.trim($("#toolSearchFrm").find("#search").val());
        var category = $.trim($("#toolSearchFrm").find("#category").val());
        var searchURL = '/tools';
        
        if (category != "") {
            searchURL += '/' + category;
        }
    
        if (search != "") {
            searchURL += '?search=' + encodeURIComponent(search);
        }
        //console.log(searchURL);    
        window.location.href = searchURL;
    }

    return {
		init:function() {
            $('#toolSearchBtn').click(function () {
                formSubmit();
            });
		},
	}
}();

$(function() {
    Search.init();
});
window.Search = Search;