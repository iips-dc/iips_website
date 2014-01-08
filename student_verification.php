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
				
				<label>Name</label>
			  	<input type="text" class="form-control" placeholder="Enter The Student's Name"> <span style="font-size: 14px;">Ex- Naman Soni</span>
			  	<br>
			 	<br>

			 	<label>Select Course</label>

			  <select class="form-control">
			  		<option>MCA</option>
			  		<option>Mtech</option>
			  		<option>MBA 5 years</option>
			  		<option>MBA TA years</option>
			  		<option>MBA APR years</option>
			  		
			  </select>
			  <br><br>

			  <label>Enter Roll Number</label>
			  <input type="text" class="form-control" placeholder= "Enter the Roll Number" >
			  <span style="font-size: 14px;">Ex- IT-2K9-81 </span>
			  <br><br>

			  <label>Enter Enrollment Number</label>
			  <input type="text" class="form-control" placeholder= "Enter the Enrollemt Number" >
			  <span style="font-size: 14px;">Ex- DE/09/193</span>


			  <br><br>
			  <center>
			  <button class="btn btn-primary" data-bind='click: verifyStudent, disable: hasClickedTooManyTimes'>
			  	Submit
			  </button>

			  </center>
			  <br>
			  <div class="col-md-12"  data-bind='visible: hasClickedTooManyTimes'>
			  Result: Yes the following student exist in our Database. Click <a href="#">here </a>to clear the form and search for another student: <a href="#">Search another student</a>
			  </div>


			  
			 <!--  <span class="input-group-btn">
				<button class="btn btn-primary icon-search" type="button"></button>
			  </span> -->
			</div><!-- /input-group -->
		</div>
		<div class="col-md-2">
			<!-- left blank intentionally -->
		</div>
	</div>
	<!-- End of 3rd row class -->
	<?php endblock(); ?>    


	<?php startblock('script') ; ?>

	
	<?php endblock() ; ?>  
	   