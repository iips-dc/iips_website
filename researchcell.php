<!-- Called from main_menu.php,  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Admissions</title>

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
			include 'header.php';
			
			include('readTextFilesScript.php');
	?>

	<!-- wrapper start-->
		<div class="wrap">
			<!-- container start below -->
			<div class="container" style="background-color:#FFFFFF;">
				<br><h3> Heading here </h3><br>
				<!-- row start below-->
				<div id = "row">
					<div class="col-md-2">
						<ul class="nav side-tabs">
							<li ><a class="icon-chevron-sign-right" href="#tab1">1</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab2">2</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab3">3</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab4">4</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab5">5</a></li>

						</ul>
					</div>


					<div class="col-md-10">
						Details here

					</div>
				</div>
				<!-- row end above-->

			</div>
			<!-- container end above -->

		</div>
	<!-- wrapper end -->


</body>

</html>
