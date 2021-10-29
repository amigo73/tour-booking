<?php
   require_once 'database_class.php';

   class Packages extends Database
  {
    private $conn;
    private $package_id;
    private $package_name;
    private $description;
    private $salary;
    private $place;
    private $photo;
    private $user_id;


    public function __construct($package_id = NULL)
    {
      $this->conn = $this->connect();

      if($packege_id = NULL)
      {
        $sql = "SELECT packages.package_id, package_name, description, salary, place, photo, user_id FROM packages INNER JOIN users ON packages.user_id = users.user_id WHERE user_id = '$user_id'";

        $result = $this->conn->query($sql);

        if($result && $result->num_rows>0)
        {
          $packages = $result->fetch_assoc();
          $this->package_id = $package["package_id"];
          $this->package_name = $package["package_name"];
          $this->description = $package["description"];
          $this->salary = $package["salary"];
          $this->place = $package["place"];
          $this->photo = $package["photo"];
          $this->user_id = $package["user_id"];
        }
      }
    }

    public function displayPackages($package_id = NULL)
    {
      $sql = "SELECT package_id, package_name,place, description, salary, photo FROM packages INNER JOIN users ON packages.user_id = users.user_id";

      if($package_id != NULL)
      {
        $sql = $sql." WHERE package_id = " .$package_id;
      }
        $result = $this->conn->query($sql);
      
        if($result && $result->num_rows > 0)
      {
          foreach ($result as $row)
          {
            $today = date("Y-m-d");

            echo  "<div class='card col-3 bg-dark text-white'>";
            echo " <form method='post' action='action/guide_booking_action.php'>";
            echo  " <img src='img/{$row['photo']}' class='card-img-top'>";
            echo  " <div class='card-body'>";
            echo   "<input type='number' value='{$row['package_id']}' id='package_id' name='package_id' hidden> <br>";
            echo   "<input type='text' value='{$row['package_name']}' id='package_name' name='package_name' hidden> <br>";
            echo "<h3>{$row['package_name']}</h3><br>";
            echo "<br>";
            echo   "{$row['description']} <br>"; 
            echo "<br>";
            echo "SALARY: <br>";
            echo   "Php {$row['salary']}.00 / person <br>";
            echo  "</div>";
            echo  "<div class='form-group'>";
            echo  "<label for='reg_date' class='sr-only'>Date</label>";
            echo "<input type='date' class='form-control' id='date' name='date' placeholder='date' value='date' min='$today' required>";
            echo "</div>";
            echo "<input type='submit' class='btn btn-secondary w-100 mt-3 mb-3' name='work' value='work'>";
            echo "</form>";
            echo  "</div>";
          }
     }
     else
     {
       echo "<p>No records to display</p>";
     }
    }
    
    public function getFullName()
      {
        return $this->fullname;
      }
    public function getPlace()
    {
      return $this->place;
    }
    public function getDiscription()
    {
      return $this->discription;
    }
    public function getSalary()
    {
      return $this->salary;
    }
  }
?>
