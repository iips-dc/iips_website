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
			include('readTextFilesScript.php');
		?>
 		<div id="wrap">
	        <div class="container" style="background-color:#FFFFFF;">
			   <div class="row">
			      <br><h3 class="title">Devi Ahilya University</h3><br>
			   	  <div class="col-md-3">
					<ul class="nav side-tabs nav-pills">
	   					<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> About University</a></li>
	    				<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Vice Chancellor</a></li>
	    				<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Department</a></li>
	    				<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4"> University Auditorium</a></li>
	   					<li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5"> IT Center</a></li>
	    			
					</ul>
	         		
				  </div><!--.col-md-3 End -->
	 

	                <div class="col-md-9">
						<div id="tab1"  class="tab-content active">
	                      <?php 
							$abtUniv ="textFiles/About_University/about_University.txt";  
							readTextFiles($abtUniv);
					     ?>
	                   </div>

	              <div id="tab2" class="tab-content hide">
						<?php 
							$viceChancellor ="textFiles/About_University/vice_Chancellor.txt";  
							readTextFiles($viceChancellor);  
					    ?>
	                  

	                </div>

             
	                <div id="tab3" class="tab-content hide">

	                   <?php 
							$departments ="textFiles/About_University/departments.txt";  
							readTextFiles($departments);  
					    ?>              

	                </div>

	 				
	                <div  id="tab4" class="tab-content hide">

	                    <?php 
							$univAuditorium ="textFiles/About_University/univ_Auditorium.txt";  
							readTextFiles($univAuditorium); 
					    ?> 
	                    
	                </div>

					<div  id="tab5" class="tab-content hide">
						<?php 
							$itCenter ="textFiles/About_University/itCenter.txt";  
							readTextFiles($itCenter); 
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
