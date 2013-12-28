<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Programs We Offer</title>

       <!-- Include Styles -->
        
        <!--[if IE 7]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
        <!--[if IE 8]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
		<?php
		 include('cssLinks.php');
		?>
</head>

<body>
	<?php
			include 'header.php';
			
			include('readTextFilesScript.php');
	?>

	 <div id="wrap">
	  <div class="container" style="background-color:#FFFFFF;">

		<br><h3> Programs We Offer </h3><br>
         <div id="row">
		   <div class="col-md-2">
            <ul class="nav side-tabs nav-pills">
                <li><a class="icon-chevron-sign-right" href="#tab1">  Under Graduate</a></li>
                <li><a class="icon-chevron-sign-right" href="#tab2">  Integrated</a></li>
                <li><a class="icon-chevron-sign-right" href="#tab3">  Post Graduate</a></li>
                <li><a class="icon-chevron-sign-right" href="#tab4">M.Phil </a></li>
                <li><a class="icon-chevron-sign-right" href="#tab5">Ph.D.</a></li>
				
            </ul>
		   </div>


			
		   <div class="col-md-10">
		   		<div id="tab1" class="tab-content active">
				    <?php 
							$bcomHons ="textFiles/Programs_We_Offer/bcom_hons.txt";  
							readTextFiles($bcomHons);  
				    ?><br><br><br>

                </div>

              <div id="tab2"  class="tab-content hide">
				<b>Integrated Courses</b><br /><br />
					<ul class="nav nav-tabs" id="myTab">
  						<li class="active"><a href="#mca" data-toggle="tab">MCA</a></li>
  						<li><a href="#mba" data-toggle="tab">MBA</a></li>
						<li><a href="#mtech">M.Tech</a></li>
  					</ul>
					
					<div class="tab-content">
					  <div class="tab-pane active" id="mca">
					       <?php 
								$mca ="textFiles/Programs_We_Offer/mca.txt";  
								readTextFiles($mca);  
				    		?><br><br><br>
					  </div>
 					  <div class="tab-pane" id="mba"></b>
					     <?php 
								$mba ="textFiles/Programs_We_Offer/mba.txt";  
								readTextFiles($mba);  
				    		?><br><br><br>
					  </div>
 					  <div class="tab-pane" id="mtech">
					          <?php 
								$mTech ="textFiles/Programs_We_Offer/mtech.txt";  
								readTextFiles($mTech);  
				    		?><br><br><br>
					  		
					  </div>
					</div>
                </div>

                <div id="tab3" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
		   			<b>Post Graduate Courses</b><br><br>

					<ul class="nav nav-tabs" id="myTab">
  						<li class="active"><a href="#mbams" data-toggle="tab">MBA-MS</a></li>
  						<li><a href="#mbata" data-toggle="tab">MBA-TA</a></li>
						<li><a href="#mbaapr">MBA-APR</a></li>
  					</ul>
					<div class="tab-content">
  						<div class="tab-pane active" id="mbams">
						    <?php 
								$mbMS ="textFiles/Programs_We_Offer/mba_ms.txt";  
								readTextFiles($mbMS); 
				    		?><br><br><br>
						    
						</div>
  						<div class="tab-pane" id="mbata">
						      <?php 
								$mbaTA ="textFiles/Programs_We_Offer/mba_ta.txt";  
								readTextFiles($mbaTA); 
				    		?><br><br><br>
								
						</div>
 					    <div class="tab-pane" id="mbaapr">
								<?php 
									$mbaAPR ="textFiles/Programs_We_Offer/mba_apr.txt";  
									readTextFiles($mbaAPR);  
				    			?><br><br><br>
								
						</div>
					</div>
          	  </div>

                
            </div><!--.col-md-10 -->
         </div><!--.row class ended -->

	</div><!-- End of container class -->
   </div><!--End of Wrap id -->		
		<?php
		    include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts for vertical tabs-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>
		<script>
		
		</script>
		
</body>
</html>
