<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_title'); ?>
		Faculty Profile
	<?php endblock(); ?>
	
	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ;?>

	
	<?php startblock('sidemenu'); ?>

		<ul class="nav side-tabs nav-pills">
		
			<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> Non Teaching Staff</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Class III Employees</a></li>         
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Class IV Employees</a></li>         			
			
		</ul>

	<?php endblock(); ?>

	<?php startblock ('content'); ?>
                        
                        <div id="tab1"  class="tab-content activeactive ">
                          <?php 
                            $nonteachingStaff ="textFiles/Faculty_Profile/nonteaching_staff.txt";  
                            readTextFiles($nonteachingStaff);
                          ?>
                       </div>

                        <div id="tab2"  class="tab-content hide">
                          <?php 
                            $classiiiEmployees ="textFiles/Faculty_Profile/classiii_employees.txt";  
                            readTextFiles($classiiiEmployees);
                          ?>  
                       </div>

                        <div id="tab3"  class="tab-content hide">
                          <?php 
                            $classivEmployees ="textFiles/Faculty_Profile/classiv_employees.txt";  
                            readTextFiles($classivEmployees);
                          ?>
                       </div>

                       
     <?php endblock(); ?> 

		
