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
  <link rel="stylesheet" href="css/jquery-progress-bubbles.css">
  </head>

  <body>
     <?php
	 	include('header.php');
	 ?>
	 <div id="wrap">
	 <div id="wrap">
    <div class="container" style="background-color:#FFFFFF;">

    <br><h3> Programs We Offer </h3><br>
         <div id="row">
       <div class="col-md-2">
            <ul class="nav side-tabs">
                <li><a class="icon-chevron-sign-right" href="#tab1">Add User</a></li>
                <li><a class="icon-chevron-sign-right" href="#tab2">Edit User</a></li>
                <li><a class="icon-chevron-sign-right" href="#tab3">Add Alumini</a></li>
                <li><a class="icon-chevron-sign-right" href="#tab4">View Transaction ID</a></li>
                <li><a class="icon-chevron-sign-right" href="#tab5">Activate and Deactivate Account</a></li>
            </ul>
       </div>
      
       <div class="col-md-10">
          <div id="tab1"  class="tab-content active">
            Add User  
            <div id="bubbles"></div>
              <p>
                  <button id="regress" class="btn btn-primary">Previous Step</button>
                  <button id="progress" class="btn btn-success">Next Step</button>
              </p>
          </div>

          <div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
            Edit User
          </div>

          <div id="tab3" class="tab-content hide">
              Add Alumini
          </div>

          <div id="tab4" class="tab-content hide">
              View Transaction
          </div>

          <div id="tab5" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
              Activate and Deactivate Account
          </div>
            </div><!--.col-md-10 -->
         </div><!--.row class ended -->

  </div><!-- End of container class -->
   </div><!--End of Wrap id -->   
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

     $(function(){
 
                  $('#bubbles').progressBubbles( {
                      bubbles : [
                           {'title' : 'Add User'},
                           {'title' : 'Select Type'},
                          ]
                    });
 
                    $('#bubbles').progressBubbles('progress');
                    $('#bubbles').progressBubbles('regress');
                    $('#progress').on('click', function(event){
                    $('#bubbles').progressBubbles('progress');
                   });
                    $('#regress').on('click', function(event){
                    $('#bubbles').progressBubbles('regress');
                    });
    });
	</script>

	<script><!-- Script for testimonial-->
	$(document).ready(function() {
            $('ul#quotes').quote_rotator();
            $('ul#button_quotes').quote_rotator();
        });
   </script>
   <script src="js/jquery-progress-bubbles.js"></script>
  </body>
</html>
