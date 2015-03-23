<?php include('../head.php');?>

<?php include('../side-menu.php');?>
		
		<section id="content">
		
		<div class="g12 nodrop">
			<h1>Dashboard</h1>

<form name="addteam" action="addteam.php" method="post">
<fieldset>
<label>Add Team</label>
<section>
	<label for="tname">Team Name</label>
	<div><input type="text" id="tname" name="tname" required="" data-errortext="Team Name is required!" /></div>
</section>
<section>
	<label for="capt">Captain:</label>
	<div><input type="text" id="capt" name="capt"></div>
</section>
<section>
	<label for="m1">Member 1:</label>
	<div><input type="text" id="m1" name="m1"></div>
</section>
<section>
	<label for="m2">Member 2:</label>
	<div><input type="text" id="m2" name="m2"></div>
</section>
<section>
	<label for="m3">Member 3:</label>
	<div><input type="text" id="m3" name="m3"></div>
</section>
<section>
	<label for="m4">Member 4:</label>
	<div><input type="text" id="m4" name="m4"></div>
</section>
<section>
	<label for="m5">Member 5:</label>
	<div><input type="text" id="m5" name="m5"></div>
</section>
<section>
	<label for="m6">Member 6:</label>
	<div><input type="text" id="m6" name="m6"></div>
</section>
<section>
	<label for="m7">Member 7:</label>
	<div><input type="text" id="m7" name="m7"></div>
</section>
<section>
	<label for="m8">Member 8:</label>
	<div><input type="text" id="m8" name="m8"></div>
</section>
<section>
	<label for="m9">Member 9:</label>
	<div><input type="text" id="m9" name="m9"></div>
</section>
</fieldset>

<button class="submit" name="submitbuttonname" value="submitbuttonvalue">Add team</button>
</form>
	</div>

	</section>
<?php include('../footer.php');?>