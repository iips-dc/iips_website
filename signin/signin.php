<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>Signin</title>
</head>
<body>
	<!-- Header block End -->
	<div id="wrap">
		 <div class="container" style="background-color:#FFFFFF;">
			<h4><b>
			<br>
		<?php
        include_once "base_signin.php";

        session_start();

        set_include_path("." . PATH_SEPARATOR . get_include_path());
        require_once 'Google/Client.php';

        /************************************************
          ATTENTION: Fill in these values! Make sure
          the redirect URI is to this page, e.g:
          http://localhost:8080/user-example.phps
         ************************************************/
        $client_id = '238957888379-kifeq199a8mauc2cod4j2m8tapmsirg0.apps.googleusercontent.com';
        $client_secret = 'j488CqlKD2UECsnmAVO0V55-';
        $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

        $client = new Google_Client();
        $client->setClientId($client_id);
        $client->setClientSecret($client_secret);
        $client->setRedirectUri($redirect_uri);
        $client->setScopes('email');
        /************************************************
          If we're logging out we just need to clear our
          local access token in this case
         ************************************************/
        if (isset($_REQUEST['logout'])) {
          unset($_SESSION['access_token']);
        }

        /************************************************
          If we have a code back from the OAuth 2.0 flow,
          we need to exchange that with the authenticate()
          function. We store the resultant access token
          bundle in the session, and redirect to ourself.
         ************************************************/
        if (isset($_GET['code'])) {
          $client->authenticate($_GET['code']);
          $_SESSION['access_token'] = $client->getAccessToken();
          $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
          header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }

        /************************************************
          If we have an access token, we can make
          requests, else we generate an authentication URL.
         ************************************************/
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
          $client->setAccessToken($_SESSION['access_token']);
        } else {
          $authUrl = $client->createAuthUrl();
        }

        /************************************************
          If we're signed in we can go ahead and retrieve
          the ID token, which is part of the bundle of
          data that is exchange in the authenticate step
          - we only need to do a network call if we have
          to retrieve the Google certificate to verify it,
          and that can be cached.
         ************************************************/
        if ($client->getAccessToken()) {
          $_SESSION['access_token'] = $client->getAccessToken();
          $token_data = $client->verifyIdToken()->getAttributes();
        }

        //echo pageHeader("User Query - Retrieving An Id Token");
        if (
            $client_id == '238957888379-kifeq199a8mauc2cod4j2m8tapmsirg0.apps.googleusercontent.com'
            || $client_secret == 'j488CqlKD2UECsnmAVO0V55-'
            || $redirect_uri == 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']) {
          //echo missingClientSecretsWarning();
        }
        ?>
    <div class="box">
          <div class="request">
            <?php if (isset($authUrl)): ?>
              <a class='login btn' href='<?php echo $authUrl; ?>'>Sign in with Google</a>
            <?php else: ?>
              <!--<a class='logout' href='?logout'>Logout</a>-->
            <?php endif ?>
          </div>

          <?php if (isset($token_data)): ?>
            <div class="data">
              <?php 
              // echo ($token_data['payload']['email']);

              //echo "<br>";
               $email = $token_data['payload']['email'];
              //echo $email;
              //header('location:intermediate.php?email='.$email);
              //exit();

              //$newstr = var_dump($token_data); 
              // var_dump($token_data);

              //echo "Hiii", $newstr;
              ?>
              <script>
                var email = "<?php echo $email;  ?>";
                location.href="intermediate.php?user_email=" + email;
              </script>
            </div>
          <?php endif ?>
        </div>
            			   	
			
            
			 
		</div><!--.container class ended -->	
   </div>	<!-- End of wrap -->
	
	<?php
	        include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       

	<!-- Script (JS files) block Start -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46860115-2', 'redirectme.net');
  ga('send', 'pageview');

</script>


</body>

</html>
