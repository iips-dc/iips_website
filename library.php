<?php include 'base_template_2_column.php' ?>

    <!-- Starting of style block for custom CSS -->
    <?php startblock('style') ; ?>
        
    <?php endblock() ?>

    <?php startblock('page_heading'); ?>
        <h3> Library </h3>
    <?php endblock(); ?>
    
    <?php startblock('sidemenu'); ?>
          <ul class="nav side-tabs nav-pills">
           	 <li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> About Library</a></li>
             <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2">  e-library</a></li>
             <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3">  Central Library</a></li>
             <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4"> EJ-Server</a></li>
             <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5"> ERMSS</a></li>
       	   </ul>
	<?php endblock() ; ?>	
			  
	<?php startblock('content') ?> 

        <div id="tab1"  class="tab-content active">
		<h4><b>About Library</b></h4>
        <?php 
				$aboutLibrary = "textFiles/Library/about_library.txt";  
				 readTextFiles($aboutLibrary);
		?>
        </div>

        <div id="tab2" class="tab-content hide" style="text-align:justify; padding:0px 20px 0px 20px; margin-top:0px; line-height:1.5;">
		<h4> <b>e-library</b></h4>
      
		<?php 
				$eLibrary = "textFiles/Library/e_library.txt";  
				 readTextFiles($eLibrary);
		?>

        </div>

        <div id ="tab3" class="tab-content hide">
        	<h4> <b>Central Library</b></h4>

        <?php 
                $centralLibrary = "textFiles/Library/central_library.txt";  
                 readTextFiles($centralLibrary);
        ?>


        </div>

        <div id ="tab4" class="tab-content hide">
        	<h4> <b>EJ-Server</b></h4>
        <?php 
                $ejServer = "textFiles/Library/ej_server.txt";  
                 readTextFiles($ejServer);
        ?>
        </div>

        <div id ="tab5" class="tab-content hide">
        	<h4> <b>  ELECTRONIC RESOURCES MANAGEMENT &amp; SEARCH SOLUTION</b></h4>
        <?php 
                $ermss = "textFiles/Library/ermss.txt";  
                 readTextFiles($ermss);
        ?>

        </div>

    <?php endblock() ; ?>        