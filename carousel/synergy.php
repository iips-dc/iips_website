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
		?>
        <div class="container" style="background-color:#FFFFFF;">
		
            <div style="width:700px; font-family:Arial, Helvetica, sans-serif;">
                   <?php 
						$path_synergy ="textFiles/events/synergy.txt";  
						if (file_exists($path_synergy))   
						{  
							$open_synergy = fopen("textFiles/events/synergy.txt", "r");  
		 					while (!feof($open_synergy))   
 							{  
 			 					$display = fgets($open_synergy, filesize($path_synergy));  
  								echo $display . "  ";  
 							}  
 							fclose($open_synergy);  
						 }   
						 else   
						 {  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						 }  
				   ?>
           </div>
        </div><!-- End of container class -->
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
