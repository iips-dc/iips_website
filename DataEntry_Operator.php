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
          <!-- Add User Side Tab and its Progress Trackers -->
          <div id="tab1"  class="tab-content active">
            <div id="adduser_rootwizard">
                <ul>
                    <li><a href="#atab1" data-toggle="tab"><span class="label">1</span> Add User</a></li>
                  <li><a href="#atab2" data-toggle="tab"><span class="label">2</span> Select Type</a></li>
                  
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="atab1">
                      1
                    </div>
                    <div class="tab-pane" id="atab2">
                      2
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

          <!-- Edit User Side Tab and its Progress Tracker -->

          <div id="tab2" class="tab-content hide">
            <div id="edituser_rootwizard">
                <ul>
                  <li><a href="#btab1" data-toggle="tab"><span class="label">1</span> Edit User</a></li>
                  <li><a href="#btab2" data-toggle="tab"><span class="label">2</span> Select Type </a></li>
                  <li><a href="#btab3" data-toggle="tab"><span class="label">3</span> Transaction ID or Name</a></li> 
                  
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="btab1">
                      1
                    </div>
                    <div class="tab-pane" id="btab2">
                      2
                    </div>
                    <div class="tab-pane" id="btab3">
                      3
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

          <div id="tab3" class="tab-content hide">
              <div id="addalumini_rootwizard">
                <ul>
                  <li><a href="#ctab1" data-toggle="tab"><span class="label">1</span> Course</a></li>
                  <li><a href="#ctab2" data-toggle="tab"><span class="label">2</span> Batch</a></li>
                  <li><a href="#ctab3" data-toggle="tab"><span class="label">3</span> Student</a></li>
                  
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="ctab1">
                      1
                    </div>
                    <div class="tab-pane" id="ctab2">
                      2
                    </div>
                    <div class="tab-pane" id="ctab3">
                      3
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

          <div id="tab4" class="tab-content hide">
              <div id="viewtransactionid_rootwizard">
                <ul>
                  <li><a href="#dtab1" data-toggle="tab"><span class="label">1</span> User Type</a></li>
                  
                  
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="dtab1">
                      1
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

          <div id="tab5" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
              <div id="activate_deactivate_rootwizard">
                <ul>
                  <li><a href="#etab1" data-toggle="tab"><span class="label">1</span> User Type</a></li>
                  <li><a href="#etab2" data-toggle="tab"><span class="label">2</span> Transaction ID or Name</a></li>
                  
                  
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="etab1">
                      1
                    </div>
                    <div class="tab-pane" id="etab2">
                      2
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
       $('#adduser_rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
       $('#edituser_rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
       $('#addalumini_rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
       $('#viewtransactionid_rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
       $('#activate_deactivate_rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
     });

	</script>

	<script><!-- Script for testimonial-->
	$(document).ready(function() {
            $('ul#quotes').quote_rotator();
            $('ul#button_quotes').quote_rotator();
        });
   </script>
   <!-- <script src="js/progress_trackers.js"></script> -->
   <script src="js/jquery.bootstrap.wizard.js"></script>
  </body>
</html>
