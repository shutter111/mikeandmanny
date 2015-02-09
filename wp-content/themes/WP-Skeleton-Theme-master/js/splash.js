/*$(document).ready(function(){

	$('#applynow').click(function(){
		$('#application-form').bPopup();
		return false;
	});

});*/

(function($){
	$(document).ready(function(){

		$('#applynow').click(function(){
			$('.container.app').bPopup({
				opacity: 0.9,
				transition: 'slideDown',
				speed: 500
			});
			return false;
		});

	});
}(jQuery));