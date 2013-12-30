Steps on "How to remove .php extension from URL" (Using Wamp)
=============================================================

	** Aim
		To remove .php extension, e.g. - www.example.com/index.php to www.example.com/index
		
	** Steps
		* click on Wamp -> Apache -> httpd.conf
		* Search for "mod_rewrite", after searching you will get following line:
			#LoadModule rewrite_module modules/mod_rewrite.so
		* Remove # tag from the line and save the file :
			LoadModule rewrite_module modules/mod_rewrite.so
		* Now create .htaccess file from notepad and save this file in the root directory
		* Copy this code to .htaccess file and save the file:
			RewriteEngine On
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteRule ^([^\.]+)$ $1.php [NC,L]
		* Now to see the effect, open url without including .php extension e.g:
			in URL type: example.com/index