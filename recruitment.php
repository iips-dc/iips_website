<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>About IIPS</title>

       <!-- Include Styles -->
        <link rel="stylesheet" href="css/vtab-style.css" />		
        <!--[if IE 7]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
        <!--[if IE 8]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
		<?php
		 include('cssLinks.php');
		?>
		<style type="text/css">
			.iips_logo{
				float:right;
			}
		</style>
    </head>
    <body>
		<?php
			include('header.php');
			include('readTextFilesScript.php');
		?>
	 <div id="wrap">
        <div class="container" style="background-color:#FFFFFF;">
			<div id="row">
		    <div class="col-md-2">
            <ul class="nav side-tabs nav-pills">
                <li id="tlink1" class="active"><a class="icon-chevron-sign-right" href="#tab1"> Faculty</a></li>
                <li id="tlink2"><a class="icon-chevron-sign-right" href="#tab2">  Staff</a></li>
 
            </ul>
		   </div>
			<div class="col-md-10">
				<div id="tab1"  class="tab-content active">
					<h4><b>NO NEW RECRUITMENT</b></h4>
						
                </div>
				<div id="tab2"  class="tab-content hide">
					<h4><b>NO NEW RECRUITMENT</b></h4>
						
                </div>

		   </div>
        </div><!-- End of container class -->
	</div>
	</div>
       <?php
	        include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts for vertical tabs-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>
		
<!-- container 12 ended -->
</body>
</html>
