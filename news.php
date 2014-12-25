<?php include 'base_full_width.php' ?>
	
	<?php startblock('page_title'); ?>
	News | IIPS
	<?php endblock(); ?>

    <?php startblock('style'); ?>
	<style type="text/css">
		.postDate{
			font-size:14px; 
			color:green;
		}
		.notice{
			background-color: white;
			padding: 10px 10px 10px 10px;
			margin-left:15px;
			margin-right:15px;
		}
	</style>
	<?php endblock(); ?>
  
    <?php startblock('content'); ?>
	
		    <h3 class="text-center"><b class="label label-primary icon-globe"> IIPS News Section</b></h3>
			
			<!-- News Section --><br><br>
			<div id="new_website" class="row featurette notice">
				
				<div class="col-md-10">
				    <h4 class="featurette-heading">New mobile responsive IIPS website soon to be released<!-- <span class="postDate pull-right">Posted - 31st Dec 2013</span> --></h4>
				    <div class="content">
						<p> The new IIPS website which is mobile responsive (easier to operate on mobiles) is soon being launche.
							We are constatly trying to serve you better . Do leave your feedback . It will help us to serve you better.

						</p>

					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>

			<div id="naac_visit" class="row featurette notice">
				
				<div class="col-md-10">
				    <h4 class="featurette-heading">IIPS Naac Visit complete on 15-Jan-2014<!-- <span class="postDate pull-right">Posted - 31st Dec 2013</span> --></h4>
				    <div class="content">
						<p> The NAAC visit at  IIPS is successfully completed on 15th of january 2014 . </p>

					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
				
			<div id ="naac_photos" class="row featurette notice">

				<div class="col-md-10">
				    <h4 class="featurette-heading">Naac Visit photos dated 16/01/14  </h4>
				    <div class="content">
						<p>To see the NAAC photos click <a href="http://www.dauniv.ac.in/notices/NAACPhotos16012014.pdf">here</a> .</p>
					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>

			<div id ="naac_photos1" class="row featurette notice">

				<div class="col-md-10">
				    <h4 class="featurette-heading">Naac Visit photos dated 15/01/14  </h4>
				    <div class="content">
						<p>To see the NAAC photos of 15/01/14 click <a href="http://www.dauniv.ac.in/notices/NAACPhotos15012014.pdf">here</a> .</p>
					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
			
			<div id="invitation" class="row featurette notice">
				
				<div class="col-md-10">
				    <h4 class="featurette-heading">Invitation to 13th Case Writing Workshop: International Publication by Prestige Institute of MGMT-GWl</h4>
				    <div class="content">
						<p>Prestige Institute of Management Gwalior is organizing Thirteenth Case Writing Workshop from 25-27, April 2014. The Case Method has been recognized as an Important Pedagogical tool in imparting Management education and it has been used in varying degrees by various Management Colleges. Case method provides simulated business decision making environment interfaced with business issues, having exhaustive or limited data/ facts, for the students to understand the business situations and issues involved. Most of the case studies used in Indian Business Schools are based on Organizational and cultural settings of USA or Europe. There is dearth of case written in Indian context.
In view to this, Prestige Institute of Management has decided to organise 13th National Case Writing Workshop for the benefit of Faculty of Management & Commerce, Economics, Psychology and IT Institutions and Executives of Business Organization from 25-27, April 2014. <a href="downloads/news/cww2014brochure.zip">Download the full workshop brochure</a></p>
					</div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
			
			<div id="seniority_list" class="row featurette notice">

				<div class="col-md-10">
				    <h4 class="featurette-heading">UTD Teachers Seniority List (EFFECTIVE FROM 01.01.2014 TO 31.12.2014)</h4>
				    <div class="content">
						<p>  UTD Teachers Seniority List (EFFECTIVE FROM 01.01.2014 TO 31.12.2014) . To visit the the full seniority list go 
							<a href="http://www.dauniv.ac.in/UTDSeniorityllistFrom01012014to31122014.php" target="blank">here </a></p></div>	
				   <button class="btn btn-primary toggleContent" role="button">View Details &raquo;</button>
				</div>
			</div><br>
			
			
			
			<br><br><br><br>
			<!--.end of Notice Section -->
	    
		

	
	<?php endblock(); ?>
	<?php startblock('script'); ?>
	<script src="assets/js/holder.js"></script>
	<script>

		   $(document).ready(function () {
				$('.content').hide(); //hide initialy
				$('.toggleContent').click(function () {
					var $this = $(this);
					// target only the content which is a sibling
					$(this).siblings('.content').slideToggle(500, function () {
						$this.html($(this).is(':visible') ? 'Hide Details' : 'View Details &raquo;');
					});

				});
			});


	</script>
	<?php endblock(); ?>
 
