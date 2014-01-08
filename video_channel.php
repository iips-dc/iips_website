<?php include 'base_template_2_column.php' ?>
	
	<?php startblock('page_title'); ?>
		Video Channel | IIPS
	<?php endblock(); ?>
	
	<!-- Starting of style block for custom CSS -->
	<?php startblock('style') ; ?>
	<style type="text/css">
		.youtube_frame {
			width: 215px;
			height: 150px;
		}
	</style>
		
	<?php endblock() ;?>
	
	<?php startblock('sidemenu'); ?>

		<ul class="nav side-tabs nav-pills">
			<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> IIPS Tube</a></li>
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Faculty Channels</a></li>         
			<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Student Channels</a></li>     


		</ul>
	<?php endblock() ;?>



	

	<?php startblock ('content'); ?>

			 <div id="tab1"  class="tab-content activeactive ">

			 	<h4>Welcome to IIPS Video Channels</h4>
			 	<p>
			 		Here is the list of Video channels involved with IIPS.
			 		We are constantly striving to serve better in education and learning. 

			 	</p>			 		
			 		<ul>
			 			<li><a href="">Our Youtube Channel</a></li>
			 			<li><a href=""> IIPS-Analysis and Design of Algorithms  Class</a></li>
			 			
			 		</ul>

			 		<div class="col-md-12">
			 			<div class="col-md-4">
			 				<iframe class="youtube_frame"
			 				src="http://www.youtube.com/embed/-Lf4WcJHJxU">
			 				</iframe>

			 				<label> <a href="">   CSS Menu </a> </label>
			 			</div>

			 			<div class="col-md-4">
			 				<iframe class="youtube_frame"
			 				src="http://www.youtube.com/embed/2ZBj7EbDU0A">
			 				</iframe>

			 				<label> <a href="">   CSS Menu </a> </label>
			 			</div>

			 			<div class="col-md-4">
			 				<iframe class="youtube_frame"
			 				src="http://www.youtube.com/embed/YAedYYGJiPs">
			 				</iframe>

			 				<label> <a href="">   CSS Menu </a> </label>
			 			</div>

			 		</div>


			 		<div class="col-md-12">
			 			<div class="col-md-4">
			 				<iframe class="youtube_frame"
			 				src="http://www.youtube.com/embed/w4CTMv9yFCE">
			 				</iframe>

			 				<label> <a href="">   CSS Menu </a> </label>
			 			</div>

			 			<div class="col-md-4">
			 				<iframe class="youtube_frame"
			 				src="http://www.youtube.com/embed/EKeouI6XNv0">
			 				</iframe>

			 				<label> <a href="">   CSS Menu </a> </label>
			 			</div>

			 			<div class="col-md-4">
			 				<iframe class="youtube_frame"
			 				src="http://www.youtube.com/embed/nEbdvilCtes">
			 				</iframe>

			 				<label> <a href="">   CSS Menu </a> </label>
			 			</div>



			 		</div>

			 	



			   
			</div>

			<!-- end div tab1 -->

			 <div id="tab2"  class="tab-content hide">
			   
			 	<p>Some of the featured youtube channel from our faculties are as follows:</p>

			 	<ul>
			 		<li><a href="http://www.youtube.com/user/basant1978"> Basant Namdeo | Faculty</a></li>

			 	</ul>

			 	<h5>Here are some of the popular ones </h5>

			 	<iframe width="420" height="345"
			 	src="http://www.youtube.com/embed/XGSy3_Czz8k">
			 	</iframe>



			</div>

			<!-- end div tab2  -->

			<div id="tab3"  class="tab-content hide">
			   
			<p>Some of the featured youtube channel from our students are as follows:</p>

			<ul>
					<li><a href="http://www.youtube.com/user/chitrankdixit?feature=watch"> Chitrank Dixit | Student</a></li>
			</ul>	

			</div>

			<!-- End div tab3 -->




			
				
		


	<?php endblock() ?>

