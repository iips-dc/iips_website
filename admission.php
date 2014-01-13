<?php include 'base_template_2_column.php' ?>

<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ?>

	<?php startblock('page_heading'); ?>
		<h3> Admission </h3>
	<?php endblock(); ?>

	<!-- Added the side menu -->
	<?php startblock('sidemenu'); ?>

					<ul class="nav side-tabs nav-pills">
	   					<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> Entrance Exam- CET</a></li>
	    				<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Eligibility</a></li>
	    				<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Counseling </a></li>
	   					<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4"> How to apply</a></li>
	   					<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5"> Fees Structure</a></li>
	    			
					</ul>
	         	
	 
	<?php endblock() ; ?> <!-- side menu end -->


	<!-- content block starting -->
	<?php startblock('content') ?>	
	    
		<div id="tab1"  class="tab-content active text-justify">
          	<?php 
				$cet ="textFiles/Admission/entrance_exam_cet.txt";  
				readTextFiles($cet);
	       	?>
        </div>
		<div id="tab2" class="tab-content hide text-justify">

			<?php 
				$eligibility ="textFiles/Admission/eligibility.txt";  
				readTextFiles($eligibility);  
		    ?>
		</div>

             
		<div id="tab3" class="tab-content hide text-justify">
	                	
           	<?php 
				$counseling ="textFiles/Admission/counseling.txt";  
				readTextFiles($counseling);  
		    ?>              
	    </div>

	 				
        <div  id="tab4" class="tab-content hide text-justify">

            <?php 
				$howToApply ="textFiles/Admission/how_to_apply.txt";  
				readTextFiles($howToApply); 
		    ?> 
            
        </div>	                

        <div  id="tab5" class="tab-content hide text-justify">
			<?php 
				$feesStructure ="textFiles/Admission/";  
				readTextFiles($feesStructure); 
		    ?>
            
        </div>

       <?php endblock(); ?>