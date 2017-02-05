<?php
 
  /**** ATHLETE APPLICATION MODAL *****/
  $formData = get_field('athlete_application_french',2);

?>

<div id="athlete-application-fr" class="modal fade">
	<div class="content-wrapper">
	  <div class="close-this-modal">X</div>	
	  <div class="center"><h2>Athlete application French</h2></div>
	  <form class="modal-form" data-email="<?php echo $formData[0]['email_to_send_data']?>">
	  	<div class="form-error"></div>
	  	<div id="athlete-carousel" class="carousel slide" data-ride="carousel">
	  		<div class="carousel-inner" role="listbox">
	  			<div class="item active">
				  	<div class="row">
					  	<div class="col-md-6">
					  		<input type="text" placeholder="<?php echo $formData[0]['first_name'];?>" id="f-name" value="">
					  	</div>
					  	<div class="col-md-6">	
					  		<input type="text" placeholder="<?php echo $formData[0]['last_name'];?>" id="l-name" value="">
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-4">
					  		<input type="text" placeholder="<?php echo $formData[0]['address'];?>" id="address" value="">
					  	</div>
					  	<div class="col-md-4">	
					  		<input type="text" placeholder="<?php echo $formData[0]['city'];?>" id="city" value="">
					  	</div>
					  	<div class="col-md-4">	
					  		<select id="province">
					  			<option selected>AB</option>
					  			<option selected>BC</option>
					  			<option selected>MB</option>
					  			<option selected>NB</option>
					  			<option selected>NL</option>
					  			<option selected>NS</option>
					  			<option selected>NT</option>
					  			<option selected>NU</option>
					  			<option selected>ON</option>
					  			<option selected>QC</option>
					  			<option selected>SK</option>
					  			<option selected>YT</option>
					  		</select>
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-6">
					  		<input type="text" placeholder="<?php echo $formData[0]['phone_number'];?>" id="phone" value="">
					  	</div>
					  	<div class="col-md-6">	
					  		<input type="text" placeholder="<?php echo $formData[0]['email'];?>" id="email" value="">
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-6">
					  		<input type="text" placeholder="<?php echo $formData[0]['ski_club'];?>" id="ski-club" value="">
					  	</div>
					  	<div class="col-md-6">	
					  		<input type="text" placeholder="<?php echo $formData[0]['coach_name'];?>" id="c-name" value="">
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
					  		<input type="text" placeholder="<?php echo $formData[0]['year_of_birth'];?>" id="yob" value="">
					  	</div>
					  	<div class="col-md-3">	
					  		<input type="text" placeholder="<?php echo $formData[0]['height'];?>" id="height" value="">
					  	</div>
					  	<div class="col-md-3">	
					  		<input type="text" placeholder="<?php echo $formData[0]['weight'];?>" id="weight" value="">
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-4">	
					  		<input type="text" placeholder="<?php echo $formData[0]['helmet_size'];?>" id="helmet-size" value="">
					  	</div>
					  	<div class="col-md-4">	
					  		<input type="text" placeholder="<?php echo $formData[0]['pole_size'];?>" id="pole-size" value="">
					  	</div>
					  	<div class="col-md-4">	
					  		<input type="text" placeholder="<?php echo $formData[0]['sirt_size'];?>" id="shirt-size" value="">
					  	</div>
				  	</div>
				</div><!-- /. END FIRST ITEM -->
				<div class="item">
					<div class="row">
						<div class="col-md-12">		
						  	<label><?php echo $formData[0]['questions'][0]['question'];?></label>
						  	<textarea id="q-1"></textarea>
						</div>  	
				  	</div>
				  	<div class="row">
						<div class="col-md-6">		
						  	<label><?php echo $formData[0]['questions'][1]['question'];?></label>
						  	<textarea id="q-2"></textarea>
						</div>
						<div class="col-md-6">		
						  	<label><?php echo $formData[0]['questions'][2]['question'];?></label>
						  	<textarea id="q-3"></textarea>
						</div>   	
				  	</div>
				  	<div class="row">
						<div class="col-md-12">		
						  	<label><?php echo $formData[0]['questions'][3]['question'];?></label>
						  	<textarea id="q-4"></textarea>
						</div>  	
				  	</div>
				</div><!-- /. END SECOND ITEM -->	
				<div class="item">
					<div class="row">
						<div class="col-md-12">		
						  	<label><?php echo $formData[0]['questions'][4]['question'];?></label>
						  	<textarea id="q-5"></textarea>
						</div>  	
				  	</div>
				  	<div class="row">
						<div class="col-md-12">		
						  	<label><?php echo $formData[0]['questions'][5]['question'];?></label>
						  	<textarea id="q-6"></textarea>
						</div>
				  	</div>
				  	<div class="row">
						<div class="col-md-12">		
						  	<label><?php echo $formData[0]['questions'][6]['question'];?></label>
						  	<textarea id="q-7"></textarea>
						</div>  	
				  	</div>
				  		
				</div><!-- /. END third ITEM -->
				<div class="item">
					<div class="row">
						<div class="col-md-12">		
						   <?php echo $formData[0]['thank_you_message']?>
						</div>  	
				  	</div>
				</div><!-- /. END SUCCESS ITEM -->	

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