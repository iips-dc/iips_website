<!DOCTYPE html>
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
		include('slider_cssLinks.php');
	?>
	<style type="text/css">

	</style>
  </head>

  <body>
  	<script type="text/javascript">
  	    $(window).load(function(){
  	        $('#myModal').modal('show');
  	    });
  	</script>

  	<!-- Button trigger modal -->
  	<?php

  	echo '  	

  	<!-- Modal -->
  	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	  <div class="modal-dialog">
  	    <div class="modal-content">
  	      <div class="modal-header">
  	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  	        <h4 class="modal-title" id="myModalLabel">Please Upgrade your browser</h4>
  	      </div>
  	      <div class="modal-body">
  	        Please use Google Chrome <a href="https://www.google.com/intl/en/chrome/browser/">( Download Chrome )</a> or Firefox <a href="http://www.mozilla.org/en-US/firefox/all/">( Download Firefox )</a> for better experience. 
  	      </div>
  	      <div class="modal-footer">
  	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  	        
  	      </div>
  	    </div><!-- /.modal-content -->
  	  </div><!-- /.modal-dialog -->
  	</div><!-- /.modal -->

  		' ;
  	?>

     <?php
	 	include('header.php');
	 ?>
	 <div id="wrap">
	 <?php
	 	$browser = get_browser(null, true) ;
		$browser['browser'] ;
		include('content.php');

	 ?>
	 </div>
	 <?php
		include('footer.php');
		include('jsLinks.php');
		include('slider_jsLinks.php');
	 ?>
	 
	
	
	<!-- Script for "News/Events" tab -->
	<script src="assets/js/holder.js"></script>
	<?php 

		$browser = get_browser(null, true) ;
		$browser =  strtolower($browser['browser']) ; 

		if ($browser == ie) {
		echo " 
			<script>
 		 $(function () {
  			$('#myTab a').click(function (e) {
    			e.preventDefault();
  				$(this).tab('show');
			})

    	    $('#myTab a:first').tab('show');

 			$(window).load(function(){
 			        $('#myModal').modal('show');
 			    });	   	    
 		 })
	</script>

		";


		}
				else {
					echo " 
					<script>
		 		 $(function () {
		  			$('#myTab a').click(function (e) {
		    			e.preventDefault();
		  				$(this).tab('show');
					})

		    	    $('#myTab a:first').tab('show');

		 				   	    
		 		 })
			</script>

				";
			}
	?>
	
  <!-- Script for testimonial -->
	<script>
	$(document).ready(function() {
            $('ul#quotes').quote_rotator();
            $('ul#button_quotes').quote_rotator();
        });


   </script>
   <script src="https://www.surveymonkey.com/jsPop.aspx?sm=mM0njMJ6P3CyzaMh0OhMew_3d_3d"> </script>
  </body>
</html>
