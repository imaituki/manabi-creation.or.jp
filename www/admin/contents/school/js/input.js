$(function(){
	
	// パスワード表示
	$("#displaypass").change(function(){
		$(":input[name='staff[password]']").attr( "type", $(this).prop("checked") ? "text" : "password" );
	});
	
});
