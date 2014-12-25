<?php
	$sql_host = 'localhost';
	$sql_user = 'root';
	$sql_pass = 'root';
	$err_msg = "Error occured in connecting database";
    $sql_db = 'iips_alumni';
	
	
//connecting localhost
$con=mysql_connect($sql_host,$sql_user,$sql_pass) or die("Unable to Connect" .$err_msg);
//connecting database
$selected = mysql_select_db($sql_db,$con) or die("Could not select database" .$err_msg);
