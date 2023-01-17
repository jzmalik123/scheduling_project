<?php
$id=$_REQUEST['id'];
global $con;
$sql="delete from meetings where id='$id'";
$result=mysqli_query($con,$sql);
if($result)
	{
		echo "<script>window.location.href='index.php'
		alert('Data delete successfully')</script>";
	}
	else
	{
		echo "<script>alert('Sorry')</script>";
	}
?>