<?php
include_once "header.php";
?>

<div class="body">
	<div class="container">

		<div class="card">
			<div class="card-body">
				<h2 class="text-center pt-3">Add Meeting</h2>
				<form method="post">
					<label>Title</label>
					<input type="text" name="title" required class="form-control mb-2">
					<label>Description</label>
					<textarea name="description" required class="form-control mb-2"
						style="height:160px;padding-top:4px;"></textarea>
					<label>Start Time</label>
					<input type="time" name="start_time" required class="form-control mb-2">
					<label>Duration</label>
					<input type="text" name="duration" required class="form-control mb-2">
					<label>Status</label>
					<select name="status" required class="form-control-select mb-2">
						<option value="">- Select -</option>
						<option value="proposed">Proposed</option>
						<option value="confirmed">Confirmed</option>
					</select>
					<label>Password</label>
					<input type="password" name="password" required class="form-control mb-2">
					<button type="submit" name="submit" class="btn-info mt-2">Save</button>
					<button type="reset" class="btn-info ml-2 mt-2">Cancel</button>
				</form>
			</div>
		</div>

	</div>
</div>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$start_time = $_POST['start_time'];
	$duration = $_POST['duration'];
	$status = $_POST['status'];
	$password = $_POST['password'];
	date_default_timezone_set("Aisa/Karachi");
	$created_at = date('Y-m-d');
	$update_at = date('Y-m-d');
	global $con;
	$sql = "insert into meetings values('','$title','$description','$start_time','$duration','$status','$password','$created_at','$update_at')";
	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "<script>window.location.href='index.php'
		alert('Data insert successfully')</script>";
	} else {
		echo "<script>alert('Sorry')</script>";
	}


}
?>