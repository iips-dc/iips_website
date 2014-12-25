<?php include 'base_full_width.php' ?>
     
	<?php startblock('page_title'); ?>
		Frequently Asked Questions
	<?php endblock(); ?>
	 
	<?php startblock('content'); ?>
	<?php
	$FAQ = 'textFiles/Alumni/FAQ.txt';
	readTextFiles($FAQ);
	?>	
	<?php endblock(); ?>