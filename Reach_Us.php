<?php include 'base_template.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
	</script>

	<script>
	var myCenter=new google.maps.LatLng(22.68849,75.87669);
	var marker;

	function initialize()
	{
	var mapProp = {
	center:myCenter,
	zoom: 15,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};

	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

	marker=new google.maps.Marker({
	position:myCenter,
	animation:google.maps.Animation.BOUNCE
	});

	marker.setMap(map);
	}

	google.maps.event.addDomListener(window, 'load', initialize);


</script>
       
        <title>Reach Us | IIPS</title>

       
</head>

<body>
	 <?php startblock('content'); ?>
	 <div id="wrap">
	  <div class="container" style="background-color:#FFFFFF;">
	   	  <h4>Reach Us</h4><br><br>
		  
 		  <div class="row">
		     <div class="col-md-4" style="background-color:#333333; color:#FFFFFF">
	 
				<b>IIPS Address : </b><br><br>
				Devi Ahilya University<br>
					Takshashila Campus, Khandwa Road<br>
					Indore - 452001, INDIA<br>
					Phone: 91-731-2461888, 2462087, 2461332, 2760101<br>
					Fax - 91-731-2467888<br>
					admin@iips.edu.in<br>
					*for more details go through our virtual tour.<br>
             </div>

             <div class="col-md-8">
                   <b>Virtual Tour</b><br><br>
					<!-- Google Maps iframe link -->
					<div id="googleMap" style="width:500px;height:380px;"></div>
					<center>
					<input type="button" value="Guide Me" onClick=""></input>
					<input type="button" value="Pause" onClick=""></input>
					<input type="button" value="Manual Navigation" onClick=""></input>
					<input type="button" value="Previous" onClick=""></input>
					<input type="button" value="Next" onClick=""></input>
					
					</center>
             </div>
		  </div><!--row class Ended -->
       </div><!--container class Ended -->
	</div><!-- End of wrap class -->
	<?php endblock(); ?>		
		
</body>
</html>
