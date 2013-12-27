<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>IIPS | HOME</title>

    <!-- Bootstrap core CSS -->
    <?php
		include('cssLinks.php');
	?>
  </head>

  <body>
     <?php
	 	include('student_header.php');
	 ?>
	 <div id="wrap">
	 
		<!-- Container for result section starts -->
		<div class="container">
			<h3 class="text-center"><b class="label label-primary icon-bullhorn"> IIPS Result Section</b></h3><br>
			<div class="row text-center">
				<div class="col-md-2">
				
				</div>
				<div class="col-md-4 text-center">
					<select class="form-control">
						<option>-Select Course-</option>
						<option>MCA-6Year (Integrated)</option>
						<option>MBA-MS (5years)</option>
						<option>MBA-TA</option>
						<option>MBA-APR (2years)</option>
						<option>M.Tech-IT</option>
						<option>B.Com-Hons.</option>
					</select>
				</div>
				<div class="col-md-4">
					<select class="form-control inputWidth">
						<option>-Select Batch-</option>
						<option>2K8</option>
						<option>2K9</option>
						<option>2K10</option>
						<option>2K11</option>
						<option>2K12</option>
						<option>2K13</option>
					</select>
				</div>
				<div class="col-md-2">
				
				</div>
			</div><br>
			<h5 class="alert alert-danger text-center">No Result Has Been Declared Yet !</h5>
			<!-- End of Row class -->
		</div>
		<!-- .container ends -->
		
	 </div>
	 <?php
		include('footer.php');
		include('jsLinks.php');
	 ?>
	 
	
	
	<!-- Script for "News/Events" tab -->
	<script>

   </script>
  </body>
</html>