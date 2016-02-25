<?php
 
  /**** ATHLETE APPLICATION MODAL *****/
  $formData = get_field('coach_application', 2);

?>

<div id="coach-application" class="modal fade">
	<div class="content-wrapper">
	  <div class="close-this-modal">X</div>	
	  <div class="center"><h2>Coaches Letter Submission</h2></div>
	  <form class="modal-form" data-email="<?php echo $formData[0]['email_to_send_data']?>">
	  	<div class="form-error"></div>
	  	<div id="coach-carousel" class="carousel slide" data-ride="carousel">
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
					  	<div class="col-md-6">
					  		<input type="text" placeholder="<?php echo $formData[0]['phone_number'];?>" id="phone" value="">
					  	</div>
					  	<div class="col-md-6">	
					  		<input type="text" placeholder="<?php echo $formData[0]['email'];?>" id="email" value="">
					  	</div>
				  	</div>
				  	<div class="row">
					  	<div class="col-md-12">
					  		<input type="text" placeholder="<?php echo $formData[0]['ski_club'];?>" id="ski-club" value="">
					  	</div>
					  	<div class="col-md-12">
					  		<input type="text" placeholder="<?php echo $formData[0]['athletes_name'];?>" id="athletes-name" value="">
					  	</div>
				  	</div>
				  	<div class="row">
						<div class="col-md-12">		
						  	<label><?php echo $formData[0]['reference'];?></label>
						  	<textarea id="reference"></textarea>
						</div>  	
				  	</div>
				</div><!-- /. END FIRST ITEM -->
				<div class="item">
					<div class="row">
						<div class="col-md-12">		
						   <?php echo $formData[0]['thank_you_message']?>
						</div>  	
				  	</div>
				</div><!-- /. END SUCCESS ITEM -->	
			</div>
			<div class="row form-submit">
				<div class="apply-btn">SUBMIT</div>
			</div>
    	</div><!-- END CAROUSEL -->		
	  </form> 
	</div>  
</div><!-- /.modal -->