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

	$(window).load(function(){

		if($('.mini-carousel').is(':hidden')){
			$('.mini-carousel').fadeIn(500);
		}
		
		var miniCarousel = $('.mini-carousel').bxSlider({
			infiniteLoop: false,
			pager: false,
			prevSelector: $('#mini-carousel-pager .left'),
			nextSelector: $('#mini-carousel-pager .right'),
			nextText: '',
			prevText: ''
		});

	});

});