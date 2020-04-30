$(function(){
	$("form").on("submit", function(e){
		$(this).find("input[name='_nonce']").remove();
		$(this).append($("<input name='_nonce' type='hidden' />").val($("script[data-nonce]").attr("data-nonce")));
	});
});