<!doctype html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Publication | IIPS</title>
	
 		

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
			   	  <div class="col-md-2">
					<ul class="nav side-tabs nav-pills">
	   					<li class="active"><a class="icon-chevron-sign-right" href="#tab1"> Management</a></li>
	    				<li><a class="icon-chevron-sign-right" href="#tab2"> Technical</a></li>
	    				
	    			
					</ul>
	         		
				  </div><!--.col-md-3 End -->
	 

	                <div class="col-md-10">
						<div id="tab1"  class="tab-content active">
							<?php 
								$management ="textFiles/Publication/management.txt";  
								readTextFiles($management);
							 ?>
	                   </div>

	              <div id="tab2" class="tab-content hide">
						
	                  <?php 
								$technical ="textFiles/Publication/technical.txt";  
								readTextFiles($technical);
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
