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

			<br><h1> Xpressions </h1>
            <div id="v-nav">

                <ul>
                    <li tab="tab1" class="first current" style="z-index:0">The Event</li>
                    <li tab="tab2" style="z-index:0">Winners</li>
                    <li tab="tab3" style="z-index:0">Last Year Team</li>
					<li tab="tab4" style="z-index:0">Expression Album</li>
					<li tab="tab5">Expression Videos</li>
                    <li tab="tab6">Sponsors</li>
					<li tab="tab7" class="last">Register Your Team</li>
                </ul>

                <div class="tab-content">
					<img class="iips_logo" src="images/xptest.jpg" align="middle">
                    <?php 
								$path_theEvent ="textFiles/events/theEvent.txt";  
								if (file_exists($path_theEvent))   
								{  
									$open_theEvent = fopen("textFiles/events/theEvent.txt", "r");  
		 							while (!feof($open_theEvent))   
 									{  
 			 							$display = fgets($open_theEvent, filesize($path_theEvent));  
  										echo $display . "  ";  
 									}  
 									fclose($open_theEvent);  
								}   
								else   
								{  
 		 							echo "Error occured ! ! ! Try again or report it to us";  
								}  
				     ?>
                </div>

                <div class="tab-content" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
				<?php 
						$path_winners ="textFiles/events/winners.txt";  
						if (file_exists($path_winners))   
						{  
							$open_winners = fopen("textFiles/events/winners.txt", "r");  
		 					while (!feof($open_winners))   
 							{  
 			 					$display = fgets($open_winners, filesize($path_winners));  
  								echo $display . "  ";  
 							}  
 							fclose($open_winners);  
						 }   
						 else   
						 {  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						 }  
				 ?>

                </div>

                <div class="tab-content">
                   <b> Teams</b><br><br>
				   <img src="images/xptest2.jpg" align="middle">
				   
				   <br><br><?php 
						$path_lastYearTeam ="textFiles/events/lastYearTeam.txt";  
						if (file_exists($path_lastYearTeam))   
						{  
							$open_lastYearTeam = fopen("textFiles/events/lastYearTeam.txt", "r");  
		 					while (!feof($open_lastYearTeam))   
 							{  
 			 					$display = fgets($open_lastYearTeam, filesize($path_lastYearTeam));  
  								echo $display . "  ";  
 							}  
 							fclose($open_lastYearTeam);  
						 }   
						 else   
						 {  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						 }  
				 ?>
                </div>
				
				<div class="tab-content">
					<b>Photos</b><br><br>
					<img src="images/exp/govinda.JPG">
					 
				</div>
				
				<div class="tab-content">
					<b>Xpression's Videos</b><br><br>
					<ul type="disc">
					<li><a href="http://www.youtube.com/watch?feature=player_embedded&v=F12bBO_owfI"> cool dance at xpressions dus bahne</a></li>
					</ul>
				</div>
				
                <div class="tab-content">
                    <b>Sponsors</b><br><br>
				
                </div>
				<div class="tab-content">
                    
					<?php 
						$path_registration ="textFiles/events/registration.txt";  
						if (file_exists($path_registration))   
						{  
							$open_registration = fopen("textFiles/events/registration.txt", "r");  
		 					while (!feof($open_registration))   
 							{  
 			 					$display = fgets($open_registration, filesize($path_registration));  
  								echo $display . "  ";  
 							}  
 							fclose($open_registration);  
						 }   
						 else   
						 {  
 		 					echo "Error occured ! ! ! Try again or report it to us";  
						 }  
				   ?>

				
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
		
<!-- container 12 ended -->
</body>
</html>

