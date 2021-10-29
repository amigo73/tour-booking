<?php
  include 'class/user_class.php';

  $fullname = $_SESSION["fullname"];
  $username = $_SESSION["username"];

  $user = new User();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Guide-Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Packages</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome, <?php echo "$fullname"; ?></a>
                        </li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  <?php
        if(isset($_SESSION["success"]) && isset($_SESSION["message"]))
        {
          $class = ($_SESSION["success"]==1)?"success":"danger";
          $message = $_SESSION["message"];

          unset($_SESSION["success"]);
          unset($_SESSION["message"]);
        
    ?>
        <div class="alert alert-<?php echo $class;?>" role="alert">
            <?php echo $message;?>
        </div>
    <?php
        }
    ?>
      
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
      <div class="card p-4">
          <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" /></button> <span class="name mt-3"><?php echo "$fullname";?></span> <span class="idd">@<?php echo $username;?></span>
              <div class=" d-flex mt-2"><a href="guide_packages.php"><button class="btn1 btn-dark">Work</button></a></div>
              <div class="text mt-3 text-center"> 
                <P>Current Reservation </P>
                <?php
                    $user->displayBooking(NULL, $_SESSION["account_id"]); 
                ?>
              </div>
              <div class="text mt-3 text-center"> Past Reservation </div>
              <div class=" px-2 rounded mt-4 date "> 
                <span class="join text-dark"> 
                  <?php
                  date_default_timezone_set('Asia/Tokyo');
                  $today = date("Y-m-d H:i:s");
                  echo($today);
                  ?>
                </span> 
              </div>
          </div>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>