<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - DC Members</title>

    <!-- Bootstrap Core CSS -->
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="google_sso.js"></script>
    <script type="text/javascript">

        (function() {
            var po = document.createElement('script');
            po.type = 'text/javascript'; po.async = true;
            po.src = 'https://plus.google.com/js/client:plusone.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
        })();

        function yes(){
          alert("working");
        }

    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" ></script>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div id="gConnect">
                                    <button class="g-signin"
                                        data-scope="https://www.googleapis.com/auth/plus.profile.emails.read"
                                        data-requestvisibleactions="http://schemas.google.com/AddActivity"
                                        data-clientId="238957888379-pdc67hecm585e9r6r6ij74r70mcmhu1j.apps.googleusercontent.com"
                                        data-callback="onSignInCallback"
                                        data-theme="dark"
                                        data-cookiepolicy="single_host_origin"
                                        data-height="tall"
                                        data-width="wide">
                                    </button>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <script type="text/javascript">

        var helper = (function() {
          var BASE_API_PATH = 'plus/v1/';

          return {
            /**
             * Hides the sign in button and starts the post-authorization operations.
             *
             * @param {Object} authResult An Object which contains the access token and
             *   other authentication information.
             */
            onSignInCallback: function(authResult) {
              gapi.client.load('plus','v1', function(){
                $('#authResult').html('Auth Result:<br/>');
                for (var field in authResult) {
                  $('#authResult').append(' ' + field + ': ' +
                      authResult[field] + '<br/>');
                }
                if (authResult['access_token']) {
                  $('#authOps').show('slow');
                  $('#gConnect').hide();
                  helper.profile();
                  // helper.people();
                } else if (authResult['error']) {
                  // There was an error, which means the user is not signed in.
                  // As an example, you can handle by writing to the console:
                  console.log('There was an error: ' + authResult['error']);
                  $('#authResult').append('Logged out');
                  $('#authOps').hide('slow');
                  $('#gConnect').show();
                }
                console.log('authResult', authResult);
              });
            },

            /**
             * Calls the OAuth2 endpoint to disconnect the app for the user.
             */
            disconnect: function() {
              // Revoke the access token.
              $.ajax({
                type: 'GET',
                url: 'https://accounts.google.com/o/oauth2/revoke?token=' +
                    gapi.auth.getToken().access_token,
                async: false,
                contentType: 'application/json',
                dataType: 'jsonp',
                success: function(result) {
                  console.log('revoke response: ' + result);
                  $('#authOps').hide();
                  $('#profile').empty();
                  $('#visiblePeople').empty();
                  $('#authResult').empty();
                  $('#gConnect').show();
                },
                error: function(e) {
                  console.log(e);
                }
              });
            },

            /**
             * Gets and renders the list of people visible to this app.
             */

            /**
             * Gets and renders the currently signed in user's profile data.
             */
            profile: function(){
              var request = gapi.client.plus.people.get( {'userId' : 'me'} );
              request.execute( function(profile) {
                console.log(profile.emails[0]['value']);
                $('#profile').empty();
                if (profile.error) {
                  $('#profile').append(profile.error);

                  return;
                }
                $('#profile').append(
                    $('<p><img src=\"' + profile.image.url + '\"></p>'));
                $('#profile').append(
                    $('<p>Hello ' + profile.displayName + '!<br />Tagline: ' +
                    profile.tagline + '<br />About: ' + profile.emails[0]['value'] + '</p>'));
                var email = profile.emails[0]['value'];
                window.location.href = "intermediate.php?email=" + email;
                // if (profile.cover && profile.coverPhoto) {
                //   $('#profile').append(
                //       $('<p><img src=\"' + profile.cover.coverPhoto.url + '\"></p>'));
                //   console.log(profile.emails);
                // }
              });
            }
          };
        })();

        /**
         * jQuery initialization
         */
        $(document).ready(function() {
          $('#disconnect').click(helper.disconnect);
          $('#loaderror').hide();
          if ($('[data-clientid="238957888379-q0rfe65il704eh3ag672jiralep5q48g.apps.googleusercontent.compliance"]').length > 0) {
            alert('This sample requires your OAuth credentials (client ID) ' +
                'from the Google APIs console:\n' +
                '    https://code.google.com/apis/console/#:access\n\n' +
                'Find and replace YOUR_CLIENT_ID with your client ID.'
            );
          }
        });

        /**
         * Calls the helper method that handles the authentication flow.
         *
         * @param {Object} authResult An Object which contains the access token and
         *   other authentication information.
         */
        function onSignInCallback(authResult) {
          helper.onSignInCallback(authResult);
        }
             
    </script>
<?php session_start();?>
<?php include('../../footer.html');?>
</body>

</html>
