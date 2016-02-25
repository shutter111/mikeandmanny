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
    $('.open-athlete-form').on('click',function (e) {
    	e.preventDefault();
    	$('#athlete-application').modal('show');
    });
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

    $('.close-this-modal').on('click',function () {
    	 $('#athlete-application').modal('hide');
    });

    $('.apply-btn').on('click',function () {
    	
		collectAndSendData();
    });


    // send form data 
    function collectAndSendData () {
    	var fName = $('#f-name').val();
    	var lName = $('#l-name').val();
    	var addr = $('#address').val();
    	var city = $('#city').val();
    	var province = $('#province :selected').text();
    	var phone = $('#phone').val();
    	var email = $('#email').val();
    	var skiClub = $('#ski-club').val();
    	var coachName = $('#c-name').val();
    	var gender = $('#gender :selected').text();
    	var yob = $('#yob').val();
    	var height = $('#height').val();
    	var weight = $('#weight').val();
    	var hSize = $('#helmet-size').val();
    	var pSize = $('#pole-size').val();
    	var sSize = $('#shirt-size').val();
    	var q1 = $('#q-1').val();
    	var q2 = $('#q-2').val();
    	var q3 = $('#q-3').val();
    	var q4 = $('#q-4').val();
    	var q5 = $('#q-5').val();
    	var q6 = $('#q-6').val();
    	var q7 = $('#q-7').val();

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
    		$('#form-carousel').carousel(3);
	    	$('#form-carousel .page-counter').html(''); 
	    	$('#form-carousel .next-btn').fadeOut();
			$('#form-carousel .form-submit').fadeOut();
			$('#form-carousel .prev-btn').fadeOut();

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
		                 'weight ': weight ,
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
    		$('.form-error').html(msg);
    	}

    	

    }

 	// check for valid email 
    function validateEmail(email) {
	    var re = /\S+@\S+\.\S+/;
	    return re.test(email);
	}


});