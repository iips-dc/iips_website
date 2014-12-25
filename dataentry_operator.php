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
            <ul class="nav side-tabs nav-pills">
                <li class="active"><a class="icon-chevron-sign-right" href="#tab1">Add User</a></li>
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
                <div class="tab-content " style="padding :5px 5px 5px 5px;"> 
                    <div class="tab-pane" id="btab1"> <br><br>
						<!-- Form for selecting student's name -->
						<form class="form-inline" role="form">
							<div class="form-group leftSpaceForm">
								<label class="">First Name</label>   <input type="text" class="form-control" name="firstName" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label class="">Last Name</label>   <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name">
							</div>
						</form>
						<!-- End Form -->
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
		  
		  <!-- Add Alumni Side Tab and its Progress Tracker -->
		  
          <div id="tab3" class="tab-content hide">
              <div id="addalumini_rootwizard">
                <ul>
                  <li><a href="#ctab1" data-toggle="tab"><span class="label">1</span> Course</a></li>
                  <li><a href="#ctab2" data-toggle="tab"><span class="label">2</span> Batch</a></li>
                  <li><a href="#ctab3" data-toggle="tab"><span class="label">3</span> Student</a></li>
                  
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="ctab1">
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
                    <div class="tab-pane" id="ctab2">
                      <div class="row">
						 <div class="col-md-4"></div>
							<!-- dropdown div started -->
							<div class="col-md-4"><br><br>
								<label>Select the Batch</label><br>
								<select class="form-control">
									<option>batch 1</option>
									<option>batch 2</option>
								</select>
							</div><br>
							<!-- dropdown div end -->

						 <div class="col-md-4"></div>
                      </div>
                      <!-- row ended -->
                    </div>
                    <div class="tab-pane" id="ctab3"><br>
                        <h4 class="text-center">Student Information</h4><br>
						<!-- row started for select/deselect students for alumni -->
						<div class="row">
						  <div class="col-md-10">
							<table class="table table-hover">
								<tr>
									<th><input type="checkbox" id="selectall"/></th>
									<th>Student Name</th>
									<th>Remark</th>
								</tr>
								<tr>
									<td align="center"><input type="checkbox" class="case" name="case" value="1"/></td>
									<td>Rahul Sagore</td>
									<td>Passed</td>
								</tr>
								<tr>
									<td align="center"><input type="checkbox" class="case" name="case" value="2"/></td>
									<td>Chitrank Dixit</td>
									<td>Passed</td>
								</tr>
								<tr>
									<td align="center"><input type="checkbox" class="case" name="case" value="3"/></td>
									<td>Ankit Kulkarni</td>
									<td>Passed</td>
								</tr>
								<tr>
									<td align="center"><input type="checkbox" class="case" name="case" value="4"/></td>
									<td>Sunny Raikwar</td>
									<td>Passed</td>
								</tr>
								<tr>
									<td align="center"><input type="checkbox" class="case" name="case" value="5"/></td>
									<td>Juniors</td>
									<td>Passed</td>
								</tr>
							</table>
							<button class="btn btn-sm btn-primary">Add To Alumni</button>
							<button class="btn btn-sm btn-primary">Add To Alumni & Next</button>
							<button class="btn btn-sm btn-primary">Back</button>
						  </div>
						  <div class="col-md-2"></div>
					   </div>
					   <!-- row ended -->
                    </div><br><br>
                  
                  <ul class="pager wizard">
                    <li class="previous first" style="display:none;"><a href="#">First</a></li>
                    <li class="previous"><a href="#">Previous</a></li>
                    <li class="next last" style="display:none;"><a href="#">Last</a></li>
                      <li class="next"><a href="#">Next</a></li>
                  </ul>
                </div>  
              </div>
          </div>
			
			<!-- Code for "View Transaction Id" side-tab -->
          <div id="tab4" class="tab-content hide">
              <div id="viewtransactionid_rootwizard">
                <ul>
                  <li><a href="#dtab1" data-toggle="tab"><span class="label">1</span> User Type</a></li>      
                </ul>
				
                <div class="tab-content">
                    <div class="tab-pane" id="dtab1">
					    <!-- Selecting user type section -->
						<div class="row">
						  <div class="col-md-4"></div>
							<!-- dropdown div started -->
							<div class="col-md-4"><br><br>
								<label>Select User Type</label><br>
								<select class="form-control">
									<option>Student</option>
									<option>Faculty</option>
									<option>Alumni</option>
									<option>Staff</option>
								</select>
							</div><br>
							<!-- dropdown div end -->

						  <div class="col-md-4"></div>
						</div>
					    <!-- row ended --><br><br>
						<table class="table table-hover">
							<tr>
								<th>Name</th>
								<th>Transaction Id</th>
								<th>Type Of User</th>
							</tr>
							
							<tr>
								<td align="center">Rahul Sagore</td>
								<td>IC2K97412312154454</td>
								<td>Student</td>
							</tr>
							<tr>
								<td align="center">Ankit Kulkarni</td>
								<td>IC2K97812345775498</td>
								<td>Student</td>
							</tr>
							<tr>
								<td align="center">Amber Jain</td>
								<td>IC2K54645656665655</td>
								<td>Alumni</td>
							</tr>
							<tr>
								<td align="center">Shaligram Prajapat</td>
								<td>FAC454545484787874</td>
								<td>Faculty</td>
							</tr>
							
							<tr>
								<td align="center">Staff Name</td>
								<td>STF457835445693454</td>
								<td>Staff</td>
							</tr>
						</table>
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
                      <!-- Selecting user type section -->
						<div class="row">
						  <div class="col-md-4"></div>
							<!-- dropdown div started -->
							<div class="col-md-4"><br><br>
								<label>Select User Type</label><br>
								<select class="form-control">
									<option>Student</option>
									<option>Faculty</option>
									<option>Alumni</option>
									<option>Staff</option>
								</select>
							</div><br>
							<!-- dropdown div end -->

						  <div class="col-md-4"></div>
						</div>
					    <!-- row ended --><br><br>
                    </div>
                    <div class="tab-pane" id="etab2"><br>
                      <!-- selecting Name or Transaction Id for Deactivating/Activating Account -->
						<form class="form-inline" role="form">
							<div class="form-group leftSpaceForm">
								<label class="">First Name</label>   <input type="text" class="form-control" name="firstName" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label class="">Last Name</label>   <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name">
							</div>
						</form>
						<div class="text-center"><b>Or</b></div><br>
						  <div class="center-block">
							<form class="form-inline" role="form">
								<label>Transaction Id</label>
								<input type="text" style= "width:200px;" class="form-control" name="transactionId" placeholder="Enter Transaction Id"><br><br>
								<button class="btn btn-sm btn-primary">Save</button>
								<button class="btn btn-sm btn-primary">Save & Next</button>
								<button class="btn btn-sm btn-primary">Exit</button>
							</form><br>
						  </div>
						<!-- End Form -->
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
   
   <!-- Script For select/deselect checkbox for Add-to-admin side-tab-->
   <SCRIPT language="javascript">
		$(function(){
		 
			// add multiple select / deselect functionality
			$("#selectall").click(function () {
				  $('.case').attr('checked', this.checked);
			});
		 
			// if all checkbox are selected, check the selectall checkbox
			// and viceversa
			$(".case").click(function(){
		 
				if($(".case").length == $(".case:checked").length) {
					$("#selectall").attr("checked", "checked");
				} else {
					$("#selectall").removeAttr("checked");
				}
		 
			});
		});
	</SCRIPT>
  </body>
</html>
