<?php
 
  /**** ATHLETE APPLICATION MODAL *****/


?>

<div id="athlete-application" class="modal fade">
	<div class="content-wrapper">
	  <div class="close-this-modal">X</div>	
	  <div class="center"><h2>Athlete application</h2></div>
	  <form class="modal-form">

	  	<div id="form-carousel" class="carousel slide" data-ride="carousel">
	  		<div class="carousel-inner" role="listbox">
	  			<div class="item active">
				  	<div class="row">
					  	<div class="col-md-6">
					  		<input type="text" placeholder="First Name" id="f-name" value="">
					  	</div>
					  	<div class="col-md-6">	
					  		<input type="text" placeholder="Last Name" id="l-name" value="">
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-4">
					  		<input type="text" placeholder="Street Address" id="address" value="">
					  	</div>
					  	<div class="col-md-4">	
					  		<input type="text" placeholder="City" id="city" value="">
					  	</div>
					  	<div class="col-md-4">	
					  		<select id="province">
					  			<option selected>ON</option>
					  		</select>
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-6">
					  		<input type="text" placeholder="Phone Number" id="phone" value="">
					  	</div>
					  	<div class="col-md-6">	
					  		<input type="text" placeholder="Email" id="email" value="">
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-6">
					  		<input type="text" placeholder="Ski Club" id="ski-club" value="">
					  	</div>
					  	<div class="col-md-6">	
					  		<input type="text" placeholder="Coach's Name" id="c-name" value="">
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-3">
					  		<select class="gender">
					  			<option selected>Male</option>
					  			<option>Female</option>
					  		</select>
					  	</div>
					  	<div class="col-md-3">	
					  		<input type="text" placeholder="Year of birth" id="yob" value="">
					  	</div>
					  	<div class="col-md-3">	
					  		<input type="text" placeholder="Height" id="height" value="">
					  	</div>
					  	<div class="col-md-3">	
					  		<input type="text" placeholder="Weight" id="weight" value="">
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-4">	
					  		<input type="text" placeholder="Helmet Size" id="helmet-size" value="">
					  	</div>
					  	<div class="col-md-4">	
					  		<input type="text" placeholder="Pole Size" id="pole-size" value="">
					  	</div>
					  	<div class="col-md-4">	
					  		<input type="text" placeholder="Shirt Size" id="shirt-size" value="">
					  	</div>
				  	</div>
				</div><!-- /. END FIRST ITEM -->
				<div class="item">
					<div class="row">
						<div class="col-md-12">		
						  	<label>How many off season camps have you attended in the last 2 years and where?</label>
						  	<textarea></textarea>
						</div>  	
				  	</div>
				  	<div class="row">
						<div class="col-md-6">		
						  	<label>How many siblings do you have?</label>
						  	<textarea></textarea>
						</div>
						<div class="col-md-6">		
						  	<label>Do you play any other sports? If yes, which ones?</label>
						  	<textarea></textarea>
						</div>   	
				  	</div>
				  	<div class="row">
						<div class="col-md-12">		
						  	<label>What do you hope to gain from the Mike and Manny Camp?</label>
						  	<textarea></textarea>
						</div>  	
				  	</div>
				</div><!-- /. END SECOND ITEM -->	
				<div class="item">
					<div class="row">
						<div class="col-md-12">		
						  	<label>What does ski racing mean to you?</label>
						  	<textarea></textarea>
						</div>  	
				  	</div>
				  	<div class="row">
						<div class="col-md-12">		
						  	<label>Describe your perfect day on the mountain.</label>
						  	<textarea></textarea>
						</div>
				  	</div>
				  	<div class="row">
						<div class="col-md-12">		
						  	<label>Describe yourself in 3 words.</label>
						  	<textarea></textarea>
						</div>  	
				  	</div>
				  		
				</div><!-- /. END third ITEM -->	

			</div>
			<div class="page-counter">1/3</div>
			<div class="next-btn n-btn">NEXT <span class="glyphicon glyphicon-menu-right"></span></div>
			<div class="prev-btn n-btn"><span class="glyphicon glyphicon-menu-left"></span> PREV</div>
			<div class="row form-submit">
				<div class="apply-btn">APPLY</div>
			</div>
    	</div><!-- END CAROUSEL -->		
	  </form> 
	</div>  
</div><!-- /.modal -->