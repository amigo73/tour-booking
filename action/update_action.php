<?php
  include '../class/user_class.php';
  
  if(isset($_POST["update"]))
  {
    $package_id = $_POST["package_id"];
    $package_name = $_POST["package_name"];
    $date = $_POST["date"];
    $account_id = $_SESSION["account_id"];
    $role = $_SESSION["role"];

  
    $user = new User();
    $user->updateBooking($package_id, $package_name, $date, $account_id, $role);
  }
  
?>