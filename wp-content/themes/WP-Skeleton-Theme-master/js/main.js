$(document).ready(function(){

	var slider;
	if($(window).width() <= 767){

		slider = $('.bxslider').bxSlider({
			minSlides: 1,
			maxSlides: 3,
			slideWidth: 222,
			slideMargin: 18,
			infiniteLoop: false,
			pager: false,
			prevSelector: $('#sponsors-pager .left'),
			nextSelector: $('#sponsors-pager .right'),
			nextText: '',
			prevText: ''
		});

	}else{

		slider = $('.bxslider').bxSlider({
			minSlides: 1,
			maxSlides: 4,
			slideWidth: 222,
			slideMargin: 18,
			infiniteLoop: false,
			pager: false,
			prevSelector: $('#sponsors-pager .left'),
			nextSelector: $('#sponsors-pager .right'),
			nextText: '',
			prevText: ''
		});

	}

	$(window).on('resize', function(){

		if($(window).width() <= 767){

			slider.reloadSlider({
                minSlides: 1,
				maxSlides: 3,
				slideWidth: 222,
				slideMargin: 18,
				infiniteLoop: false,
				pager: false,
				prevSelector: $('#sponsors-pager .left'),
				nextSelector: $('#sponsors-pager .right'),
				nextText: '',
				prevText: ''
            });

		}else {

			slider.reloadSlider({
				minSlides: 1,
				maxSlides: 4,
				slideWidth: 222,
				slideMargin: 18,
				infiniteLoop: false,
				pager: false,
				prevSelector: $('#sponsors-pager .left'),
				nextSelector: $('#sponsors-pager .right'),
				nextText: '',
				prevText: ''
			});

		}

	});

	//mini carousel

	//header animaiton
	$('.main').waypoint(function(direction) {
		if( direction === 'down' && !$('#head').hasClass('fixed') ){

			$('#head').addClass('fixed');

		}else if( direction === 'up' && $('#head').hasClass('fixed') ){

			$('#head').removeClass('fixed');

		}
		
	}, {
			offset: '10%'
		}
	);


	//mobile nav
	$('#menu').slicknav();

	// athlete form 
	$('.next-btn').on('click',function () {
		$('#form-carousel').carousel('next');
	});
	$('.prev-btn').on('click',function () {
		$('#form-carousel').carousel('prev');
	});

	// kill carousel auto play
	$('.carousel').each(function(){
        $(this).carousel({
            interval: false
        });
    });

    // form carousel 
    $('#athlete-application').modal('show');
    $('#form-carousel').on('slide.bs.carousel', function (event) {
    	var active = $(event.target).find('.carousel-inner > .item.active');
		var from = active.index();
		var next = $(event.relatedTarget);
		var to = next.index();
		var currentSlide = to;
		if(to > 0){
			$('#form-carousel .prev-btn').fadeIn();
		}else{
			$('#form-carousel .prev-btn').fadeOut();
		}
		if(to == 2 ){
			$('#form-carousel .next-btn').fadeOut();
			$('#form-carousel .form-submit').fadeIn();
		}else{
			$('#form-carousel .next-btn').fadeIn();
			$('#form-carousel .form-submit').fadeOut();
		}
		$('#form-carousel .page-counter').html((currentSlide+1)+'/3'); 

    });

    $('.close-this-modal,.apply-btn').on('click',function () {
    	 $('#athlete-application').modal('hide');
    });

});