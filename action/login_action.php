<?php
  include '../class/user_class.php';

  if(isset($_POST["submit"]))
  {
    //INPUT
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = new User();
    $user->login($username,$password);
  }
?>