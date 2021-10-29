<?php
  include '../class/user_class.php';

  if(isset($_POST["book"]))
  {
    $fullname = $_POST["fullname"];
    $packagename = $_POST["packagename"];
    $discription = $_POST["discription"];
    $price = $_POST["price"];
    $place = $_POST["place"];
    $date = $_POST["date"];

    $packages = new Packages();
    $packages->packages($fullname,$packagename,$place,$discription,$price,$date);
  }

?>