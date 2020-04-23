$(function() {
	
	// モード切替
	$('input[name="content"]').on('change', function(){
		if( $(this).val() == 1 ) {
			$('#th_content2').show();
			$('#th_comment').html('その他お問い合わせ');
		} else {
			$('#th_content2').hide();
			$('#th_comment').html('お問い合わせ内容<span class="need">必須</span>');
		}
	});
	
});
