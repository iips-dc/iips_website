<?php include 'base_full_width.php' ?>
<!DOCTYPE html>
	<?php startblock('page_title'); ?>
	Notice and Announcements | IIPS	
	<?php endblock(); ?>
	<?php startblock('style'); ?>

	<style type="text/css">
		
		.postDate{
			font-size:14px; 
			color:green;
		}
		.notice{
			background-color:white;
			padding: 10px 10px 10px 10px;
			margin-left:15px;
			margin-right:15px;
		}
	</style>
	<?php endblock(); ?>
    <?php startblock('content'); ?>
		    <?php 
                $notices ="textFiles/Notices/notices.txt";  
                readTextFiles($notices);
            ?>
	    
		
	
	<?php endblock(); ?>
	<?php startblock('script'); ?>
	<script>

		   $(document).ready(function () {
				$('.content').hide(); //hide initialy
				$('.toggleContent').click(function () {
					var $this = $(this);
					// target only the content which is a sibling
					$(this).siblings('.content').slideToggle(500, function () {
						$this.html($(this).is(':visible') ? 'Hide Details' : 'View Details &raquo;');
					});

				});
			});


	</script>
	<?php endblock(); ?>
  