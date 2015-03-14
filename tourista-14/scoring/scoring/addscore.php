<?php include('../includes/dbconfig.php') ?>
<?php

// ENAME is EVENT ID NOT EVENT NAME !!
$ename=$_POST['event'];

//INSERT INTO TEAM'S SCORE TABLE
$sel_team="SELECT * FROM teams";
$res_team=mysql_query($sel_team) or die(mysql_error());
while ($team_combo=mysql_fetch_array($res_team)) {
$tid=$team_combo['id'];
$score=$_POST['score_'.$tid];
$bonus=$_POST['bonus_'.$tid];
$negscore=$_POST['neg_'.$tid];

$total= $score+$bonus-$negscore;

$event_insert="INSERT INTO score_". $tid ."(event, score, bonus, negscore, total) values ('".$ename."','".$score."','".$bonus."','".$negscore."','".$total."')";
mysql_query($event_insert) or die(mysql_error());
}

//INSERT INTO TEAM'S SCORE TABLE
$event_status="UPDATE events SET status='1' WHERE id='$ename'";
mysql_query($event_status) or die(mysql_error());

echo "score added!";
?>