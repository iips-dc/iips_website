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
  <link rel="stylesheet" href="css/progress_trackers.css">
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
            <div id="rootwizard">
                <ul>
                    <li><a href="#tab1" data-toggle="tab"><span class="label">1</span> First</a></li>
                  <li><a href="#tab2" data-toggle="tab"><span class="label">2</span> Second</a></li>
                  <li><a href="#tab3" data-toggle="tab"><span class="label">3</span> Third</a></li>
                  <li><a href="#tab4" data-toggle="tab"><span class="label">4</span> Forth</a></li>
                  <li><a href="#tab5" data-toggle="tab"><span class="label">5</span> Fifth</a></li>
                  <li><a href="#tab6" data-toggle="tab"><span class="label">6</span> Sixth</a></li>
                  <li><a href="#tab7" data-toggle="tab"><span class="label">7</span> Seventh</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab1">
                      1
                    </div>
                    <div class="tab-pane" id="tab2">
                      2
                    </div>
                  <div class="tab-pane" id="tab3">
                    3
                    </div>
                  <div class="tab-pane" id="tab4">
                    4
                    </div>
                  <div class="tab-pane" id="tab5">
                    5
                    </div>
                  <div class="tab-pane" id="tab6">
                    6
                    </div>
                  <div class="tab-pane" id="tab7">
                    7
                    </div>
                  <ul class="pager wizard">
                    <li class="previous first" style="display:none;"><a href="#">First</a></li>
                    <li class="previous"><a href="#">Previous</a></li>
                    <li class="next last" style="display:none;"><a href="#">Last</a></li>
                      <li class="next"><a href="#">Next</a></li>
                  </ul>
                </div>  
              </div>
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

     $(document).ready(function() {
       $('#rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
     });
	</script>

	<script><!-- Script for testimonial-->
	$(document).ready(function() {
            $('ul#quotes').quote_rotator();
            $('ul#button_quotes').quote_rotator();
        });
   </script>
   <script src="js/jquery.bootstrap.wizard.js"></script>
  </body>
</html>
