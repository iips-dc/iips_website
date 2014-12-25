<?php include 'base_template_2_column.php' ?>

	<!-- Starting of block for page heading -->
	<?php startblock('page_heading'); ?>
		<h3> IIPS Gallery </h3>
	<?php endblock(); ?>
	
	<!-- Starting of block for Sidebar Options -->
	<?php startblock('sidemenu'); ?>

		  <ul class="nav side-tabs nav-pills">
			 <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1">  Photos</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2">  Animation</a></li>
		   </ul>
	<?php endblock() ; ?>
	
	<!-- Starting of block for Sidebar Content -->
	<?php startblock('content') ?>			  	  

		<div id="tab1"  class="tab-content active">
			<b>Photos</b><br><br />
			<img src="images/lab.jpg">
			<img src="images/iips7.jpg">
		</div>

		<div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
			<b>Animation</b><br><br>
			<img src="images/slider/iips6.jpg">
			<img src="images/slider/iips1.jpg">
			<img src="images/slider/iips2.jpg">
			<img src="images/slider/iips8.jpg">
			<img src="images/slider/iips5.jpg">

		</div>

		      
            
   <?php endblock(); ?>