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
		$('#athlete-carousel').carousel('next');
	});
	$('.prev-btn').on('click',function () {
		$('#athlete-carousel').carousel('prev');
	});

	// kill carousel auto play
	$('.carousel').each(function(){
        $(this).carousel({
            interval: false
        });
    });

	// CLOSE ANY CAROSEL
    $('.close-this-modal').on('click',function () {
    	 $('.modal').modal('hide');
    });

    // coach carousel 
    $('.open-coach-form').on('click',function (e) {
    	e.preventDefault();
    	$('#coach-application').modal('show');
    });

    // athlete carousel 
    $('.open-athlete-form').on('click',function (e) {
    	e.preventDefault();
    	$('#athlete-application').modal('show');
    });

    $('#athlete-carousel').on('slide.bs.carousel', function (event) {
    	var active = $(event.target).find('.carousel-inner > .item.active');
		var from = active.index();
		var next = $(event.relatedTarget);
		var to = next.index();
		var currentSlide = to;
		if(to > 0){
			$('#athlete-carousel .prev-btn').fadeIn();
		}else{
			$('#athlete-carousel .prev-btn').fadeOut();
		}
		if(to == 2 ){
			$('#athlete-carousel .next-btn').fadeOut();
			$('#athlete-carousel .form-submit').fadeIn();
		}else{
			$('#athlete-carousel .next-btn').fadeIn();
			$('#athlete-carousel .form-submit').fadeOut();
		}
		$('#athlete-carousel .page-counter').html((currentSlide+1)+'/3'); 

    });
 	

    // ATHLETE APPLICATION 
    $('#athlete-carousel .apply-btn').on('click',function () {
		collectAndSendAthleteData();
    });

    // COACH APPLICATION 
    $('#coach-carousel .apply-btn').on('click',function () {
		collectAndSendCoachData();
    });


    // send form data 
    function collectAndSendCoachData () {
    	var fName = $('#coach-carousel #f-name').val();
    	var lName = $('#coach-carousel #l-name').val();
    	var addr = $('#coach-carousel #address').val();
    	var city = $('#coach-carousel #city').val();
    	var province = $('#coach-carousel #province :selected').text();
    	var phone = $('#coach-carousel #phone').val();
    	var email = $('#coach-carousel #email').val();
    	var skiClub = $('#coach-carousel #ski-club').val();
    	var athName = $('#coach-carousel #athletes-name').val();
    	var ref = $('#coach-carousel #reference').val();
    	
    	var valid = true;
    	var msg = "";

    	if(fName == ''){ valid = false;  msg+= "<div class='error-item'>First Name </div>";}
    	if(lName == ''){ valid = false; msg+= "<div class='error-item'>Last Name</div>";}
    	if(addr == ''){ valid = false; msg+= "<div class='error-item'>Address</div>";}
    	if(city == ''){ valid = false; msg+= "<div class='error-item'>City</div>";}
    	if(phone == ''){ valid = false; msg+= "<div class='error-item'>Phone</div>";}
    	if(email == '' || !validateEmail(email) ){ valid = false; msg+= "<div class='error-item'>Email</div>";}
    	if(skiClub == ''){ valid = false; msg+= "<div class='error-item'>Ski Club</div>";}
    	
 
    	if(valid){
    		$('#coach-carousel').carousel(1);
			$('#coach-carousel .form-submit').fadeOut();
			$('#coach-carousel .form-error').html('');
		
			var data =  {
						 'FormEmail':$('.modal-form').data('email'),	
		                 'FName': fName,
		                 'LName': lName,
		                 'addr': addr,
		                 'city': city,
		                 'province': province,
		                 'phone': phone,
		                 'email': email,
		                 'skiClub': skiClub,
		                 'athName': athName,
		                 'ref': ref
                  		};

			      $.ajax({
			        type: "POST",
			        url: '/form-submits/AddACoach.php',
			        data: data,
			        success: function (){ console.log("SENT DATA "); }
			      });

    	} else {
    		$('#coach-application .form-error').html(msg);
    	}


    }


    // send form data 
    function collectAndSendAthleteData () {
    	var fName = $('#athlete-carousel #f-name').val();
    	var lName = $('#athlete-carousel #l-name').val();
    	var addr = $('#athlete-carousel #address').val();
    	var city = $('#athlete-carousel #city').val();
    	var province = $('#athlete-carousel #province :selected').text();
    	var phone = $('#athlete-carousel #phone').val();
    	var email = $('#athlete-carousel #email').val();
    	var skiClub = $('#athlete-carousel#ski-club').val();
    	var coachName = $('#athlete-carousel#c-name').val();
    	var gender = $('#athlete-carousel .gender :selected').text();
    	var yob = $('#athlete-carousel #yob').val();
    	var height = $('#athlete-carousel #height').val();
    	var weight = $('#athlete-carousel #weight').val();
    	var hSize = $('#athlete-carousel #helmet-size').val();
    	var pSize = $('#athlete-carousel #pole-size').val();
    	var sSize = $('#athlete-carousel #shirt-size').val();
    	var q1 = $('#athlete-carousel #q-1').val();
    	var q2 = $('#athlete-carousel #q-2').val();
    	var q3 = $('#athlete-carousel #q-3').val();
    	var q4 = $('#athlete-carousel #q-4').val();
    	var q5 = $('#athlete-carousel #q-5').val();
    	var q6 = $('#athlete-carousel #q-6').val();
    	var q7 = $('#athlete-carousel #q-7').val();
    	var valid = true;
    	var msg = "";

    	if(fName == ''){ valid = false;  msg+= "<div class='error-item'>First Name </div>";}
    	if(lName == ''){ valid = false; msg+= "<div class='error-item'>Last Name</div>";}
    	if(addr == ''){ valid = false; msg+= "<div class='error-item'>Address</div>";}
    	if(city == ''){ valid = false; msg+= "<div class='error-item'>City</div>";}
    	if(phone == ''){ valid = false; msg+= "<div class='error-item'>Phone</div>";}
    	if(email == '' || !validateEmail(email) ){ valid = false; msg+= "<div class='error-item'>Email</div>";}
    	if(skiClub == ''){ valid = false; msg+= "<div class='error-item'>Ski Club</div>";}
    	if(coachName == ''){ valid = false; msg+= "<div class='error-item'>Coach Name</div>";}
    	if(yob == ''){ valid = false; msg+= "<div class='error-item'>Year Of Birth</div>";}
    	if(height == ''){ valid = false; msg+= "<div class='error-item'>Height</div>";}
    	if(weight == ''){ valid = false; msg+= "<div class='error-item'>Weight</div>";}
    	if(hSize == ''){ valid = false; msg+= "<div class='error-item'>Helmet Size</div>";}
    	if(pSize == ''){ valid = false; msg+= "<div class='error-item'>Pole Size</div>";}
    	if(sSize == ''){ valid = false; msg+= "<div class='error-item'>Shirt Size</div>";}

    	if(q1 == ''){ valid = false; msg+= "<div class='error-item'>Question 1</div>";}
    	if(q2 == ''){ valid = false; msg+= "<div class='error-item'>Question 2</div>";}
    	if(q3 == ''){ valid = false; msg+= "<div class='error-item'>Question 3</div>";}
    	if(q4 == ''){ valid = false; msg+= "<div class='error-item'>Question 4</div>";}
    	if(q5 == ''){ valid = false; msg+= "<div class='error-item'>Question 5</div>";}
    	if(q6 == ''){ valid = false; msg+= "<div class='error-item'>Question 6</div>";}
    	if(q7 == ''){ valid = false; msg+= "<div class='error-item'>Question 7</div>";}
 
    	if(valid){
    		$('#athlete-carousel').carousel(3);
	    	$('#athlete-carousel .page-counter').html(''); 
	    	$('#athlete-carousel .next-btn').fadeOut();
			$('#athlete-carousel .form-submit').fadeOut();
			$('#athlete-carousel .prev-btn').fadeOut();

			var data =  {
						 'FormEmail':$('.modal-form').data('email'),	
		                 'FName': fName,
		                 'LName': lName,
		                 'addr': addr,
		                 'city': city,
		                 'province': province,
		                 'phone': phone,
		                 'email': email,
		                 'skiClub': skiClub,
		                 'coachName': coachName,
		                 'gender': gender,
		                 'yob': yob,
		                 'height': height,
		                 'weight': weight,
		                 'hSize': hSize,
		                 'pSize': pSize,
		                 'sSize': sSize,
		                 'q1': q1,
		                 'q2': q2,
		                 'q3': q3,
		                 'q4': q4,
		                 'q5': q5,
		                 'q6': q6,
		                 'q7': q7
                  		};

			      $.ajax({
			        type: "POST",
			        url: '/form-submits/AddAUser.php',
			        data: data,
			        success: function (){ console.log("SENT DATA "); }
			      });

    	} else {
    		$('#athlete-application .form-error').html(msg);
    	}


    }

 	// check for valid email 
    function validateEmail(email) {
	    var re = /\S+@\S+\.\S+/;
	    return re.test(email);
	}


});