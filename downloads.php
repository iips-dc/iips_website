<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_title'); ?>
		Research Cell
	<?php endblock(); ?>
	
	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
		
	<?php endblock() ;?>

	
	<?php startblock('sidemenu'); ?>
  
            <ul class="nav side-tabs nav-pills">
                <li id="tlink1" class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> Downloads</a></li>
     
            </ul>

	<?php endblock() ; ?>

	<?php Startblock('content'); ?>
		
				<div id="tab1" class="tab-content ">
				<div class="panel-group" id="accordion">
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						 Academic Calender
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
					  <div class="panel-body">
					    To download Academic Calender<a href="downloads/academic_calendar/student Guideline 2013-14.pdf"> click here </a>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
						  Syllabus
						</a>
					  </h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
					  <div class="panel-body">
					  	To download syllabus <a href="syllabus.php"> click here </a>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
						 Forms
						</a>
					  </h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
					  <div class="panel-body">
					  </div>
					  
					  </div>
					</div>
					<div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
						Miscellaneous
						</a>
					  </h4>
					</div>
					<div id="collapsefour" class="panel-collapse collapse">
					  <div class="panel-body">
					  </div>
					  
					  </div>
					</div>
				  </div>
				</div>
			
		
			
			<?php endblock(); ?>
         