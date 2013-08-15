<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
	<style type="text/css">
		.logo{
			background-image:url(images/green-03.jpg);
			background-repeat:repeat;
			background-attachment:fixed;
			width:100%;
			height:50px;
			margin-top:-12px;
			
		}
		h1{
			font-family:"Palatino Linotype";
			font-size:24px;
			padding-top:8px;
			color:#333333;
		}
		.gateway {
			margin-left: 0px;
			background-color:#333333;
			height:25px;
		}
		.tab{
			padding: 0 20px; /* Or desired space*/
		}
		.topspace{
			margin-top: -25px; 
		}
		.search{
			margin-left:170px;
		}
		.contact{
			float:right;
			margin-right:00px;
		}
	</style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="gateway">
    <a href="" class="tab">Student</a>
	<a href="" class="tab">Faculty</a>
	<a href="#" class="tab">Alumni</a>
    <a href="#" class="tab">Staff</a>
	<a href="#" class="contact">Contact Us</a>
	</div>
    <div class="navbar-wrapper topspace" style="width:100%">
     <!-- <div class="container topspace">-->
		<!-- label label-default -->
			<div class="logo"><h1><span class="container">International Institute of Professional Studies - DAVV</span></h1></div>
        <div class="navbar navbar-inverse navbar-static-top" style="width:100%">
          
    	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
    	      <span class="icon-bar"></span>
    	      <span class="icon-bar"></span>
    	      <span class="icon-bar"></span>
    	    </button>
           
            <div class="nav-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About us<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="About_iips.php">About IIPS</a></li>
                    <li><a href="#2">Director Message</a></li>
                    <li><a href="#3">Infrastructure</a></li>
                    <li><a href="#4">Reach us</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs we offer<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#1">MCA 6 years Integrated</a></li>
                    <li><a href="#2">M.Tech 5 1/2 years Integrated</a></li>
                    <li><a href="#3">MBA MS 5 years Integrated</a></li>
                    <li><a href="#4">B.Com Hons 3 years</a></li>
                  </ul>
                </li>
                
                <li><a href="#contact">Admission</a></li>
                <li><a href="#contact">Academics</a></li>
                <li><a href="#contact">Events</a></li>
                <li><a href="#contact">Placements</a></li>
                 
					<li style="margin-left:160px;">
			  		<form class="navbar-form navbar-left" action="" role="search">
      				<div class="form-group">
        				<input type="text" class="form-control" placeholder="Search">
      				</div></li>
      				<li ><button type="submit" class="btn btn-default">Submit</button>
   					 </form></li>
				
              </ul>
			  
            </div>
          </div>
        </div>

      </div>
    </div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../dist/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"/>
    <script src="../assets/js/holder.js"></script>
  </body>
</html>
