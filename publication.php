<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_title'); ?>
		publication
	<?php endblock(); ?>
	
	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ;?>

	
	<?php startblock('sidemenu'); ?>
					<ul class="nav side-tabs nav-pills">
	   					<li class="active"><a class="icon-chevron-sign-right" href="#tab1"> Management</a></li>
	    				<li><a class="icon-chevron-sign-right" href="#tab2"> Technical</a></li>	
	   				</ul>
	 <?php endblock (); ?>
	         		
	<?php startblock('content') ; ?>
				
						<div id="tab1"  class="tab-content active">
							<?php 
								$management ="textFiles/Publication/management.txt";  
								readTextFiles($management);
							 ?>
	                    </div>

	             		<div id="tab2" class="tab-content hide">
						
	                        <?php 
								$technical ="textFiles/Publication/technical.txt";  
								readTextFiles($technical);
							 ?>

	                    </div>

    <?php endblock(); ?>            
			
