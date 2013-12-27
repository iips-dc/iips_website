 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>About IIPS</title>

       <!-- Include Styles -->	
        <!--[if IE 7]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
        <!--[if IE 8]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
		<?php
		 include('cssLinks.php');
		?>
		<style type="text/css">
			.iips_logo{
				float:right;
			}
		</style>
    </head>
    <body>
		<?php
			include('header.php');
			include('readTextFilesScript.php');
				
		?>
	   <div id="wrap">
		 <div class="container" style="background-color:#FFFFFF;">
		   
		   <div class="row">
              <div class="col-sm-2">
					
                  <ul class="nav side-tabs nav-pills">
                   	 <li class="active"><a class="icon-chevron-sign-right" href="#tab1"> About Library</a></li>
                     <li><a class="icon-chevron-sign-right" href="#tab2">  e-library</a></li>
                    
               	   </ul>
			  </div>
			  
			  <div class="col-sm-10">
                <div id="tab1"  class="tab-content active">
				<h4><b>About Library</b></h4>
                    <?php 
						$aboutLibrary = "textFiles/Library/About_Library.txt";  
						 readTextFiles($aboutLibrary);
				  ?>
                </div>

                <div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
				<h4> <b>e-library</b></h4>
              
					

                </div>

              
                   
                </div><!--.tab-content Ended -->

             </div><!-- .col-md-10 ended-->

		</div><!--.row ended -->
		
	</div><!--.container ended -->
   </div><!--wrap id ended -->
		<?php
		     include('footer.php');
			include('jsLinks.php');
		?>

		
<!-- container 12 ended -->

</body>
</html>
