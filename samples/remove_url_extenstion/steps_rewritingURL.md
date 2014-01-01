Steps on "How to remove .php extension from URL" (Using Wamp)
=============================================================

	** Aim
		To remove .php extension, e.g. - www.example.com/index.php to www.example.com/index
		
	** Steps on windows: ** 
		1. click on Wamp -> Apache -> httpd.conf
		2. Search for "mod_rewrite", after searching you will get following line:
			#LoadModule rewrite_module modules/mod_rewrite.so
		3. Remove # tag from the line and save the file :
			LoadModule rewrite_module modules/mod_rewrite.so
		4. Now create .htaccess file from notepad and save this file in the root directory of your project .
		5. Copy the below code from " #these to hiding code." to .htaccess file and save the file:

			# these lines are used to enable url hiding . Added mannually
			RewriteEngine On
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteRule ^([^\.]+)$ $1.php [NC,L]
			# end for url hiding code. 

		6. Now to see the effect, open url without including .php extension e.g:
			in URL type: example.com/index


	** Steps on Ubuntu(Linux) ** 
		1. Open apache2 folder in the etc directory. 
			>> cd /etc/apache2/
		2. Open the httpd.conf and add the below lines :
			 #This line enables the rewrite modules. Added manually
			 LoadModule rewrite_module modules/mod_rewrite.so

		3. Now create .htaccess file from notepad and save this file in the root directory of your project .

		4. Copy the below code from " #these to hiding code." to .htaccess file and save the file:

			# these lines are used to enable url hiding . Added mannually
			RewriteEngine On
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteRule ^([^\.]+)$ $1.php [NC,L]
			# end for url hiding code. 

		5. Check the url without .php now . Thats it , Enjoy !!


