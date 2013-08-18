
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carousel Template for Bootstrap</title>
	<?php
		include('cssLinks.php');
	?>
	<!--CSS For Testimonial-->

  </head>
  <!-- NAVBAR
================================================== -->
  <body>
  <?php
  	include('header.php');
	include('slider.php');
	include('notice.php');
	include('newsEvents.php');
	
	include('footer.php');
	include('jsLinks.php');
  ?>
  <script src="js/jquery.quote_rotator.js" type="text/javascript" charset="utf-8"></script>
  <script>
  $(function () {
  	$('#myTab a').click(function (e) {
    e.preventDefault();
  $(this).tab('show');
})

    $('#myTab a:last').tab('show');
  })
  
  
</script>
<script><!-- Script for testimonial-->
	$(document).ready(function() {
            $('ul#quotes').quote_rotator();
            $('ul#button_quotes').quote_rotator();
        });
</script>
  </body>
</html>
