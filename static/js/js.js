$(function(){
	$('.cont-up aside > input').click(function(){
		$('.cont-up aside').toggleClass('active');
	});
	var font = 15;
	$('.cont-up .font').click(function(e){
		e.preventDefault();
		var val = $(this).data('val');
		switch(val){
			case "m" : font -= 1; break;
			case "s" : font = 12; break;
			case "p" : font += 1; break;
		}
		$('#body').css('fontSize',font+'px');
	});

	if($('header nav').length > 0){
		$('.header > nav ul > li:nth-of-type(1) a').click(function(e){		
			e.preventDefault();
			var href = $(this).attr('href');
			window.open(href,'고운한복소개','scrollbars=yes,resizable=yes,width=900px,height=500px');
		});
	}
}