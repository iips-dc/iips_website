<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Programs We Offer</title>

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

		<br><h3> Programs We Offer </h3><br>
         <div id="row">
		   <div class="col-md-2">
            <ul class="nav">
                <li><a class="icon-chevron-sign-right" href="#">  Integrated</a></li>
                <li><a class="icon-chevron-sign-right" href="#">  Post Graduate</a></li>
				<li><a class="icon-chevron-sign-right" href="#">  Under Graduate</a></li>
            </ul>
		   </div>
			
		   <div class="col-md-10">
                <div class="tab-content">
				<b>Integrated Courses</b><br /><br />
					<ul class="nav nav-tabs" id="myTab">
  						<li class="active"><a href="#mca" data-toggle="tab">MCA</a></li>
  						<li><a href="#mba" data-toggle="tab">MBA</a></li>
						<li><a href="#mtech">M.Tech</a></li>
  					</ul>
					
					<div class="tab-content">
					  <div class="tab-pane active" id="mca">
					       <?php 
								$path_mca ="textFiles/ProgramsWeOffer/mca.txt";  
								if (file_exists($path_mca))   
								{  
									$open_mca = fopen("textFiles/ProgramsWeOffer/mca.txt", "r");  
		 							while (!feof($open_mca))   
 									{  
 			 							$display = fgets($open_mca, filesize($path_mca));  
  										echo $display . "  ";  
 									}  
 									fclose($open_mca);  
								}   
								else   
								{  
 		 							echo "Error occured ! ! ! Try again or report it to us";  
								}  
				    		?><br><br><br>
					  </div>
 					  <div class="tab-pane" id="mba"></b>
					     <?php 
								$path_mba ="textFiles/ProgramsWeOffer/mba.txt";  
								if (file_exists($path_mba))   
								{  
									$open_mba = fopen("textFiles/ProgramsWeOffer/mba.txt", "r");  
		 							while (!feof($open_mba))   
 									{  
 			 							$display = fgets($open_mba, filesize($path_mba));  
  										echo $display . "  ";  
 									}  
 									fclose($open_mba);  
								}   
								else   
								{  
 		 							echo "Error occured ! ! ! Try again or report it to us";  
								}  
				    		?><br><br><br>
					  </div>
 					  <div class="tab-pane" id="mtech">
					          <?php 
								$path_mtech ="textFiles/ProgramsWeOffer/mtech.txt";  
								if (file_exists($path_mtech))   
								{  
									$open_mtech = fopen("textFiles/ProgramsWeOffer/mtech.txt", "r");  
		 							while (!feof($open_mtech))   
 									{  
 			 							$display = fgets($open_mtech, filesize($path_mtech));  
  										echo $display . "  ";  
 									}  
 									fclose($open_mtech);  
								}   
								else   
								{  
 		 							echo "Error occured ! ! ! Try again or report it to us";  
								}  
				    		?><br><br><br>
					  		
					  </div>
					</div>
                </div>

                <div class="tab-content" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
		   			<b>Post Graduate Courses</b><br><br>

					<ul class="nav nav-tabs" id="myTab">
  						<li class="active"><a href="#mbams" data-toggle="tab">MBA-MS</a></li>
  						<li><a href="#mbata" data-toggle="tab">MBA-TA</a></li>
						<li><a href="#mbaapr">MBA-APR</a></li>
  					</ul>
					<div class="tab-content">
  						<div class="tab-pane active" id="mbams">
						    <?php 
								$path_mba_ms ="textFiles/ProgramsWeOffer/mba_ms.txt";  
								if (file_exists($path_mba_ms))   
								{  
									$open_mba_ms = fopen("textFiles/ProgramsWeOffer/mba_ms.txt", "r");  
		 							while (!feof($open_mba_ms))   
 									{  
 			 							$display = fgets($open_mba_ms, filesize($path_mba_ms));  
  										echo $display . "  ";  
 									}  
 									fclose($open_mba_ms);  
								}   
								else   
								{  
 		 							echo "Error occured ! ! ! Try again or report it to us";  
								}  
				    		?><br><br><br>
						    
						</div>
  						<div class="tab-pane" id="mbata">
						      <?php 
								$path_mba_ta ="textFiles/ProgramsWeOffer/mba_ta.txt";  
								if (file_exists($path_mba_ta))   
								{  
									$open_mba_ta = fopen("textFiles/ProgramsWeOffer/mba_ta.txt", "r");  
		 							while (!feof($open_mba_ta))   
 									{  
 			 							$display = fgets($open_mba_ta, filesize($path_mba_ta));  
  										echo $display . "  ";  
 									}  
 									fclose($open_mba_ta);  
								}   
								else   
								{  
 		 							echo "Error occured ! ! ! Try again or report it to us";  
								}  
				    		?><br><br><br>
								
						</div>
 					    <div class="tab-pane" id="mbaapr">
								<?php 
									$path_mba_apr ="textFiles/ProgramsWeOffer/mba_apr.txt";  
									if (file_exists($path_mba_apr))   
									{  
										$open_mba_apr = fopen("textFiles/ProgramsWeOffer/mba_apr.txt", "r");  
		 								while (!feof($open_mba_apr))   
 										{  
 			 								$display = fgets($open_mba_apr, filesize($path_mba_apr));  
  											echo $display . "  ";  
 										}  
 										fclose($open_mba_apr);  
									}   
									else   
									{  
 		 								echo "Error occured ! ! ! Try again or report it to us";  
									}  
				    			?><br><br><br>
								
						</div>
					</div>
          	  </div>

                <div class="tab-content">
				    <?php 
							$path_bcom_hons ="textFiles/ProgramsWeOffer/bcom_hons.txt";  
							if (file_exists($path_bcom_hons))   
							{  
								$open_bcom_hons = fopen("textFiles/ProgramsWeOffer/bcom_hons.txt", "r");  
		 						while (!feof($open_bcom_hons))   
 								{  
 			 						$display = fgets($open_bcom_hons, filesize($path_bcom_hons));  
  									echo $display . "  ";  
 								}  
 								fclose($open_bcom_hons);  
							}   
							else   
							{  
 		 						echo "Error occured ! ! ! Try again or report it to us";  
							}  
				    ?><br><br><br>

                </div>
            </div><!--.col-md-10 -->
         </div><!--.row class ended -->

	</div><!-- End of container class -->		
		<?php
		    include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts for vertical tabs-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>
		<script>
		$('#myTab a').click(function (e) {
  			e.preventDefault()
  			$(this).tab('show')
			});
		</script>
		
</body>
</html>
