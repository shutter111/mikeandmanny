/*$(document).ready(function(){

	$('#applynow').click(function(){
		$('.application-form').bPopup();
		return false;
	});

});*/

(function($){
	$(document).ready(function(){

		$('.application-form select').fancySelect();

		$('.applynow').each(function(){

			$(this).click(function(){
				var attr = $(this).attr('data-attr');

				$('.application-form').each(function(){
					$(this).hide().filter('#'+attr).show();
				});
				
				$('.container.app').bPopup({
					opacity: 0.9,
					transition: 'slideDown',
					speed: 500,
					closeClass:'closeX',
					follow: [true, false]
				});
				return false;
			});
		});

		$('.sub').each(function(){
			var sub = $(this);

			sub.click(function(){
				var hash = $(this).attr('href');
				$('.active-page').removeClass('active-page');

				$('.hidden-page').each(function(){
					$('.form').addClass('hidden-page');
					$(this).filter(hash).removeClass('.hidden-page').addClass('active-page');
				});
				//console.log(hash);
				return false;
			});		
		});

	});
}(jQuery));