<?php
//configuration file
$dbhost = 'localhost';
$dbuser = 'amaurya_tourista';
$dbpass = 'tourista2013';//password

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'amaurya_tourista';
mysql_select_db($dbname) or die("database not available");
?>