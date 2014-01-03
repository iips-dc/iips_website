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
			<div id="music" class="row featurette notice">
				<div class="col-md-2">
				  <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/120x100/auto" alt="Generic placeholder image">
				</div>
				<div class="col-md-10">
				    <h4 class="featurette-heading">IIPS Organizing Music Concert <span class="text-muted">See for yourself.</span><span class="postDate pull-right">Posted - 31st Dec 2013</span></h4>
				    <div class="content">
						<p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
						Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
			
			<div id="synergy" class="row featurette notice">
				<div class="col-md-2">
				  <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/120x100/auto" alt="Generic placeholder image">
				</div>
				<div class="col-md-10">
				    <h4 class="featurette-heading">Students Preparing for Synergy 2014 Event<span class="postDate pull-right">Posted - 28th Dec 2013</span></h4>
				    <div class="content">
						<p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
						Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
			
			<div class="row featurette notice">
				<div class="col-md-2">
				  <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/120x100/auto" alt="Generic placeholder image">
				</div>
				<div class="col-md-10">
				    <h4 class="featurette-heading">Expression 2014 Organizing Committee<span class="postDate pull-right">Posted - 27th Dec 2013</span></h4>
				    <div class="content">
						<p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
						Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
			
			<div class="row featurette notice">
				<div class="col-md-2">
				  <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/120x100/auto" alt="Generic placeholder image">
				</div>
				<div class="col-md-10">
				    <h4 class="featurette-heading">IIPS students achieved 3rd rank on Learnstreet.com <span class="text-muted">See for yourself.</span><span class="postDate pull-right">Posted - 22nd oct 2013</span></h4>
				    <div class="content">
						<p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
						Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
			
			<div class="row featurette notice">
				<div class="col-md-2">
				  <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/120x100/auto" alt="Generic placeholder image">
				</div>
				<div class="col-md-10">
				    <h4 class="featurette-heading">Independence Day Program @Auditorium <span class="postDate pull-right">Posted - 15th August 2013</span></h4>
				    <div class="content">
						<p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
						Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br><br><br><br>
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
 
