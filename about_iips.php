<?php include 'base_template_2_column.php' ?>

	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ?>

	<?php startblock('page_heading'); ?>
        About IIPS
	<?php endblock(); ?>
	
	<?php startblock('sidemenu'); ?>

		  <ul class="nav side-tabs nav-pills">
			 <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1">  About IIPS</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2">  Director</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3">  Objectives and Vision</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4">  Academic Calendar</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5">  IIPS @ Wikipedia</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab6">  Anti-Ragging Committee</a></li>
		   </ul>
	<?php endblock() ; ?>

	<?php startblock('content') ?>			  	  

		<div id="tab1"  class="tab-content active">
			<img class="pull-right" src="images/iipslogo.jpg" style="margin-left:10px;">
			<?php 
				$aboutIIPS = "textFiles/About_IIPS/about_IIPS.txt";  
				 readTextFiles($aboutIIPS);
		  ?>
		</div>

		<div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
			<b>Meet the Director</b>
		   <table style="background-color:#eeeeee; border:1px solid gray;" > <tr>  <td> <i>

				<?php 
					$director="textFiles/About_IIPS/director.txt";  
					readTextFiles($director);
			  ?>

		</div>

		<div id="tab3" class="tab-content hide">
		   <b> What we Think</b><br><br>

			<div style="background-color:#eeeeee;"><b>Objectives</b></div>
				<ul type="disc" style="margin-left:50px;">
					  <?php 
							$objectives="textFiles/About_IIPS/objective.txt";  
							readTextFiles($objectives);
					  ?>
		</div>
		
		<div id="tab4" class="tab-content hide">
			<b>Academic calender</b>
		</div>
		
		<div id="tab5" class="tab-content hide">
			Wikipedia : <a href="http://en.wikipedia.org/wiki/International_Institute_of_Professional_Studies">IIPS WikiPage</a>
		</div>
		
		<div id="tab6" class="tab-content hide">
			<b>IIPS Anti-Ragging Committee</b><br><br>
			
			<ul type="disc" style="margin-left:50px;">
				<?php 
					$antiRagging="textFiles/About_IIPS/antiragging_committee.txt";  
					readTextFiles($antiRagging); 
			  ?>
			</ul>	
        </div>           
            
   <?php endblock(); ?>
