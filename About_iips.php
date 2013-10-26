 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>About IIPS</title>

       <!-- Include Styles -->	
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
	   <div id="wrap">
		 <div class="container" style="background-color:#FFFFFF;">
		   
		   <br><h3> About IIPS </h3><br>
		   <div class="row">
              <div class="col-sm-2">
					
                  <ul class="nav side-tabs">
                   	 <li class="active"><a class="icon-chevron-sign-right" href="#tab1">  About IIPS</a></li>
                     <li><a class="icon-chevron-sign-right" href="#tab2">  Director</a></li>
                     <li><a class="icon-chevron-sign-right" href="#tab3">  Objectives and Vision</a></li>
					  <li><a class="icon-chevron-sign-right" href="#tab4">  Academic Calendar</a></li>
					  <li><a class="icon-chevron-sign-right" href="#tab5">  IIPS @ Wikipedia</a></li>
                      <li><a class="icon-chevron-sign-right" href="#tab6">  Anti-Ragging Committee</a></li>
               	   </ul>
			  </div>
			  
			  <div class="col-sm-10">

                <div id="tab1"  class="tab-content active">
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

                <div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
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

                <div id="tab3" class="tab-content hide">
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
				
				<div id="tab4" class="tab-content hide">
					<b>Academic calender</b>
				</div>
				
				<div id="tab5" class="tab-content hide">
					Wikipedia : <a href="http://en.wikipedia.org/wiki/International_Institute_of_Professional_Studies">IIPS WikiPage</a>
				</div>
				
                <div id="tab6" class="tab-content hide">
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
                   
                </div><!--.tab-content Ended -->

             </div><!-- .col-md-10 ended-->

		</div><!--.row ended -->
		
	</div><!--.container ended -->
   </div><!--wrap id ended -->
		<?php
		     include('footer.php');
			include('jsLinks.php');
		?>

		
<!-- container 12 ended -->

</body>
</html>
