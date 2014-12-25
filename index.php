<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_title'); ?>
		About IIPS
	<?php endblock(); ?>
	
	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ?>

	<?php startblock('page_heading'); ?>
        About IIPS
	<?php endblock(); ?>
	
	<?php startblock('sidemenu'); ?>

		  <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab0">IIPS Alumni Association</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab1">Register</a></li>
             <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2">Log in</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3">Profile</a></li>
             <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4">Update Information</a></li>
             <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5">Search a Friend</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab6">Photo Gallery</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab7"> FAQ</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab8"> Logout</a></li>
	<?php endblock() ; ?>

	<?php startblock('content') ?>			  	  

		<div id="tab0"  class="tab-content active">
			
			<?php 
				$aboutIIPSalumni = "textFiles/Alumni/about_IIPS_alumni.txt";  
				 readTextFiles($aboutIIPSalumni);
		  ?>
		</div>

		<div id="tab1"  class="tab-content hide">
			
			<?php 
				$aboutIIPS = "textFiles/About_IIPS/about_IIPS.txt";  
				 readTextFiles($aboutIIPS);
		  ?>
		</div>

	
		<div id="tab2"  class="tab-content hide">
			
			<?php 
				include 'log_in.php';
		  ?>
		</div>
		
		<div id="tab3"  class="tab-content hide">
						<?php 
				$aboutIIPS = "textFiles/About_IIPS/about_IIPS.txt";  
				 readTextFiles($aboutIIPS);
		  ?>
		</div>
		
		<div id="tab4" class="tab-content hide">
			<b>Academic calender</b>
			<?php 
				$academic_calender = "textFiles/Academic_Calender/academic_calender.txt" ;
				readTextFiles($academic_calender) ;
			?>
		</div>
		
		<div id="tab5" class="tab-content hide">
			<?php 
				$iipsWiki = "textFiles/About_IIPS/iips_wikipedia.txt";  
				 readTextFiles($iipsWiki);
		    ?>
			Read More @ <a href="http://en.wikipedia.org/wiki/International_Institute_of_Professional_Studies">IIPS WikiPage</a>
		</div>
		
		<div id="tab7" class="tab-content hide">
			<b>IIPS Anti-Ragging Committee</b><br><br>
			
			<ul type="disc" style="margin-left:50px;">
				<?php 
					$FAQ="textFiles/Alumni/FAQ.txt";  
					readTextFiles($FAQ); 
			  ?>
			</ul>	
        </div>           
            
   <?php endblock(); ?>
