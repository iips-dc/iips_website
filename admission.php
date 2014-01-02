<!-- Called from main_menu.php,  -->
<?php include 'base_template.php' ?>
<!doctype html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Admission | IIPS</title>
	
 		
      

    </head>

    <body>
		<?php startblock('content'); ?>
 		<div id="wrap">
	        <div class="container" style="background-color:#FFFFFF;">
			   <div class="row">
			      <br><h3 class="title">Admissions</h3><br>
			   	  <div class="col-md-3">
					<ul class="nav side-tabs nav-pills">
	   					<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> Entrance Exam- CET</a></li>
	    				<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Eligibility</a></li>
	    				<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Counseling </a></li>
	   					<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4"> How to apply</a></li>
	   					<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5"> Fees Structure</a></li>
	    			
					</ul>
	         		
				  </div><!--.col-md-3 End -->
	 

	                <div class="col-md-9">
						<div id="tab1"  class="tab-content active">
	                      <?php 
							$cet ="textFiles/Admission/entrance_exam_cet.txt";  
							readTextFiles($cet);
					     ?>
	                   </div>

	              <div id="tab2" class="tab-content hide">

						<?php 
							$eligibility ="textFiles/Admission/eligibility.txt";  
							readTextFiles($eligibility);  
					    ?>
	                  

	                </div>

             
	                <div id="tab3" class="tab-content hide">
	                	
	                   <?php 
							$counseling ="textFiles/Admission/counseling.txt";  
							readTextFiles($counseling);  
					    ?>              

	                </div>

	 				
	                <div  id="tab4" class="tab-content hide">

	                    <?php 
							$howToApply ="textFiles/Admission/how_to_apply.txt";  
							readTextFiles($howToApply); 
					    ?> 
	                    
	                </div>

	                <div  id="tab5" class="tab-content hide">
						<?php 
							$feesStructure ="textFiles/Admission/";  
							readTextFiles($feesStructure); 
					    ?>
	                    
	                </div>
				</div><!--.col-md-9 end -->
			  </div><!--.row class ended -->
			</div>  

       </div><!-- End of container class -->
       <?php endblock(); ?>
        
 

    </body>

</html>
