<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Programs We Offer</title>

       <!-- Include Styles -->
        <link rel="stylesheet" href="css/vtab-style.css" />		
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
            <ul class="nav side-tabs">
                <li id="tlink1"><a class="icon-chevron-sign-right" href="#tab1">  Under Graduate</a></li>
                <li id="tlink2"><a class="icon-chevron-sign-right" href="#tab2">  Integrated</a></li>
                <li  id="tlink3"><a class="icon-chevron-sign-right" href="#tab3">  Post Graduate</a></li>
                <li  id="tlink4"><a class="icon-chevron-sign-right" href="#tab4">M.Phil Ph.D.</a></li>
                <li  id="tlink5"><a class="icon-chevron-sign-right" href="#tab5">Ph.D.</a></li>
				
            </ul>
		   </div>


			
		   <div class="col-md-10">
		   		<div id="tab1" class="tab-content  hide">
				    <?php 
							$bcomHons ="textFiles/ProgramsWeOffer/bcom_hons.txt";  
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
								$mca ="textFiles/ProgramsWeOffer/mca.txt";  
								readTextFiles($mca);  
				    		?><br><br><br>
					  </div>
 					  <div class="tab-pane" id="mba"></b>
					     <?php 
								$mba ="textFiles/ProgramsWeOffer/mba.txt";  
								readTextFiles($mba);  
				    		?><br><br><br>
					  </div>
 					  <div class="tab-pane" id="mtech">
					          <?php 
								$mTech ="textFiles/ProgramsWeOffer/mtech.txt";  
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
								$mbMS ="textFiles/ProgramsWeOffer/mba_ms.txt";  
								readTextFiles($mbMS); 
				    		?><br><br><br>
						    
						</div>
  						<div class="tab-pane" id="mbata">
						      <?php 
								$mbaTA ="textFiles/ProgramsWeOffer/mba_ta.txt";  
								readTextFiles($mbaTA); 
				    		?><br><br><br>
								
						</div>
 					    <div class="tab-pane" id="mbaapr">
								<?php 
									$mbaAPR ="textFiles/ProgramsWeOffer/mba_apr.txt";  
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
		$('#myTab a').click(function (e) {
  			e.preventDefault()
  			$(this).tab('show')
			});
			//make all tab hidden
				//code to get parameter(start)
					var $_GET = {},
					    args = location.search.substr(1).split(/&/);
					for (var i=0; i<args.length; ++i) {
					    var tmp = args[i].split(/=/);
					    if (tmp[0] != "") {
					        $_GET[decodeURIComponent(tmp[0])] = decodeURIComponent(tmp.slice(1).join("").replace("+", " "));
					    }
					}
					//alert(args);
					arg_string='';
					arg_string=arg_string+args;
					par=arg_string.substr(2);
					//alert(par);
					//par=parameter
				//code to get parameter(end)
				tab_id_to_active='tab'+par;
				//alert('tab:'+tab_id_to_active)
				link_to_active='tlink'+par;
				//alert('link:'+link_to_active);

				document.getElementById(link_to_active).setAttribute("class","active");
				//alert('link activated');
				document.getElementById(tab_id_to_active).setAttribute("class","tab-content active");
				//alert('tab activated');
				
				//document.getElementById('tab_id_to_active').className="tab-content active";
				
		</script>
		
</body>
</html>
