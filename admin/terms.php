<div id='bodyright'>
	<?php if(isset($_GET['edit_term'])){ 
		echo edit_term();
	 } else{
	?>
	<h3>View All T&C</h3>
	<div id='add'>
		<details>
			<summary>Add New T&C</summary>
			<form method="post" enctype="multipart/form-data">
				<select name="for_whome">
				<option value="">Select Term For</option>
				<option value="Student">Student</option>
				<option value="Teacher">Teacher</option>
				</select>
			<input type="text" name="term" placeholder="Enter Term Here">
				<center><button name="add_term">Add T&C</button></center>
		</form>
		</details>
		<table style="width:95%" cellspacing="0">
			<tr>
				<th>Sr NO.</th>
				<th>Terms</th>
				<th>For Whome</th>
				<th>Action</th>
			</tr>
			<?php echo view_term(); ?>
		</table>
	</div>
	 
</div>
<?php echo add_term(); } ?>