<?php include 'base_template.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Infrastructure | IIPS</title>

       
</head>

<body>
	<?php startblock('content'); ?>
	<div id="wrap">
	  <div class="container" style="background-color:#FFFFFF;">

		<br><h3> Infrastructure </h1><br>
        <div id="row">
			<div class="col-md-3">
                <ul class="nav side-tabs nav-pills">
                    <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1">  Lecture Theaters</a></li>
                    <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2">  Computer Labs</a></li>
                    <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3">  Libraries</a></li>
					<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4">  Hostels</a></li>

                </ul>
			</div>
			
			<div class="col-md-9">
                <div id="tab1"  class="tab-content active">
					
					<?php 
						$lecTheatre ="textFiles/Infrastructure/lectureTheaters.txt";  
						readTextFiles($lecTheatre);
				    ?><br><br>
 
                </div>

                <div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
		          <?php 
						$compLab ="textFiles/Infrastructure/computerLab.txt";  
						readTextFiles($compLab);  
				    ?><br><br>
 

               </div>

                <div id="tab3" class="tab-content hide">
                   
					<?php 
						$libraries ="textFiles/Infrastructure/libraries.txt";  
						readTextFiles($libraries);
				    ?><br><br>
                </div>
				
				<div id="tab4" class="tab-content hide">
					<?php 
						$hostels ="textFiles/Infrastructure/hostels.txt";  
						readTextFiles($hostels);  
				    ?>

				</div>
             </div><!--col-md-10 -->
        </div><!--.row class ended -->
	 </div><!-- End of container class -->
	</div><!-- End of wrap id -->
	<?php endblock(); ?>
		
</body>
</html>
