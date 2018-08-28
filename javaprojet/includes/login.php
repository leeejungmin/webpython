<?php

session_start();
if(isset($_POST['submit'])){

  include 'dbh.php';

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  //Error handlers
  //check if input are empty
}else{

  header("Location: ../index.php?login=error");
exit();
}
 ?>
