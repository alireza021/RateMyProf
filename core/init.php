<?php

//innitialize database connection and create session
$db = mysqli_connect('127.0.0.1', 'root', '', 'ratemyprof');
if (mysqli_connect_errno()) {
  echo 'Database connection failed with following errors: '. mysqli_connect_error();
  die();
}
?>
