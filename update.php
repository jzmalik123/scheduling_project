<?php
include_once "header.php";
?>

<div class="body">
<div class="container">

<div class="card">
<div class="card-body">
<h2 class="text-center pt-3">Update Meeting</h2>
<?php
$id=$_REQUEST['id'];
global $con;
$sql="select * from meetings where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<form method="post">
<label>Title</label>
<input type="text" name="title" value="<?php echo $row['title'];?>" required class="form-control mb-2">
<label>Description</label>
<textarea name="description" required class="form-control mb-2" style="height:160px;padding-top:4px;"><?php echo $row['description'];?></textarea>
<label>Start Time</label>
<input type="time" name="start_time" value="<?php echo $row['start_time'];?>" required class="form-control mb-2">
<label>Duration</label>
<input type="text" name="duration" value="<?php echo $row['duration'];?>" required class="form-control mb-2">
<label>Status</label>
<select name="status" required class="form-control-select mb-2">
<option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
<option value="proposed">Proposed</option>
<option value="confirmed">Confirmed</option>
</select>
<label>Password</label>
<input type="password" name="password" value="<?php echo $row['password'];?>" required class="form-control mb-2">
<button type="submit" name="submit" class="btn-info mt-2">Update</button>
</form>
</div>
</div>

</div>
</div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$description=$_POST['description'];
	$start_time=$_POST['start_time'];
	$duration=$_POST['duration'];
	$status=$_POST['status'];
	$password=$_POST['password'];
	date_default_timezone_set("Aisa/Karachi");
	$update_at=date('Y-m-d');
	global $con;
	$sql="update meetings set title='$title', description='$description', start_time='$start_time', duration='$duration', status='$status', password='$password', updated_at='$update_at' where id='$id'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>window.location.href='index.php'
		alert('Data update successfully')</script>";
	}
	else
	{
		echo "<script>alert('Sorry')</script>";
	}
	
	
}
?>