<?php include 'base_template_2_column.php' ?>

	<?php startblock('page_title'); ?>
		Xpressions
	<?php endblock(); ?>

	<?php startblock('page_heading'); ?>
		Xpressions
	<?php endblock(); ?>
	
	<?php startblock('sidemenu'); ?>
		  <ul class="nav side-tabs nav-pills">
			<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1">  The Event</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2">  Winners</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3">  Last Year Team</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4">  Expression Album</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5">  Expression Videos</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab6">  Sponsors</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab7">  Register Your Team</a></li>
		  </ul>
	<?php endblock(); ?>
		
	<?php startblock('content'); ?>

		<div id="tab1"  class="tab-content active">
			<img class="iips_logo" src="images/xptest.jpg" align="middle">
			<?php 
					$theEvent ="textFiles/Events/theEvent.txt";  
					readTextFiles($theEvent); 
			?>
		</div>

		<div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
		<?php 
				$winners ="textFiles/Events/winners.txt";  
				readTextFiles($winners);  
		 ?>

		</div>

		<div id="tab3" class="tab-content hide">
		   <b> Teams</b><br><br>
		   <img src="images/xptest2.jpg" align="middle">
		   
		   <br><br><?php 
				$lastYearTeam ="textFiles/Events/lastYearTeam.txt";  
				readTextFiles($lastYearTeam);  
		 ?>
		</div>
		
		<div id="tab4" class="tab-content hide">
			<b>Photos</b><br><br>
			<img src="images/exp/govinda.JPG">
			 
		</div>
		
		<div id="tab5" class="tab-content hide">
			<b>Xpression's Videos</b><br><br>
			<ul type="disc">
			<li><a href="http://www.youtube.com/watch?feature=player_embedded&v=F12bBO_owfI"> cool dance at xpressions dus bahne</a></li>
			</ul>
		</div>
		
		<div id="tab6" class="tab-content hide">
			<b>Sponsors</b><br><br>
		
		</div>
		<div id="tab7" class="tab-content hide">
			
			<?php 
				$registration ="textFiles/Events/registration.txt";  
				readTextFiles($registration);  
		   ?>

		
		</div>
			 
	<?php endblock(); ?>
