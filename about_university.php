<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_heading'); ?>
		About University
	<?php endblock(); ?>
	
	 <!-- Template Block for Sidebar Options -->
	<?php startblock('sidemenu'); ?>
	
		<ul class="nav side-tabs nav-pills">
			<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> About University</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Vice Chancellor</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Department</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4"> University Auditorium</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5"> IT Center</a></li>
		
		</ul>
	<?php endblock(); ?>
		
	<!-- Template Block for Sidebar Content -->
	<?php startblock('content'); ?>
		<div id="tab1"  class="tab-content active">
		  <?php 
			$abtUniv ="textFiles/About_University/about_University.txt";  
			readTextFiles($abtUniv);
		 ?>
		</div>

		<div id="tab2" class="tab-content hide">
			<?php 
				$viceChancellor ="textFiles/About_University/vice_Chancellor.txt";  
				readTextFiles($viceChancellor);  
			?>
		</div>

		<div id="tab3" class="tab-content hide">

		   <?php 
				$departments ="textFiles/About_University/departments.txt";  
				readTextFiles($departments);  
			?>              

		</div>
				
		<div  id="tab4" class="tab-content hide">

			<?php 
				$univAuditorium ="textFiles/About_University/univ_Auditorium.txt";  
				readTextFiles($univAuditorium); 
			?> 
			
		</div>

		<div  id="tab5" class="tab-content hide">
			<?php 
				$itCenter ="textFiles/About_University/itCenter.txt";  
				readTextFiles($itCenter); 
			?>
			
		</div>
   <?php endblock(); ?>


