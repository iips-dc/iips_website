<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Gallery</title>

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
			include('header.php');
	    ?>
		<div class="container" style="background-color:#FFFFFF;">
		  <section id="wrapper" class="wrapper">

			<br><h1>IIPS Gallery </h1><br>
            <div id="v-nav">

                <ul>
                    <li tab="tab1" class="first current" style="z-index:0">Photos</li>
                    <li tab="tab2" style="z-index:0">Logos</li>

                </ul>

                <div class="tab-content">
					<b>Photos</b><br><br />
					<img src="images/lab.jpg" width="500">
					<img src="images/iips7.jpg" width="500">
					<img src="images/iips.jpg">
 
                </div>

                <div class="tab-content" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
		   <b>Logos</b><br><br>
			<img src="images/iips6.jpg" width="500">
			<img src="images/iips1.jpg" width="500">
			<img src="images/iips2.jpg" width="500">
			<img src="images/iips8.jpg" width="500">
			<img src="images/iips5.jpg" width="500">
			<img src="images/iipslogo.jpg">

          </div>

				
				
                </div>

            </div>

		</section>
	</div><!-- End of container class -->	
		<?php
		    include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts for vertical tabs-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>
</body>
</html>
