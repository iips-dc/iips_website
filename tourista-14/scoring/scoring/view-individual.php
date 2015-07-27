<?php include('../includes/dbconfig.php') ?>
<?php

//SELECT FROM TEAM'S SCORE TABLE
$sel_team="SELECT * FROM teams";
$res_team=mysql_query($sel_team) or die(mysql_error());
while ($team_combo=mysql_fetch_array($res_team)) {
$tid=$team_combo['id'];
$tname=$team_combo['tname'];
	echo "<table>";
	echo "<h2>";
	echo $tname;
	echo "</h2>";
	echo "<tr>";
	echo "<td>Event</td>";
	echo "<td>Score</td>";
	echo "<td>Bonus</td>";
	echo "<td>Neg</td>";
	echo "<td>Total</td>";
	echo "</tr>";
$score_sel="SELECT * FROM score_". $tid;
$res_score=mysql_query($score_sel) or die(mysql_error());
while ($score_combo=mysql_fetch_array($res_score)) {
	echo "<tr>";
	echo "<td>";
	echo $score_combo['event'];
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
	echo "</table>";
}

?>