<!-- Called from main_menu.php,  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Admissions</title>

      
		<?php
		 include('cssLinks.php');
		?>
</head>
<body>
	<?php
			include 'header.php';
			
			include('readTextFilesScript.php');
	?>

	<!-- wrapper start-->
		<div id="wrap">
			<!-- container start below -->
			<div class="container" style="background-color:#FFFFFF;">
				<br><h3> Heading here </h3><br>
				<!-- row start below-->
				<div class = "row">
					<div class="col-md-2">
						<ul class="nav side-tabs nav-pills">
							<li class="active"><a class="icon-chevron-sign-right" href="#tab1"> About DC</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab2"> Current Projects</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab3"> Open Projects</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab4"> Past Projects</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab5"> Team</a></li>
			                
						</ul>
					</div>


					<div class="col-md-10">
						<div id="tab1"  class="tab-content active">
	                      <?php 
							$aboutDC ="textFiles/DC/about_dc.txt";  
							readTextFiles($aboutDC);
					     ?>
	                   </div>

	                   <div id="tab2"  class="tab-content hide">
	                      <?php 
							$currentProjects ="textFiles/DC/current_projects.txt";  
							readTextFiles($currentProjects);
					     ?>
	                   </div>

	                   <div id="tab3"  class="tab-content hide">
	                      Hello 
	                   </div>

	                   <div id="tab4"  class="tab-content hide">
	                      <?php 
							$pastProjects ="textFiles/DC/past_projects.txt";  
							readTextFiles($pastProjects);
					     ?>
	                   </div>

	                   <div id="tab5"  class="tab-content hide">
	                      <?php 
							$team ="textFiles/DC/team.txt";  
							readTextFiles($team);
					     ?>
	                   </div>

					</div>
				</div>
				<!-- row end above-->

			</div>
			<!-- container end above -->

		</div>
	<!-- wrapper end -->
	<?php
	        include('footer.php');
			include('jsLinks.php');
		?>

</body>

</html>
