var ToolCommonJs = function() {    
    
    var trackToolHits = function() {
        var tool_id = $("#tool_id").val();
        $.ajax({
            url: '/update-tool-use-counter/'+tool_id,
            type: "POST",
            data: [],            
            success: function(r) {
            }
        });
    }
    
    return {
		init:function() {
            trackToolHits();
		},
	}
}();

$(function() {
    ToolCommonJs.init();
});
window.ToolCommonJs = ToolCommonJs;