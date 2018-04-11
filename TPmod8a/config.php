<?php
  //config your database
  $host_1301154336 = "localhost";
  $user_1301154336 = "root";
  $password_1301154336 = "";
  $db_1301154336 = "mod8_1301154336";
  $conn = mysqli_connect($host_1301154336, $user_1301154336, $password_1301154336, $db_1301154336);

  if (mysqli_connect_errno()){
    die("Disconnect. ".mysqli_connect_error());
  } 
?>
