<!-- Called from main_menu.php,  -->

<?php include 'base_template_2_column.php' ?>

	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ?>

	<?php startblock('page_heading'); ?>
		<h3> Placements </h3>
	<?php endblock(); ?>
	
	<?php startblock('sidemenu'); ?>

		<ul class="nav side-tabs nav-pills">
			<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> About Placement Cell</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Placements</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Companies</a></li>
	        
		</ul>
	<?php endblock() ; ?>


	<?php startblock('content') ?>	



	
		<div id="tab1"  class="tab-content active">

			<?php
				$aboutPlacements ="textFiles/Placements/about_placements.txt";  
				readTextFiles($aboutPlacements);
			?>		
          
       	</div>

       	<div id = "tab2" class="tab-content hide">

       	<?php 
       		$placements = "textFiles/Placements/placements.txt" ;
       		readTextFiles($placements) ;

       	?>

       	</div>

       	<div id ="tab3" class="tab-content hide">
       	
       	<?php 
       		$companies = "textFiles/Placements/companies.txt";
       		readTextFiles($companies);

       	?>    		

       	</div>


<?php endblock() ; ?>