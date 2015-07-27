	<?php 
	session_start();
	?>
	
	
	
	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="google_sso.js"></script>
		  
	<div id="gConnect">
	    <button class="g-signin"
	        data-scope="https://www.googleapis.com/auth/plus.profile.emails.read"
	        data-requestvisibleactions="http://schemas.google.com/AddActivity"
	        data-clientId="809847866008-jlakg2v517dleolfk084h90jj94c0i5s.apps.googleusercontent.com"
	        data-callback="onSignInCallback"
	        data-theme="dark"
	        data-cookiepolicy="single_host_origin"
	        data-height="tall"
	        data-width="wide">
	    </button>
    </div>
  	<div id="authOps" style="display:none">
  	</div>
	<div class="container-fluid">
		<div class="row-fluid">
				
				
				
		<script type="text/javascript">
			function onSignInCallback(authResult) {
			  helper.onSignInCallback(authResult);
			}

		</script>

		

  

