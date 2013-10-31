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

  <body>++
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
                    <li><a href="#atab1" data-toggle="tab"><span class="label">1</span> Select Course</a></li>
                  <li><a href="#atab2" data-toggle="tab"><span class="label">2</span> Select Batch</a></li>
                  <li><a href="#atab3" data-toggle="tab"><span class="label">2</span> Add User</a></li>
                  
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="atab1">
                      <div class="row">
                        <div class="col-md-4"></div>
                        <!-- dropdown div started -->
                        <div class="col-md-4">
                          <br><br>
                          <label>Select the Course Name</label><br>
                          <select class="form-control">
                            <option>MCA 6 years </option>
                            <option>MBA 5 years</option>
                            <option>Bcom</option>
                            <option>MBA TA</option>
                            <option>MBA APR</option>
                            <option>Mtech</option>

                          </select>

                        </div>
                        <!-- dropdown div end -->

                        <div class="col-md-4"></div>

                      </div>
                      <!-- row ended -->



                    </div>
                    <!-- tab pane id=atab1 end -->

                    <div class="tab-pane" id="atab2">
                    

                    <div class="row">
                      <div class="col-md-4"></div>
                      <!-- dropdown div started -->
                      <div class="col-md-4">
                        <br><br>
                        <label>Select the Batch</label><br>
                        <select class="form-control">
                          <option>batch 1</option>
                          <option>batch 2</option>
                          

                        </select>

                      </div>
                      <!-- dropdown div end -->

                      <div class="col-md-4"></div>

                    </div>
                    <!-- row ended -->


                    </div>

                    <!-- tab 3 start -->
                    <div class="tab-pane" id="atab3">
                      
                      <div class="row">
                        
                        <!-- form div started -->
                        <div class="col-md-11">
                          <br>
                        <fieldset style="border:3px solid #007ACC; padding :5px 5px 5px 5px;">
                          <div class="">
                            <div class="row form-inline">
                              <label class="leftSpaceForm"> First Name </label>  <input class="form-control " style= "width:200px;" type ="text" name="firstName" placeholder="First Name"  autofocus />
                              <label class="leftSpaceForm"> Last Name</label>  <input class="form-control " style= "width:200px;" type ="text" name="lastName" placeholder="Last Name"   />
                              <br>

                              <label class="leftSpaceForm"> Gender </label>  <select class="form-control" name="gender" style= "width:200px;" ><option>Select</option> <option>M</option><option>F</option> </select>
                              <label class="leftSpaceForm"> Date of Birth </label><input style= "width:200px;" type="date" class="form-control" placeholder="date of birth">
                              <br>


                              <label class="leftSpaceForm">Email </label><input style= "width:200px;" type="email" class="form-control" placeholder="system.default@gmail.com">
                              <label class="leftSpaceForm"> Mobile Number (+91) </label><input style= "width:200px;" type="text" class="form-control" placeholder="Mobile Number">
                              <br>

                              <label class="leftSpaceForm">Land Line </label>  <input class="form-control " style= "width:85px;" type ="text" name="stdCode" placeholder="Std Code"   />
                              <input class="form-control " style= "width:200px;" type ="text" name="landline" placeholder="Telephone Number"   />
                              
                              <br>
                              <label class="leftSpaceForm">Local Address </label>  <textarea class="form-control " style= "width:200px;" type ="text" name="localAddress" placeholder="Local address"   ></textarea>
                              <br>
                              <label class="leftSpaceForm"> Permanent Address </label>  <textarea class="form-control " style= "width:200px;" type ="text" name="permanentAddress" placeholder="Permanent Address"   ></textarea>
                              <button>Same as local Address</button>

                              <br>

                              <label class="leftSpaceForm"> Last Institute </label>  <input class="form-control " style= "width:200px;" type ="text" name="lastInstitute" placeholder="Last Institute Attended"   />
                              <label class="leftSpaceForm"> % in Institute</label>  <input class="form-control " style= "width:200px;" type ="text" name="lastPercentage" placeholder="% in Last Institute"   />
                              

                              <br>
                              <div class="pull-right " style="margin-right:40px;">
                                <button class="btn btn-primary ">Save & Next</button>
                                <button class="btn btn-primary ">Next</button>
                              </div>
                              
                              

                            </div>

                          </div>
                        </fieldset>

                        </div>
                        <!-- form div end -->

                        <div class="col-md-1"></div>

                      </div>
                      <!-- row ended -->


                    </div>
                    <!-- tab 3 end -->

                  
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
