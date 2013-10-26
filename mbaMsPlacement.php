<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Events</title>

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

			<br><h1> MBA-MS Placements </h1>
            <div id="v-nav">

                <ul>
                    <li tab="tab1" class="first current" style="z-index:0">Placement Officer</li>
                    <li tab="tab2" style="z-index:0">Batch Profile</li>
                    <li tab="tab3" style="z-index:0">Last Year Placement</li>
					<li tab="tab4" style="z-index:0">Corporate Recruiter</li>
					<li tab="tab5" class="last" style="z-index:0">Recruitment Procedure</li>
                </ul>

                <div class="tab-content">
					<div class="panel panel-success">
  						<div class="panel-heading">
							<h3 class="panel-title">MBA - Placement Officer's Message</h3>
  						</div>
 				        <div class="panel-body">
							<?php 
									$path_placementOfficer ="textFiles/Placements/placementOfficer.txt";  
									if (file_exists($path_placementOfficer))   
									{  
										$open_placementOfficer = fopen("textFiles/Placements/placementOfficer.txt", "r");  
		 								while (!feof($open_placementOfficer))   
 										{  
 			 								$display = fgets($open_placementOfficer, filesize($path_placementOfficer));  
  											echo $display . "  ";  
 										}  
 										fclose($open_placementOfficer);  
						 			}   
						 			else   
						 			{  
 		 								echo "Error occured ! ! ! Try again or report it to us";  
						 			}  
				   			?>

  				        </div>
                    </div>
                </div>
	<div class="tab-content" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
				<div class="panel panel-success">
  						<div class="panel-heading">
							<h3 class="panel-title">Batch Profile : MBA</h3>
  						</div>
 				        <div class="panel-body">
    					     <table border="1px" bordercolor="#000000" style="background-color:#FFFFFF" width="100%" cellpadding="3" cellspacing="3">
							<?php 
									$path_mbaBatchProfile ="textFiles/Placements/mbaBatchProfile.txt";  
									if (file_exists($path_mbaBatchProfile))   
									{  
										$open_mbaBatchProfile = fopen("textFiles/Placements/mbaBatchProfile.txt", "r");  
		 								while (!feof($open_mbaBatchProfile))   
 										{  
 			 								$display = fgets($open_mbaBatchProfile, filesize($path_mbaBatchProfile));  
  											echo $display . "  ";  
 										}  
 										fclose($open_mbaBatchProfile);  
						 			}   
						 			else   
						 			{  
 		 								echo "Error occured ! ! ! Try again or report it to us";  
						 			}  
				   			?>

                             </table>


  				        </div>
                    </div>

                </div>

                <div class="tab-content">
                   <div class="panel panel-success">
  						<div class="panel-heading">
    						<h3 class="panel-title">Earlier Placements 2011-2012 </h3>
  						</div>
  						<div class="panel-body">
							<table border="1px">
							   <?php 
									$path_mbaLastYear ="textFiles/Placements/mbaLastYear.txt";  
									if (file_exists($path_mbaLastYear))   
									{  
										$open_mbaLastYear = fopen("textFiles/Placements/mbaLastYear.txt", "r");  
		 								while (!feof($open_mbaLastYear))   
 										{  
 			 								$display = fgets($open_mbaLastYear, filesize($path_mbaLastYear));  
  											echo $display . "  ";  
 										}  
 										fclose($open_mbaLastYear);  
						 			}   
						 			else   
						 			{  
 		 								echo "Error occured ! ! ! Try again or report it to us";  
						 			}  
				   			    ?>
							</table>
					    </div>
				     </div>
                  
                </div>
				
				<div class="tab-content">
					<div class="panel panel-success">
  						<div class="panel-heading">
    						<h3 class="panel-title">They Believe in IIPS</h3>
  						</div>
  						<div class="panel-body">
						
						</div>
				     </div>
				</div>
				<div class="tab-content">
					<div class="panel panel-success">
  						<div class="panel-heading">
    						<h3 class="panel-title">Recruitment Procedure</h3>
  						</div>
  						<div class="panel-body">
							 <?php 
									$path_recruitProcess ="textFiles/Placements/recruitProcess.txt";  
									if (file_exists($path_mbaLastYear))   
									{  
										$open_recruitProcess = fopen("textFiles/Placements/recruitProcess.txt", "r");  
		 								while (!feof($open_recruitProcess))   
 										{  
 			 								$display = fgets($open_recruitProcess, filesize($path_recruitProcess));  
  											echo $display . "  ";  
 										}  
 										fclose($open_recruitProcess);  
						 			}   
						 			else   
						 			{  
 		 								echo "Error occured ! ! ! Try again or report it to us";  
						 			}  
				   			  ?>
						</div>
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
