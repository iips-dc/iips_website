<!-- This page renders faculty portal view
when the user clicks on the faculty option at the
top nav bar of the page -->

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
	?>
	<link rel="stylesheet" href="carousel.css">
  </head>

  <body>
     <?php
	 	include('header.php');
	 ?>
	 <div id="wrap">
	 <?php
		include('faculty_content.php');
	 ?>
	 </div>
	 <?php
		include('footer.php');
		include('jsLinks.php');
	 ?>
	<script>
 		 $(function () {
  			$('#myTab a').click(function (e) {
    			e.preventDefault();
  				$(this).tab('show');
			})

    	    $('#myTab a:last').tab('show');
 		 })
	</script>

  <!-- Script for testimonial -->
	<script>
	$(document).ready(function() {
            $('ul#quotes').quote_rotator();
            $('ul#button_quotes').quote_rotator();
        });
   </script>
  </body>
</html>
