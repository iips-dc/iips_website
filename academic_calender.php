<?php include 'base_template_2_column.php' ?>

	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ?>

	<?php startblock('page_heading'); ?>
        Academic Calendar
	<?php endblock(); ?>

	<?php startblock('sidemenu'); ?>

		  <ul class="nav side-tabs nav-pills">
			 <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> Academic Calender</a></li>
			 
		   </ul>

	<?php endblock() ; ?>

	<?php startblock('content') ?>

			<div id="tab1"  class="tab-content active">
				<?php 
					$academic_calender = "textFiles/Academic_Calender/academic_calender.txt" ;
					readTextFiles($academic_calender) ;
				?>
				
			</div>

			

	<?php endblock() ; ?>