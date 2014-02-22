<?php include 'base_template_2_column.php' ?>

	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ?>

	<?php startblock('page_heading'); ?>
		<h3> Right to Information | IIPS </h3>
	<?php endblock(); ?>
	
	<?php startblock('sidemenu'); ?>


	  <ul class="nav side-tabs nav-pills">
		 <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1">  RTI</a></li>
	  </ul>

	<?php endblock() ; ?>


	<?php startblock('content') ; ?>
		<div class="panel-group" id="accordiona">
				  <!-- option 1 -->
				<div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordiona" href="#collapsefive">
						Press Release
						</a>
					  </h4>	
					</div>


					<div id="collapsefive" class="panel-collapse collapse in">
					  <div class="panel-body">
							<li><a href="downloads/press_release/Seminar on HIV AIDS and Blood Donation Awareness at IIPS-DAVV.pdf" target = "blank"> Press release for the Seminar on HIV AIDS and Blood Donation Awareness</a></li>
							<li><a href="downloads/press_release/press release reboot.jpg" target = "blank"> Press release for the Reboot event held on 17-sep-2014</a></li>
							<li><a href="downloads/press_release/" target = "blank"> Press release for the NSS</a> </li>
							<li><a href="downloads/press_release/Press Release Free of cost Eye Check-up Camp at IIPS-DAVV.pdf" target = "blank"> Press release for the Free Eyecheckup camp</a></li>
							<li><a href="downloads/press_release/PressNote.jpg.jpg" target = "blank"> Press release for the Alumni meet</a></li>
					  </div>
					</div>
				</div>

				<!-- option 2 -->
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordiona" href="#collapsesix">
						  Ordinances
						</a>
					  </h4>
					</div>
					<div id="collapsesix" class="panel-collapse collapse">
					  <div class="panel-body">
						<div class="">
							<li> <a href="downloads/ordinances/ordinance31.pdf" target = "blank"> Grading Scheme- Ordinance 31</a></li>
							<li> <a href="downloads/ordinances/conduct_of_examination_ordinance5.pdf" target = "blank">  Conduct of Examination - Ordinance  5</a></li>
							<li> <a href="downloads/ordinances/examinations_ordinance6.pdf" target = "blank"> Examinations -Ordinance 6</a></li>
							
						</div>
						
						<div>
								<p> For full ordinace list visit <a href= "http://www.dauniv.ac.in/Ordinance.php" >this page </a></p>
						</div>

					  </div>
					</div>
				  </div>

				  <!-- option 3 -->
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordiona" href="#collapseseven">
								
						 Guidelines for Admission 
						</a>

					  </h4>
					</div>
					<div id="collapseseven" class="panel-collapse collapse">
					  <div class="panel-body">
						Guidelines for Admission 2006-2007  <a href="downloads/guidelines/guidelines_for_admissions.pdf" target="blank">View & Download</a>
					  </div>
					  
					  </div>
					</div>

			</div>

	<?php endblock() ; ?>