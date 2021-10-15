<?php
  include '../class/user_class.php';

  if(isset($_POST["register"]))
  {
    // INPUT
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $role = $_POST["role"];


    // INSTANTIATION
    $user = new User();
    if($password == $password_confirm)
    {
      $user->register($username, $password, $fullname, $email, $contact_number, $address, $gender, $role);
    }
   else
   {
    $_SESSION["success"] = 0;
    $_SESSION["message"] ="Registration Failed. Password entered does not match.";
    header("Location:../register.php");
   }
    
  }

?>