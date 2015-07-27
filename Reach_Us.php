<?php include 'base_template_2_column.php' ?>
<?php startblock('page_title'); ?>
	Reach Us | IIPS
<?php endblock(); ?>


	<?php startblock('page_heading'); ?>
        Reach Us
	<?php endblock(); ?>

<?php startblock('style') ; ?>
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

<?php endblock() ?>
	
	<?php startblock('sidemenu'); ?>
				     <div class="" style="background-color:#333333; color:#FFFFFF;">
			 
						<b>&nbsp;&nbsp;IIPS Address : </b><br><br>
						&nbsp;&nbsp;Devi Ahilya University<br>
							&nbsp;&nbsp;Takshashila Campus,<br>
							&nbsp;&nbsp;Khandwa Road<br>
							&nbsp;&nbsp;Indore - 452001, INDIA<br>
							&nbsp;&nbsp;Phone: 91-731-2461888, 
							&nbsp;&nbsp;2462087, 2461332, 2760101<br>
							&nbsp;&nbsp;Fax - 91-731-2467888<br>
							&nbsp;&nbsp;Email- admin@iips.edu.in<br>
							&nbsp;&nbsp;*For more details go through
							&nbsp;&nbsp;our virtual tour.<br>
		             </div>
		  
	<?php endblock() ; ?>


    
	 <?php startblock('content'); ?>
	  		  <div class="row">		     		     

             <div class="col-md-12">
                   <b>Virtual Tour</b><br><br>
					<!-- Google Maps iframe link -->
					<div id="googleMap" style="width:100%;height:380px;"></div>
					<center>
					<input type="button" value="Guide Me" onClick=""></input>
					<input type="button" value="Pause" onClick=""></input>
					<input type="button" value="Manual Navigation" onClick=""></input>
					<input type="button" value="Previous" onClick=""></input>
					<input type="button" value="Next" onClick=""></input>
					
					</center>
             </div>
		  </div><!--row class Ended -->

	<?php endblock(); ?>		

