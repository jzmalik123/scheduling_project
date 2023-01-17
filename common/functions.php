<?php
$db = mysqli_connect('www.local.pakwheels:3306', 'root', '', 'meetings');

$current_user = null;
function userLoggedIn()
{
  return true;
}

?>