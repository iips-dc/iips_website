<?php include 'base_template_2_column.php' ?>

	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ?>

	<?php startblock('page_heading'); ?>
		<h3> Recruitments </h3>
	<?php endblock(); ?>
	
	<?php startblock('sidemenu'); ?>

		  <ul class="nav side-tabs nav-pills">
			 <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1">  Faculty</a></li>
			 <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Staff</a></li>
			 
		   </ul>

	<?php endblock() ; ?>

	<?php startblock('content') ?>

			<div id="tab1"  class="tab-content active">
				<?php 
					$faculty_recruitment = "textFiles/Recruitments/faculty_recruitment.txt" ;
					readTextFiles($faculty_recruitment) ;
				?>
				
			</div>

			<div id="tab2" class="tab-content hide" >
				<?php 
					$staff_recruitment = "textFiles/Recruitments/staff_recruitment.txt" ;
					readTextFiles($staff_recruitment) ;
				?>				
					

			</div>


	<?php endblock() ; ?>