<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_title'); ?>
		IQAC
	<?php endblock(); ?>
	
	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ?>

	<?php startblock('page_heading'); ?>
       
	<?php endblock(); ?>
	
	<?php startblock('sidemenu'); ?>

		  <ul class="nav side-tabs nav-pills">
			 <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1">  About IQAC </a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2">  IQAC Committee</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3">  IQAC Guidelines</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4">  IQAC Reports</a></li>
			
		   </ul>
	<?php endblock() ; ?>

	<?php startblock('content') ?>			  	  

		<div id="tab1"  class="tab-content active">
	
			<?php 
				$aboutIQAC = "textFiles/IQAC/about_iqac.txt";  
				 readTextFiles($aboutIQAC);
		  ?>
		</div>

		<div id="tab2" class="tab-content hide" >
				<?php 
					#$director="textFiles/About_IIPS/director.txt";  
					#readTextFiles($director);
				?>

		</div>

		<div id="tab3" class="tab-content hide">
		  
			IQAC Guidelines <a href="downloads/iqac/GuidlinesEstt&Monitoring16072011.pdf">click here</a>
			
		</div>
		
		<div id="tab4" class="tab-content hide">
			
			IQAC Report 2012-13<a href="downloads/iqac/IIPSAQAR 2012-2013.pdf">click here</a>
			 
		</div>
		
	
   <?php endblock(); ?>
