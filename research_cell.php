<!-- Called from main_menu.php,  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Research Cell | IIPS </title>

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
		<div id="wrap">
			<!-- container start below -->
			<div class="container" style="background-color:#FFFFFF;">
				<br><h3> Heading here </h3><br>
				<!-- row start below-->
				<div class = "row">
					<div class="col-md-2">
						<ul class="nav side-tabs nav-pills">
							<li class="active" ><a class="icon-chevron-sign-right" href="#tab1">1</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab2">2</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab3">3</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab4">4</a></li>
			                <li ><a class="icon-chevron-sign-right" href="#tab5">5</a></li>

						</ul>
					</div>


					<div class="col-md-10">
						<br/>
                        <div id="tab1"  class="tab-content active">
                          a
                       </div>
                       <div id="tab2"  class="tab-content hide">
                          b
                       </div>
                       <div id="tab3"  class="tab-content hide">
                          c
                       </div>
                       <div id="tab4"  class="tab-content hide">
                          d
                       </div>
                       <div id="tab5"  class="tab-content hide">
                          <?php 
                            $researchCenter ="textFiles/Research_Cell/research_center.txt";  
                            readTextFiles($researchCenter);
                         ?>
                       </div>

		

					</div>
				</div>
				<!-- row end above-->

			</div>
			<!-- container end above -->

		</div>
	<!-- wrapper end -->
    <!-- wrapper end -->
    <?php
            include('footer.php');
            include('jsLinks.php');
    ?>
    <!-- Include Scripts for vertical tabs-->
        <script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>

</body>

</html>
