<!-- Called from main_menu.php,  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Placements </title>

       <!-- Include Styles -->
        <link rel="stylesheet" href="css/vtab-style.css" />		
        <!--[if IE 7]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
        <!--[if IE 8]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
		<?php
		 include('cssLinks.php');
		?>
</head>
<body>
	<?php
			// inlclude header here
			include 'header.php';
			
			include('readTextFilesScript.php');
	?>

	<!-- wrapper start-->
		<div id="wrap">
			<!-- container start below -->
			<div class="container" style="background-color:#FFFFFF;">
				<br><h3> Placements </h3><br>
				<!-- row start below-->
				<div class = "row">
					<div class="col-md-2">
						<ul class="nav side-tabs nav-pills">
							<li class="active"><a class="icon-chevron-sign-right" href="#tab1"> About Placement Cell</a></li>
							<li ><a class="icon-chevron-sign-right" href="#tab2"> Placements</a></li>
							<li ><a class="icon-chevron-sign-right" href="#tab3"> Companies</a></li>
			                
						</ul>
					</div>


					<div class="col-md-10">
						<div id="tab1"  class="tab-content active">
	                      <?php 
							$aboutPlacements ="textFiles/Placements/about_placements.txt";  
							readTextFiles($aboutPlacements);
					     ?>
	                   </div>

	                   <div id = "tab2" class="tab-content hide">

	                   	<?php 
	                   		$placement = "textFiles/Placements/placements.txt" ;
	                   		readTextFiles($placements) ;

	                   	?>

	                   </div>

	                   <div id ="tab3" class="tab-content hide">
	                   	<?php 
	                   		$companies = "textFiles/Placements/companies.txt";
	                   		readTextFiles($companies);

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
