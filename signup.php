<?php
include_once "header.php";
?>

<div class="body">
  <div class="container">

    <div class="card">
      <div class="card-body">
        <h2 class="text-center pt-3">Sign Up</h2>
        <form method="post">
          <label>Username</label>
          <input type="text" name="username" required class="form-control mb-2">

          <label>Email</label>
          <input type="email" name="email" required class="form-control mb-2">

          <label>Password</label>
          <input type="password" name="password" required class="form-control mb-2">

          <label>Start Time</label>
          <input type="time" name="earliest_time" class="form-control mb-2">

          <label>Latest Time</label>
          <input type="time" name="latest_time" class="form-control mb-2">

          <label>Timezone</label>
          <?php echo (select_Timezone()); ?>

          <button type="submit" name="submit" class="btn-info mt-2">Sign Up</button>
        </form>
      </div>
    </div>

  </div>
</div>

</body>

</html>
<?php
if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $earliest_time = $_POST['earliest_time'];
  $latest_time = $_POST['latest_time'];
  $timezone = $_POST['timezone'];
  $password = $_POST['password'];
  #date_default_timezone_set("Aisa/Karachi");

  global $db;
  $sql = "update meetings set username='$username', email='$email', earliest_time='$earliest_time', latest_time='$latest_time', timezone='$timezone', password='$password', updated_at='$update_at'";
  $sql = "INSERT INTO users (username, email, password, earliest_time, latest_time, timezone) VALUES ('$username', '$email', '$password', '$earliest_time', '$latest_time', '$timezone')";
  
  $result = mysqli_query($db, $sql);
  if ($result) {
    sendSignupEmail($email);
    echo "<script>window.location.href='index.php'
		alert('Data update successfully')</script>";
  } else {
    echo "<script>alert('Sorry')</script>";
  }
}
?>