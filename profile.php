<?php
  include 'class/user_class.php';

  if( !isset($_SESSION["account_id"]))
  {
    header("Location:login.php");
  }

  $user = new User($_SESSION["account_id"]);

  $account_id = $user->getAccountID();
  $fullname = $user->getFullName();
  $username = $user->getUserName();



  // session_start();

  // if(isset($_SESSION["role"]) && $_SESSION["role"]== "A")
  // {
  //   header("Location:dashboard.php");
  // }
  // elseif(isset($_SESSION["role"]) && $_SESSION["role"]== "U")
  // {
  //   header("Location:profile.php");
  // }
  // elseif(isset($_SESSION["role"]) && $_SESSION["role"]== "G")
  // {
  //   header("Location:guide_profile.php");
  // }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">

  </head>
  <body>
      
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
      <div class="card p-4">
          <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" /></button> <span class="name mt-3"><?php echo "$fullname";?></span> <span class="idd">@<?php echo $username;?></span>
              <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Book</button> </div>
              <div class="text mt-3"> Current Reservation </div>
              <div class="text mt-3"> Past Reservation </div>
              <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>
          </div>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

