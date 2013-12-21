<!-- This page serves the content for Home page. It includes
slider, notice, news_events box, Link to quicklink file
and testimonial section -->

<div class="container boxShadow" style=" background-color:#FFFFFF; ">
	<br><br>
	<!-- 1st span12 started "slider + notices" ended -->
	<div class="row">
        <div class="col-md-9">
		  <div id="myCarousel" class="carousel slide boxShadow" >
          <!-- Indicators -->
      		<ol class="carousel-indicators">
        		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        		<li data-target="#myCarousel" data-slide-to="1"></li>
        		<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
      		</ol>
      		<div class="carousel-inner">
        		<div class="item active">
         		   <img src="images/slider/iips2.jpg" alt="First slide">
          			<div class="container">
            			<div class="carousel-caption">
            			</div><!-- .carousel-caption-->
          		   </div><!--.container -->
       		    </div>
        		<div class="item">
          			<img src="images/slider/iips6.jpg" alt="Second slide">
         			 <div class="container">
            			<div class="carousel-caption">
           				 </div>
          			</div>
        		</div>
        		<div class="item">
          			<img src="images/slider/iips8.jpg" alt="Third slide">
          			<div class="container">
            			<div class="carousel-caption">
            			</div>
          			</div>
        		</div>
				<div class="item">
          			<img src="images/slider/iips1.jpg"  alt="Third slide">
          			<div class="container">
            			<div class="carousel-caption">
            			</div>
          			</div>
        		</div>
				<div class="item">
          			<img src="images/slider/iips5.jpg"  alt="Third slide">
          			<div class="container">
            			<div class="carousel-caption">
            			</div>
          			</div>
        		</div>
      		</div><!--carousel-inner -->
      			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      			<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    	</div><!-- /.myCarousel -->
    	


     </div>
     <!-- notice  block start -->
     <div class="col-md-3 text-center">
     	   <div class="panel panel-primary boxShadow" style="margin-top:-20px; font-size:15px">
				<div class="panel-heading">
					<h3 class="panel-title">Notice/Announcements</h3>
				</div>
				<div class="panel-body" align="left">
				   <span class="glyphicon glyphicon-hand-right"></span> <a href="#">NAAC Coming Soon </a><br>
				   <span class="glyphicon glyphicon-hand-right"></span> <a href="#">End Semester Exam : December 2013 </a> <br>
				   <span class="glyphicon glyphicon-hand-right"></span> <a href="#">Online Fees Last Date</a> <br>
				   <span class="glyphicon glyphicon-hand-right"></span> <a href="#">Elections</a> <br>
				   <span class="glyphicon glyphicon-hand-right"></span> <a href="#">WorkShop</a><br>
				   <span class="glyphicon glyphicon-hand-right"></span> <a href="#">Guest Lecture</a><br>
				   <span class="glyphicon glyphicon-hand-right"></span> <a href="#">Meeting</a><br>
				   <span class="glyphicon glyphicon-hand-right"></span> <a href="#">Fill Feedback Form</a><br>
				</div>
				<div class="panel-footer">
					<a href="allNotices.php"><b>View All &raquo;</b></a>
				</div>
		  </div><!--Panel for Annoucements End -->
     </div><!--Col-md-3 End -->
     <!-- Notice block end -->
   </div>
		<!-- span9 "slider" part ended -->
		<!-- news/event section started -->
	<div class="row">
			 
		<div class="col-md-12">
		   <div class="panel panel-primary boxShadow" style="height:300px; overflow:hidden;">
			  <div class="panel-heading">
				 <h3 class="panel-title">News & Events</h3>
			  </div>
			  <div class="panel-body">
				 <ul class="nav nav-tabs" id="myTab">
					<li class="active">
					   <a href="#news">News</a>
					</li>
					<li>
						<a href="#events">Events</a>
					</li>
				  </ul>
				  <div class="tab-content">
					 <div class="tab-pane active" id="news" >
						<ul class="media-list">
						   <li class="media">
							  <a class="pull-left" href="#"> <img class="media-object" src="..." alt="..."> </a>
							  <div class="media-body">
								  <br /><h4 class="media-heading">Best in Computer Science</h4>
								  IIPS is awarded as the Best Institute of Computer Science
							   </div>
							</li>
						</ul>
	                  </div>
				      <div class="tab-pane" id="events">
						<ul class="media-list">
						   <li class="media">
							  <a class="pull-left" href="#"> <img class="media-object" src="..." alt="..."> </a>
							  <div class="media-body">
								 <br /><h4 class="media-heading">Expressions</h4>
									 Expression Coming Soon
							  </div>
							</li>
						  </ul>
					   </div>
				   </div><!--.tab-content -->
				</div><!--Panel body -->
			</div><!--End of Panel -->
		</div><!--End of col-md-12 -->
	</div><!--End of Row -->
	<!-- News/event section end -->
	

	<div class="row">
   	   <div class="col-md-9 quicklist boxShadow">
     	 <?php include('quicklinks.php') ?><br>
  	 </div><!--col-md-8 class ended -->
  
  	 <div class="col-md-3 testimonial text-center">
  		<!-- testimonial started -->
		<div class="panel panel-primary  boxShadow" style="height:180px;">
			<div class="panel-heading">
				<h3 class="panel-title">Testimonials</h3>
			</div>
			<div class="panel-body">

			  <ul id="button_quotes" style=" list-style-type:none;  margin-left:-20px;">
				<li>
					" We Can't wait to see this
					Website on internet "<br><br>
					<cite>- World</cite></pre>
				</li>
				<li>
					" Finally IIPS website is working FINE !! "<br><br>
					<cite>&mdash; Students</cite>
				</li>
				<li>
					" But still you are far away from
					Professional Website "<br><br>
				 	<cite>&mdash; Testers</cite>
				</li>
				<li>
				   " We will hire those Developers !! "<br><br>
					<cite>&mdash; Google</cite>
				</li>
			  </ul>
		    </div><!--panel body Ended -->
  	    </div><!--Panel Ended -->
	  </div><!--col-md-4 ended -->
  </div><!--row Class ended --><br>
</div>
<!-- container class ended -->