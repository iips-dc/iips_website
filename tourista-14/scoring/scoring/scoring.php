<?php include('../includes/dbconfig.php') ?>

<?php include('../head.php');?>
<?php include('../side-menu.php');?>
		
<section id="content">

	<div class="g12 nodrop">
			<h1>Scoring</h1>
<form name="scoreform" action="addscore.php" method="post">
<select name="event">
<?php
	$sel_ev="SELECT * FROM events WHERE status='0'";
	$res_ev=mysql_query($sel_ev) or die(mysql_error());
	while ($ev_combo=mysql_fetch_array($res_ev)) {
	echo "<option value=" . $ev_combo['id'] . ">" . $ev_combo['ename'] . "</option>";
	}
?>
</select>

<table>
<thead>
<th>Team</th>
<th>Score</th>
<th>Bonus Points</th>
<th>Negative Points</th>
</thead>
<tbody>
<?php
	$i=0;
	$sel_team="select * from teams";
	$res_team=mysql_query($sel_team) or die(mysql_error());
	while ($team_combo=mysql_fetch_array($res_team)) {
	echo "<tr>";
	echo "<td>";
	echo "<label>" . $team_combo['tname'] . "</label>";
	echo "</td><td>";
	echo "<input value='0' name='score_" . $team_combo['id'] ."' />";
	echo "</td><td>";
	echo "<input value='0' name='bonus_" . $team_combo['id'] ."'/>";
	echo "</td><td>";
	echo "<input value='0' name='neg_" . $team_combo['id'] ."' />";
	echo "</td></tr>";
	}
?>
</tbody>
</table>
<button class="submit" name="submitbuttonname" value="submitbuttonvalue">Add Scores</button>
</form>

	</div>

	</section>
<?php include('../footer.php');?>