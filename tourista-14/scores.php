<?php include('scoring/includes/dbconfig.php') ?>
<?php

//SELECT FROM EVENTS TABLE
$sel_event="SELECT * FROM events";
$res_event=mysql_query($sel_event) or die(mysql_error());
while ($event_combo=mysql_fetch_array($res_event)) {
$ename=$event_combo['ename'];
$eid=$event_combo['id'];
$status=$event_combo['status'];

echo "<table>";
echo "<h2>";
echo $ename;
echo "</h2>";
echo "<tr>";
echo "<td>Team</td>";
echo "<td>Score</td>";
echo "<td>Bonus</td>";
echo "<td>Neg</td>";
echo "<td>Total</td>";
echo "</tr>";

if ($status==1){

//SELECT EVERY TEAM'S SCORE TABLE
$sel_team="SELECT * FROM teams";
$res_team=mysql_query($sel_team) or die(mysql_error());
while ($team_combo=mysql_fetch_array($res_team)) {
$tid=$team_combo['id'];
$tname=$team_combo['tname'];



$score_sel="SELECT * FROM score_". $tid ." WHERE event='$eid'";
$res_score=mysql_query($score_sel) or die(mysql_error());
while ($score_combo=mysql_fetch_array($res_score)) {
	echo "<tr>";
	echo "<td>";
	echo $tname;
	echo "</td><td>";
	echo $score_combo['score'];
	echo "</td><td>";
	echo $score_combo['bonus'];
	echo "</td><td>";
	echo $score_combo['negscore'];
	echo "</td><td>";
	echo $score_combo['total'];
	echo "</td></tr>";
	}
}
}
else{
	echo "<tr>";
	echo "EVENT NOT COMPLETED YET";
	echo "</tr>";
}
	echo "</table>";
}

?>