$(function() {
	
	// ニュースタブ
	$('.tab_unit div a').on('click', function(){
		$('.tab_unit div').removeClass('active');
		$(this).closest('div').addClass('active');
		var id = $(this).attr('href').replace('#news-tab','');
		if( id > 0 ) {
			$("[class^='news-tab']").hide();
			$('.news-tab-'+id).show();
		} else {
			$("[class^='news-tab']").show();
		}
	});
	
});
