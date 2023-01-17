<?php
require_once('common/functions.php');

session_start();

session_unset();

session_destroy();

redirectToRoot();
?>