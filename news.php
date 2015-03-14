<?php include 'base_full_width.php' ?>
	
	<?php startblock('page_title'); ?>
	News | IIPS
	<?php endblock(); ?>

    <?php startblock('style'); ?>
	<style type="text/css">
		.postDate{
			font-size:14px; 
			color:green;
		}
		.notice{
			background-color: white;
			padding: 10px 10px 10px 10px;
			margin-left:15px;
			margin-right:15px;
		}
	</style>
	<?php endblock(); ?>
  
    <?php startblock('content'); ?>
	
		    <h3 class="text-center"><b class="label label-primary icon-globe"> IIPS News Section</b></h3>
			
			<!-- News Section --><br><br>
			<!--<div id="new_website" class="row featurette notice">
				
				<div class="col-md-10">
				    <h4 class="featurette-heading">New mobile responsive IIPS website soon to be released
				    <span class="postDate pull-right">Posted - 31st Dec 2013</span> </h4>
				    <div class="content">
						<p> The new IIPS website which is mobile responsive (easier to operate on mobiles) is soon being launche.
							We are constatly trying to serve you better . Do leave your feedback . It will help us to serve you better.

						</p>

					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
			-->
			
			<br><br><br><br>
			<!--.end of Notice Section -->
	    
		

	
	<?php endblock(); ?>
	<?php startblock('script'); ?>
	<script src="assets/js/holder.js"></script>
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
 
