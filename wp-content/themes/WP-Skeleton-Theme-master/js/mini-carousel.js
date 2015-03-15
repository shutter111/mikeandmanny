$(document).ready(function(){

	$(window).on('load', function(){


		var outerH = ($('.mini-carousel li').height()) - 80;

		$('.mini-carousel').bxSlider({
			slideHeight: outerH,
			infiniteLoop: false,
			pager: false,
			prevSelector: $('#mini-carousel-pager .left'),
			nextSelector: $('#mini-carousel-pager .right'),
			nextText: '',
			prevText: ''
		});
		
	});

	

	//var outerH = $('.mini-carousel li').outerHeight();
	//console.log(outerH);

});