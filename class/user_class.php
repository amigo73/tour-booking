<?php
  require_once 'database_class.php';

  class User extends Database
  {
      private $conn;
      private $account_id;
      private $username;
      private $password;
      private $email;
      private $fullname;
      private $gender;
      private $role;
      private $address;
      private $contact_number;
      private $booking_id;

      public function __construct($account_id = NULL)
      {
          $this->conn = $this->connect();

          if($account_id != NULL)
          {
            $sql = "SELECT accounts.account_id, username, password, role, rating, user_id, fullname, contact_number, address, email, FROM accounts INNER JOIN users ON accounts.account_id = users.account_id WHERE accounts.account_id = $account_id";

            $result = $this->conn->query($sql);

            if($result && $result->num_rows>0)
            {
              $user = $result->fetch_assoc();
              $this->account_id = $user["account_id"];
              $this->username = $user["username"];
              $this->rating = $user["rating"];
              $this->fullname = $user["fullname"];
              $this->contact_number = $user["contact_number"];
              $this->address = $user["address"];
              $this->email = $user["email"];
            }
          }
      }
      public function register($username, $password, $fullname, $email, $contact_number, $address, $gender, $role)
      {
  
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO accounts(username,password,role) VALUES('$username','$hashed_password','$role')";

        if($this->conn->query($sql))
        {
          // echo "INSERT SUCCESSFUL";
          $account_id = $this->conn->insert_id;
  
          $sql = "INSERT INTO users(fullname, email, contact_number, address, account_id, gender) VALUES ('$fullname', '$email', '$contact_number', '$address', $account_id, '$gender')";

          
          // echo $sql;
          // exit;

          if($this->conn->query($sql))
          {
            $_SESSION["account_id"] = $account_id;
            $_SESSION["fullname"] = $fullname;
            $_SESSION["role"] = $role;
            $_SESSION["username"] = $username;

            $_SESSION["success"] = 1;
            $_SESSION["message"] = "Registration Successful.";
            header("Location:../packages.php");
          
          }
          else
          {
            $_SESSION["success"] = 0;
            $_SESSION["message"] ="Registration Failed. Kindly try again.";
            header("Location:../register.php");
          }
        }
        else
        {
          $_SESSION["success"] = 0;
          $_SESSION["message"] ="Registration Failed. Kindly try again.";
            header("Location:../register.php");
        }
      }
      public function login($username,$password)
      {
        $sql = "SELECT accounts.account_id, username, password, role, user_id, fullname, contact_number, address, email, gender FROM accounts INNER JOIN users ON accounts.account_id = users.account_id WHERE username = '$username'";
        
        $result = $this->conn->query($sql);

        if($result && $result->num_rows==1)
        {
          $user = $result->fetch_assoc();

            if (password_verify($password,$user["password"]))
            {
              $_SESSION["account_id"] = $user["account_id"];
              $_SESSION["fullname"] = $user["fullname"];
              $_SESSION["role"] = $user["role"];
              $_SESSION["username"] = $user["username"];

              if($user["role"]=="A")
              {
                header("Location:../dashboard.php");
              }
              elseif($user["role"]=="U")
              {
                header("Location:../profile.php");
              }
              elseif($user["role"]=="G")
              {
                header("Location:../guide_profile.php");
              }
          }
          else
          {
            $_SESSION["success"] = 0;
            $_SESSION["message"] = "Incorrect password";
            header("Location:../login.php");
          }
        }
        else
        {
          $_SESSION["success"] = 0;
          $_SESSION["message"] = "Incorrect username";
          header("Location:../login.php");
        }
      }
      public function getFullName()
      {
        return $this->fullname;
      }
      public function displayBooking($booking_id = NULL, $account_id = NULL)
      {
        $sql = "SELECT booking_id, package_id, package_name, date, account_id, role FROM bookings WHERE account_id = '$account_id'";

        // var_dump($_SESSION);
        // echo $sql;
        // exit;

        if($booking_id != NULL)
        {
          $sql = $sql."WHERE booking_id = " .$booking_id;
        }
        $result = $this->conn->query($sql);

        if($result && $result->num_rows > 0)
        {  
            foreach ($result as $row)
            { 
              echo " <form method='post' action='action/update_action.php'>";
              echo "<div class='card col-3 text-center'>";
              echo "<h4>{$row['package_name']} <br> {$row['date']} <br></h4>";
              echo "<a href='update.php?id={$row['booking_id']}'>Update</a>";
              echo "<br>";
              echo "</div>";
              echo "</form>";
            }
        }
        else
        {
          echo "<h3>No records to display</h3>";
        }

      }
      public function updateBooking($package_id, $package_name, $date, $account_id, $role)
      {
          $sql = "UPDATE bookings SET package_id='$package_id', package_name='$package_name', date='$date' WHERE account_id = '$account_id' && booking_id";

          if($this->conn->query($sql))
          {
            $_SESSION["success"] = 1 ;
            $_SESSION["message"] = "You have successfully update your booking";
            header("Location:../profile.php");
          }
          else
          {
            $_SESSION["success"] = 0 ;
            $_SESSION["message"] = "Update failed. Kindly try again.";
            header("Location:../update.php");
          }
      }
      public function displayUpdate($booking_id = NULL, $account_id = NULL)
      {
        $sql = "SELECT booking_id, package_id, package_name, date, account_id, role FROM bookings WHERE account_id = '$account_id' && booking_id='$booking_id'";

        // var_dump($_SESSION);
        // echo $sql;
        // exit;

        if($booking_id != NULL)
        {
          $sql = $sql."WHERE booking_id = " .$booking_id;
        }
        $result = $this->conn->query($sql);

        if($result && $result->num_rows > 0)
        {  
         
            foreach ($result as $row)
            { 
              echo "<select name='package_id'>";
              echo "<option>{$row['package_id']}</option>";
              echo "<option>'1'</option>";
              echo "</select>";
              
              // echo " <form method='post' action='action/update_action.php'>";
              // echo "<div class='card col-3 text-center'>";
              // echo "<h4>{$row['package_name']} <br> {$row['date']} <br></h4>";
              // echo "<br>";
              // echo "</div>";
              // echo "</form>";
            }
        }
        else
        {
          echo "<h3>No records to display</h3>";
        }
      }
      public function booking_id()
      {
        return $this->booking_id;
      }

  }
?>