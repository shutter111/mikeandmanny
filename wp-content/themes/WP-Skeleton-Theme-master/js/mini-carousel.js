$(document).ready(function(){

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