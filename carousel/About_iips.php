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
	     
		   <div id="wrapper" class="wrapper">

			<br><h1> About IIPS </h1><br>
			
            <div id="v-nav">

                <ul>
                    <li tab="tab1" class="first current" style="z-index:0">About IIPS</li>
                    <li tab="tab2" style="z-index:0">Director</li>
                    <li tab="tab3" style="z-index:0">Objectives and Vision</li>
					<li tab="tab4" style="z-index:0">Academic Calendar</li>
					<li tab="tab5" style="z-index:0">IIPS @ Wikipedia</li>
                    <li tab="tab6" class="last" style="z-index:0">Anti-Ragging Committee</li>
                </ul>

                <div class="tab-content">
					<img class="iips_logo" src="images/iipslogo.jpg">
                    <?php 
						$file1="textFiles/About_IIPS/About_IIPS.txt";  
						if (file_exists($file1))   
						{  
							$file = fopen("textFiles/About_IIPS/About_IIPS.txt", "r");  
		 					while (!feof($file))   
 							{  
 			 					$display = fgets($file, filesize($file1));  
  								echo $display . "  ";  
 							}  
 							fclose($file);  
						}   
						else   
						{  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						}  
				  ?>
                </div>

                <div class="tab-content" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
				<b>Meet the Director</b>
               <table style="background-color:#eeeeee; border:1px solid gray;" > <tr>  <td> <i>

					<?php 
						$file_director="textFiles/About_IIPS/Director.txt";  
						if (file_exists($file_director))   
						{  
							$file2 = fopen("textFiles/About_IIPS/Director.txt", "r");  
		 					while (!feof($file2))   
 							{  
 			 					$display = fgets($file2, filesize($file_director));  
  								echo $display . "  ";  
 							}  
 							fclose($file2);  
						}   
						else   
						{  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						}  
				  ?>

                </div>

                <div class="tab-content">
                   <b> What we Think</b><br><br>

					<div style="background-color:#eeeeee;"><b>Objectives</b></div>
						<ul type="disc" style="margin-left:50px;">
                              <?php 
									$file_objective="textFiles/About_IIPS/objective.txt";  
									if (file_exists($file_objective))   
									{  
										$file_ob = fopen("textFiles/About_IIPS/objective.txt", "r");  
		 								while (!feof($file_ob))   
 										{  
 			 								$display = fgets($file_ob, filesize($file_objective));  
  											echo $display . "  ";  
 										}  
 										fclose($file_ob);  
									}   
									else   
									{		  
 		 								echo "Error occured ! ! ! Try again or report it to us";  
									}  
				  			  ?>
                </div>
				
				<div class="tab-content">
					<b>Academic calender</b>
				</div>
				
				<div class="tab-content">
					Wikipedia : <a href="http://en.wikipedia.org/wiki/International_Institute_of_Professional_Studies">IIPS WikiPage</a>
				</div>
				
                <div class="tab-content">
                    <b>IIPS Anti-Ragging Committee</b><br><br>
					
					<ul type="disc" style="margin-left:50px;">
    					<?php 
							$file_antiRagging="textFiles/About_IIPS/antiRaggingCommittee.txt";  
							if (file_exists($file_antiRagging))   
							{  
								$file_antiRag = fopen("textFiles/About_IIPS/antiRaggingCommittee.txt", "r");  
		 						while (!feof($file_antiRag))   
 								{  
 			 						$display = fgets($file_antiRag, filesize($file_antiRagging));  
  									echo $display . "  ";  
 								}  
 								fclose($file_antiRag);  
							}   
							else   
							{		  
 		 						echo "Error occured ! ! ! Try again or report it to us";  
							}  
				  	  ?>
					</ul>	
                   
                </div>

             </div><!-- vertical tabs ended-->

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
