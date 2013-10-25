<!doctype html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>About University</title>
	
 		

       <!-- Include Styles -->

        <link rel="stylesheet" href="./css/vtab-style.css" />   
		<?php
		 include('cssLinks.php');
		?>     

        <!--[if IE 7]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->

        <!--[if IE 8]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->

    </head>

    <body>
		<?php
			include('header.php');
		?>
 		<div id="wrap">
	        <div class="container" style="background-color:#FFFFFF;">
			   <div class="row">
			      <br><h3 class="title">Devi Ahilya University</h3><br>
			   	  <div class="col-md-2">
					<ul class="nav nav-tabs">
	   					<li class="active"><a class="icon-chevron-sign-right" href="#tab1"> About University</a></li>
	    				<li><a class="icon-chevron-sign-right" href="#tab2"> Vice Chancellor</a></li>
	    				<li><a class="icon-chevron-sign-right" href="#tab3"> Department</a></li>
	    				<li><a class="icon-chevron-sign-right" href="#tab4"> University Auditorium</a></li>
	   					<li><a class="icon-chevron-sign-right" href="#tab5"> IT Center</a></li>
	    			
					</ul>
	         		
				  </div><!--.col-md-3 End -->
	 

	                <div class="col-md-10">
						<div id="tab1"  class="tab-content active">
	                      <?php 
							$path_abtUniv ="textFiles/About_University/about_University.txt";  
							if (file_exists($path_abtUniv))   
							{  
								$open_abtUniv = fopen("textFiles/About_University/about_University.txt", "r");  
			 					while (!feof($open_abtUniv))   
	 							{  
	 			 					$display = fgets($open_abtUniv, filesize($path_abtUniv));  
	  								echo $display . "  ";  
	 							}  
	 							fclose($open_abtUniv);  
							}   
							else   
							{  
	 		 					echo "Error occured ! ! ! Try again or report it to us";  
							}  
					     ?>
	                   </div>

	 

	              <div id="tab2" class="tab-content hide">
						<?php 
							$path_viceChancellor ="textFiles/About_University/vice_Chancellor.txt";  
							if (file_exists($path_viceChancellor))   
							{  
								$open_viceC = fopen("textFiles/About_University/vice_Chancellor.txt", "r");  
			 					while (!feof($open_viceC))   
	 							{  
	 			 					$display = fgets($open_viceC, filesize($path_viceChancellor));  
	  								echo $display . "  ";  
	 							}  
	 							fclose($open_viceC);  
							}   
							else   
							{  
	 		 					echo "Error occured ! ! ! Try again or report it to us";  
							}  
					    ?>
	                  

	                </div>

	 					
	                
	                <div id="tab3" class="tab-content hide">

	                        <?php 
							$path_Departments ="textFiles/About_University/departments.txt";  
							if (file_exists($path_Departments))   
							{  
								$open_depart = fopen("textFiles/About_University/departments.txt", "r");  
			 					while (!feof($open_depart))   
	 							{  
	 			 					$display = fgets($open_depart, filesize($path_Departments));  
	  								echo $display . "  ";  
	 							}  
	 							fclose($open_depart);  
							}   
							else   
							{  
	 		 					echo "Error occured ! ! ! Try again or report it to us";  
							}  
					    ?>              

	                </div>

	 				

	                <div  id="tab4" class="tab-content hide">

	                    <?php 
							$path_univAuditorium ="textFiles/About_University/univ_Auditorium.txt";  
							if (file_exists($path_univAuditorium))   
							{  
								$open_audi = fopen("textFiles/About_University/univ_Auditorium.txt", "r");  
			 					while (!feof($open_audi))   
	 							{  
	 			 					$display = fgets($open_audi, filesize($path_univAuditorium));  
	  								echo $display . "  ";  
	 							}  
	 							fclose($open_audi);  
							}   
							else   
							{  
	 		 					echo "Error occured ! ! ! Try again or report it to us";  
							}  
					    ?> 
	                    

	                </div>

					<div  id="tab5" class="tab-content hide">
						<?php 
							$path_itCenter ="textFiles/About_University/itCenter.txt";  
							if (file_exists($path_itCenter))   
							{  
								$open_itCenter = fopen("textFiles/About_University/itCenter.txt", "r");  
			 					while (!feof($open_itCenter))   
	 							{  
	 			 					$display = fgets($open_itCenter, filesize($path_itCenter));  
	  								echo $display . "  ";  
	 							}  
	 							fclose($open_itCenter);  
							}   
							else   
							{  
	 		 					echo "Error occured ! ! ! Try again or report it to us";  
							}  
					    ?>
	                    
	                </div>
				</div><!--.col-md-9 end -->
			  </div><!--.row class ended -->
			</div>  

   </div><!-- End of container class -->

        <!-- Include Scripts -->

      <?php
	        include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts for vertical tabs-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>

 

    </body>

</html>
