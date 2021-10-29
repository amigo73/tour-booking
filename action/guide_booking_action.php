<?php
  include '../class/guide_booking_class.php';
  
  if(isset($_POST["work"]))
  {
    $date = $_POST["date"];
    $package_id = $_POST["package_id"];
    $package_name = $_POST["package_name"];
    $account_id = $_SESSION["account_id"];
    $role = $_SESSION["role"];
  
    $bookings = new Bookings();
    $bookings->booking($package_id, $date, $account_id, $package_name, $role);
  }
  
?>