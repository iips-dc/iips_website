<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Infrastructure</title>

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

			<h1> Infrastructure </h1><br>
            <div id="v-nav">

                <ul>
                    <li tab="tab1" class="first current" style="z-index:0">Lecture Theaters</li>
                    <li tab="tab2">Computer Labs</li>
                    <li tab="tab3">Libraries</li>
					<li tab="tab4">Hostels</li>

                </ul>

                <div class="tab-content">
					
					<?php 
						$path_lecTheatre ="textFiles/Infrastructure/lectureTheaters.txt";  
						if (file_exists($path_lecTheatre))   
						{  
							$open_lecTheatre = fopen("textFiles/Infrastructure/lectureTheaters.txt", "r");  
		 					while (!feof($open_lecTheatre))   
 							{  
 			 					$display = fgets($open_lecTheatre, filesize($path_lecTheatre));  
  								echo $display . "  ";  
 							}  
 							fclose($open_lecTheatre);  
						}   
						else   
						{  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						}  
				    ?>
 
                </div>

                <div class="tab-content" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
		          <?php 
						$path_compLab ="textFiles/Infrastructure/computerLab.txt";  
						if (file_exists($path_compLab))   
						{  
							$open_compLab = fopen("textFiles/Infrastructure/computerLab.txt", "r");  
		 					while (!feof($open_compLab))   
 							{  
 			 					$display = fgets($open_compLab, filesize($path_compLab));  
  								echo $display . "  ";  
 							}  
 							fclose($open_compLab);  
						}   
						else   
						{  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						}  
				    ?>
 

               </div>

                <div class="tab-content">
                   
					<?php 
						$path_libraries ="textFiles/Infrastructure/libraries.txt";  
						if (file_exists($path_libraries))   
						{  
							$open_libraries = fopen("textFiles/Infrastructure/libraries.txt", "r");  
		 					while (!feof($open_libraries))   
 							{  
 			 					$display = fgets($open_libraries, filesize($path_libraries));  
  								echo $display . "  ";  
 							}  
 							fclose($open_libraries);  
						}   
						else   
						{  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						}  
				    ?>
                </div>
				
				<div class="tab-content">
					<?php 
						$path_hostels ="textFiles/Infrastructure/hostels.txt";  
						if (file_exists($path_hostels))   
						{  
							$open_hostels = fopen("textFiles/Infrastructure/hostels.txt", "r");  
		 					while (!feof($open_hostels))   
 							{  
 			 					$display = fgets($open_hostels, filesize($path_hostels));  
  								echo $display . "  ";  
 							}  
 							fclose($open_hostels);  
						}   
						else   
						{  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						}  
				    ?>

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
