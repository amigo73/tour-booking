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
            $_SESSION["success"] = 1;
            $_SESSION["message"] = "Registration Successful.";
            header("Location:../profile.php");
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
  

  }


?>