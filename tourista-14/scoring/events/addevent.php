<?php

include('../includes/dbconfig.php');

$ename=$_POST['ename'];

//INSERT INTO EVENTS TABLE
$event_insert="INSERT INTO events (ename) values ('".$ename."')";
mysql_query($event_insert) or die(mysql_error());



echo "event added!";
?>