<?php
include_once "header.php";
checkLogin();
?>

<div class="body">
  <div class="container">

    <div class="card">
      <div class="card-body">
        <h2 class="text-center pt-3">Login</h2>
        <form method="post">
          <label>Email</label>
          <input type="email" name="email" required class="form-control mb-2">

          <label>Password</label>
          <input type="password" name="password" required class="form-control mb-2">

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
  $email = $_POST['email'];
  $password = $_POST['password'];
  #date_default_timezone_set("Aisa/Karachi");

  global $db;
  $sql = "SELECT * from users where email='$email' AND password='$password'";
  
  $result = mysqli_query($db, $sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['current_user'] = mysqli_fetch_assoc($result);
    redirectToRoot();
  } else {
    showAlert('Invalid Credentials, Please try again');
  }
}
?>