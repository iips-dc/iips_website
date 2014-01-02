<?php include 'base_template.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Notice and Announcements | IIPS</title>

    
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
  </head>
  <body>
    <?php startblock('content'); ?>
	<div id="wrap">
	
		<div class="container">
		    <h3 class="text-center"><b class="label label-primary icon-bullhorn"> Notices & Annoucement Board</b></h3>
			
			<!-- Notice Section --><br><br>
			<div class="row notice">
				  <h5><b>&raquo; NAAC - Arrival in New Year 2014 ! </b><span class="text-center postDate pull-right">Posted - 22nd Dec 2013 <i class="icon-pushpin"></i></span></h5>
				  
				  <div class="content">
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, 
					   tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis 
					   euismod. Donec sed odio dui. <a href="#">Download PDF</a>
					</p><br>

				  </div>
				  <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
			</div><br>
			
			<div class="row notice">
			    <h5><b>&raquo; College reopen date has been decided !</b><span class="text-center postDate pull-right"> Posted - 30st Dec 2013  <i class="icon-pushpin"></i></span></h5>
			    <div class="content">
				    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
			        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
				    Donec sed odio dui. <a href="#">Download PDF</a></p><br>
			    </div>
				
			   <button class="btn btn-primary toggleContent" href="#" role="button">View Details &raquo;</button>
			</div><br>
			
			<div class="row notice">
			  <h5><b>&raquo; Guest Lecture on "Artificial Intelligence" @Auditorium ! </b><span class="text-center postDate pull-right">Posted - 25th Dec 2013 <i class="icon-pushpin"></i></span></h5>
			  <div class="content">
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
				ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
				fermentum massa justo sit amet risus. <a href="#">Download PDF</a></p><br>
				
			  </div>
			  <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
			</div><br>
			
			<div class="row notice">
			  <h5><b>&raquo; Download your admit card from MPOnline ! </b><span class="text-center postDate pull-right">Posted - 1st Dec 2013 <i class="icon-pushpin"></i></span></h5>
			  <div class="content">
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
				ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
				fermentum massa justo sit amet risus. <a href="#">Download PDF</a></p><br>
				
			  </div>
			  <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
			</div><br>
			
			<div class="row notice">
			  <h5><b>&raquo; Last Date of Scholarship Form is 22nd Sept 2013 ! </b><span class="text-center postDate pull-right">Posted - 2nd Jan 2013 <i class="icon-pushpin"></i></span></h5>
			  <div class="content">
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id
				ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
				fermentum massa justo sit amet risus. <a href="#">Download PDF</a></p><br>
				
			  </div>
			  <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
			</div><br><br><br><br>
			<!--.end of Notice Section -->
	    </div>
		
	</div>
	<?php endblock(); ?>
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
	
  </body>
</html>