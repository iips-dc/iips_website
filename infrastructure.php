<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_heading'); ?>
		<h3> Infrastructure </h3>
	<?php endblock(); ?>
	<?php startblock('sidemenu'); ?>
		<ul class="nav side-tabs nav-pills">
			<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1">  Lecture Theaters</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2">  Computer Labs</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3">  Libraries</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4">  Hostels</a></li>

		</ul>
	<?php endblock(); ?>	

	<?php startblock('content'); ?>
	
		<div id="tab1"  class="tab-content active">
			
			<?php 
				$lecTheatre ="textFiles/Infrastructure/lectureTheaters.txt";  
				readTextFiles($lecTheatre);
			?><br><br>

		</div>

		<div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
		  <?php 
				$compLab ="textFiles/Infrastructure/computerLab.txt";  
				readTextFiles($compLab);  
			?><br><br>


	   </div>

		<div id="tab3" class="tab-content hide">
		   
			<?php 
				$libraries ="textFiles/Infrastructure/libraries.txt";  
				readTextFiles($libraries);
			?><br><br>
		</div>
		
		<div id="tab4" class="tab-content hide">
			<?php 
				$hostels ="textFiles/Infrastructure/hostels.txt";  
				readTextFiles($hostels);  
			?>

		</div>
	<?php endblock(); ?>
	
</body>
</html>
