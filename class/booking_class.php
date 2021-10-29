<?php
  require_once 'database_class.php';

  class Bookings extends Database
  {
      private $conn;
      private $booking_id;
      private $package_id;
      private $package_name;
      private $date;
      private $user_id;
      private $role;

      public function __construct($booking_id = NULL)
    {
      $this->conn = $this->connect();

      if($booking_id = NULL)
      {
        $sql = "SELECT bookings.booking_id, packages.package_id, package_name, date, account_id, role FROM bookings INNER JOIN packages ON bookings.package_id = packages.package_id WHERE user_id = '$user_id'";

        $result = $this->conn->query($sql);

        if($result && $result->num_rows>0)
        {
          $bookings = $result->fetch_assoc();
          $this->booking_id = $booking["booking_id"];
          $this->package_id = $booking["package_id"];
          $this->package_name = $booking["package_name"];
          $this->date = $booking["date"];
          $this->user_id = $booking["user_id"];
        }
      }
    }

    public function booking($package_id, $date, $account_id, $package_name, $role)
    {
      $sql =  "INSERT INTO bookings(package_id, package_name, date, account_id, role) VALUES ('$package_id','$package_name','$date','$account_id','$role')"; 

      if($this->conn->query($sql))
      {    
          $_SESSION["success"] = 1 ;
          $_SESSION["message"] = "You have successfully booked.";
          header("Location:../profile.php");
      }
      else
      {
        $_SESSION["success"] = 0 ;
        $_SESSION["message"] = "Failed to booked. Kindly try again.";
        header("Location:../packages.php");
      }
    }
  
    public function getPackageID()
    {
      return $this->package_id;
    }
    public function getUserID()
    {
      return $this->user_id;
    }
    public function getDate()
    {
      return $this->date;
    }
    public function getPackageName()
    {
      return $this->package_name;
    }
  }

?>