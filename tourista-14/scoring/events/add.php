<?php include('../head.php');?>
<?php include('../side-menu.php');?>
		
		<section id="content">
		
		<div class="g12 nodrop">
			<h1>Dashboard</h1>

			<form name="addev" action="addevent.php" method="post">
			<table>
				<tr>
					<td>Event Name:</td>
					<td><input type="text" name="ename" /></td>
				</tr>
			</table>
			<button class="submit" name="submitbuttonname" value="submitbuttonvalue">Add Event</button>
			</form>
		</div>

		</section>
<?php include('../footer.php');?>