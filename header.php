<?php require_once('common/functions.php'); ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Meeting Scheduler</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="header">
    <div class="container">

      <div class="header-one">
        <h2><a href="index.php">Meeting Scheduler</a></h2>
      </div>

      <div class="header-two">
        <ul>
          <?php if (userLoggedIn()) { ?>
            <li><a href="index.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php } else { ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
          <?php } ?>
        </ul>
      </div>

    </div>
  </div>