// カレンダー切り替え
$(function(){
	
	// カレンダーめくり
	$(document).on( 'click', '.schecule-change', function(){
		$('input[name="search_y"]').val($(this).attr('data-y'));
		$('.btn_search').trigger('click');
	});
	
	// 登録
	$(document).on( 'click', '.pointer', function(){
		$.ajax({
			type: "POST",
			url:  "./update.php", 
			data: {date : $(this).closest('div').find('.ym').val() + ("0"+$.trim($(this).html())).slice(-2), 
				   curriculum : $(this).closest('div').attr('data-curriculum'), 
				   set : $(this).attr('data-set')}, 
			success: function(e){
				$("#searchList").html(e);
				$("#searchList").css('display','block');
			}
		});
		
	});
});