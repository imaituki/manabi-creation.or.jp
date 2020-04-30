$(function(){
	
	// パスワード表示
	$("#displaypass").change(function(){
		$(":input[name='password']").attr( "type", $(this).prop("checked") ? "text" : "password" );
	});
	
});
