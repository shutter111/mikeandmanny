$(document).ready(function(){

	$('figure.video').each(function(){

		$(this).click(function(){
			console.log('clicked');
			var vid = $(this).parent().parent().parent().next('.vimeoVid');

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