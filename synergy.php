<?php include 'base_full_width.php' ?>

	<?php startblock('page_title'); ?>
		Synergy
	<?php endblock(); ?>
 
	 <?php startblock('page_heading'); ?> 
		<center class="text-primary">SYNERGY</span></center>
	<?php endblock(); ?>

	 
	<?php startblock('content'); ?>
	  <?php 
			$path_synergy ="textFiles/Events/synergy.txt";  
			readTextFiles($path_synergy);  
	   ?>
     <?php endblock(); ?>      
	