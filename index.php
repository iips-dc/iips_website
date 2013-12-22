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
	<link rel="stylesheet" href="carousel.css">
  </head>

  <body>
     <?php
	 	include('header.php');
	 ?>
	 <div id="wrap">
	 <?php
		include('content.php');
	 ?>
	 </div>
	 <?php
		include('footer.php');
		include('jsLinks.php');
	 ?>
	 
	<!-- Script for slider -->
	<script type="text/javascript" src="jsLibrary/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
    </script>
	
	<!-- Script for "News/Events" tab -->
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
