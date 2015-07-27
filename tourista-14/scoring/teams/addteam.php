<?php

include('../includes/dbconfig.php');

$tname=$_POST['tname'];
$capt=$_POST['capt'];
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$m6=$_POST['m6'];
$m7=$_POST['m7'];
$m8=$_POST['m8'];
$m9=$_POST['m9'];


//INSERT INTO TEAMS TABLE
$team_insert="INSERT INTO teams (tname, capt, m1, m2, m3, m4, m5, m6, m7, m8, m9) values ('".$tname."','".$capt."','".$m1."','".$m2."','".$m3."','".$m4."','".$m5."','".$m6."','".$m7."','".$m8."','".$m9."')";
mysql_query($team_insert) or die(mysql_error());



$sel_team="SELECT * FROM teams WHERE tname='$tname'";
$res_team=mysql_query($sel_team) or die(mysql_error());
while ($team_combo=mysql_fetch_array($res_team)) {
$tid=$team_combo['id'];
}

echo $tid;

//CREATE SCORE TABLE FOR TEAM
$create_ev="CREATE TABLE score_". $tid ."(
	event int,
	score int,
	bonus int,
	negscore int,
	total int
	)";
	mysql_query($create_ev) or die(mysql_error());


echo "table added!";
?>