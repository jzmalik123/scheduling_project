<?php
session_start();
$db = mysqli_connect('www.local.pakwheels:3306', 'root', '', 'meetings');

$current_user = count($_SESSION) > 0 ? $_SESSION['current_user'] : null;

function userLoggedIn()
{
  global $current_user;
  return $current_user !== null;
}

function sendSignupEmail($email)
{
  $msg = "Your account has been created.";
  $msg = wordwrap($msg,70);
  mail($email, "Thanks for Signup", $msg);
}
function select_Timezone($selected = '')
{

  // Create a list of timezone
  $OptionsArray = timezone_identifiers_list();
  $select = '<select name="timezone" class="form-control-select mb-2">
                  <option disabled selected>
                      Please Select Timezone
                  </option>';

  foreach ($OptionsArray as $key => $row) {
    $select .= '<option value="' . $key . '"';
    $select .= ($key == $selected ?: '');
    $select .= '>' . $row . '</option>';
  }

  $select .= '</select>';
  return $select;
}

function showAlert($message)
{
  echo "<script>alert('$message');</script>";
}

function redirectToRoot()
{
  header('Location: index.php');
}

function requireLogin(){
  if(!userLoggedIn())
    header('Location: login.php');
}

function checkLogin()
{
  if(userLoggedIn())
    header('Location: index.php');
}
?>