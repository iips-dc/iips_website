<?php include 'base_full_width.php' ?>

	<?php startblock('page_title'); ?>
		Verify Student
	<?php endblock(); ?>
 
	 <?php startblock('page_heading'); ?> 
		<center class="text-primary">Student Verification</center>
	<?php endblock(); ?>

	 
	<?php startblock('content'); ?>
	
	<p>This is the student verification page. Here you can verify if a person is a student of IIPS or not.<p>
	<p>Type the name of the student in the below search box to verify the student.<p><br>
	
	<div class="row">
		<div class="col-md-2">
			<!-- left blank intentionally -->
		</div>
		<div class="col-md-8">
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Enter The Student's Name">
			  <span class="input-group-btn">
				<button class="btn btn-primary icon-search" type="button"></button>
			  </span>
			</div><!-- /input-group -->
		</div>
		<div class="col-md-2">
			<!-- left blank intentionally -->
		</div>
	</div>
	<!-- End of 3rd row class -->
	<?php endblock(); ?>      
	   