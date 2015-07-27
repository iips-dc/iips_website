<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_title'); ?>
		Research Cell
	<?php endblock(); ?>
	
	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ;?>

	
	<?php startblock('sidemenu'); ?>

		<ul class="nav side-tabs nav-pills">
			<li class="active btn-block" ><a class="icon-chevron-sign-right" href="#tab1">  Research Committee</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Publication</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Infrastructure</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4"> Ph.D. Supervisors </a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5"> MRP-Mentors </a></li>         
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab6"> Technical Project Mentors </a></li>         			
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab7"> Research Scholar </a></li>         
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab8"> Faculty List </a></li>          
		</ul>

	<?php endblock(); ?>

	<?php startblock ('content'); ?>
                        <div id="tab1"  class="tab-content active">
                          <?php 
                            $researchCenter ="textFiles/Research_Cell/commitee.txt";  
                            readTextFiles($researchCenter);
                         ?>
                       </div>

                       <div id="tab2"  class="tab-content hide">
                       <br><br>
                       		<h4><strong>list of publication <a href="publication.php">click here</a></strong></h4>
                       </div>

                        <div id="tab3"  class="tab-content hide">
                        <?php 
                            $researchCenter ="textFiles/Research_Cell/infrastructure.txt";  
                            readTextFiles($researchCenter);
                         ?>
                       </div>

                        <div id="tab4"  class="tab-content hide">
                        <?php 
                            $researchCenter ="textFiles/Research_Cell/phd_supervisor.txt";  
                            readTextFiles($researchCenter);
                         ?>
                       </div>

                        <div id="tab5"  class="tab-content hide">
                            NOT AVAILABLE
                       </div>

                        <div id="tab6"  class="tab-content hide">
                        <?php 
                            $researchCenter ="textFiles/Research_Cell/technical_mentor.txt";  
                            readTextFiles($researchCenter);
                         ?>
                       </div>

                       <div id="tab7"  class="tab-content hide">
                        <?php 
                            $researchCenter ="textFiles/Research_Cell/research_scholar.txt";  
                            readTextFiles($researchCenter);
                         ?>
                       </div>
                     
                       <div id="tab8"  class="tab-content hide">
                          <?php 
                            $researchCenter ="textFiles/Research_Cell/faculty_list.txt";  
                            readTextFiles($researchCenter);
                         ?>
                       </div>

     <?php endblock(); ?> 

		
