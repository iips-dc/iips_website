<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>IIPS | Alumni</title>

    <!-- Bootstrap core CSS -->
    <?php
		include('cssLinks.php');
		include('slider_cssLinks.php');
	?>
	<style type="text/css">
		
	</style>
  </head>

  <body>
  

     <?php
	 	include('header.php');
	 ?>
<div class="row">
<div class="col-sm-12"  style="text-align:left; margin:5% 0 5% 7%">	 
<form action="#" method="post">
<h3> Log In</h3>
<label for="input1">User Name </label><br>
<input name="user_id" type="text" placeholder="Username" id="input1" required /><br><br>
<label for="input2">Password</label><br>
<input name="password" type="password" placeholder="Password" id="input2" required/><br><br>
 <input type="hidden" name="login" value="login">
<button type="submit" class="btn btn-primary" style="text-align:center">LogIn</button><br><br>
Not Registered Yet?
<a href="register_alumni.php">Register</a> today.
</form>

<?php
	     require 'db_connect.php';
		 
	   if(isset($_POST['login'])){
		$user_id = $_POST['user_id'];
		$password = md5($_POST['password']);
		
		$login_query = "SELECT * FROM `user_login` WHERE `user_id`= '".$user_id."' AND `password`='".$password."'";
		 if($query_run = mysql_query($login_query)){
				$query_num_rows = mysql_num_rows($query_run);
				if($query_num_rows == 0){
					echo "Enter a valid username and password.";
					mysql_close($con);
					}
				else{
					$user_id = mysql_result($query_run,0,'fusername');
					$_SESSION['user_id'] = $user_id;
					header('location:profile.php');
					}
		 }
		 else{
			 echo "Error Occurred.";
			 }
	   }
?>

</div>
</div>
 
 <?php
		include('footer.php');
		include('jsLinks.php');
		include('slider_jsLinks.php');
	 ?>
	 
	
	
	<!-- Script for "News/Events" tab -->
	<script src="assets/js/holder.js"></script>
	<?php 

		$browser = get_browser(null, true) ;
		$browser =  strtolower($browser['browser']) ; 

		if ($browser == 'ie') {
		echo " 
			<script>
 		 $(function () {
  			$('#myTab a').click(function (e) {
    			e.preventDefault();
  				$(this).tab('show');
			})

    	    $('#myTab a:first').tab('show');

 			$(window).load(function(){
 			        $('#myModal').modal('show');
 			    });	   	    
 		 })
	</script>

		";


		}
				else {
					echo " 
					<script>
		 		 $(function () {
		  			$('#myTab a').click(function (e) {
		    			e.preventDefault();
		  				$(this).tab('show');
					})

		    	    $('#myTab a:first').tab('show');

		 				   	    
		 		 })
			</script>

				";
			}
	?>
	
  <!-- Script for testimonial -->
	<script>
	$(document).ready(function() {
            $('ul#quotes').quote_rotator();
            $('ul#button_quotes').quote_rotator();
        });


   </script>

   <script src="https://www.surveymonkey.com/jsPop.aspx?sm=mM0njMJ6P3CyzaMh0OhMew_3d_3d"> </script>
  
  </body>
</html>