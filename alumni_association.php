<?php include 'base_full_width.php' ?>
     
	<?php startblock('page_title'); ?>
		IIPS Alumni Association
	<?php endblock(); ?>
	 
	<?php startblock('content'); ?>
	<?php
	$alumniassociation = 'textFiles/Alumni/about_IIPS_alumni.txt';
	readTextFiles($alumniassociation);
	?>	
	<?php endblock(); ?>