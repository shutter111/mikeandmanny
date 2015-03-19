$(document).ready(function(){

	$('figure.video').each(function(){

		$(this).click(function(){
			//console.log('clicked');
			var id = $(this).attr('data-attr');
			var vid = $('.vimeoVid').filter('#'+id);

			vid.bPopup({
				opacity: 0.9,
				transition: 'slideDown',
				speed: 500,
				closeClass:'closeX',
				follow: [true, false]
			});
		});

	});

});