<?php
  session_start();

  if(isset($_SESSION["role"]) && $_SESSION["role"]== "A")
  {
    header("Location:dashboard.php");
  }
  elseif(isset($_SESSION["role"]) && $_SESSION["role"]== "U")
  {
    header("Location:profile.php");
  }
  elseif(isset($_SESSION["role"]) && $_SESSION["role"]== "G")
  {
    header("Location:guide_profile.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  </head>
  <body class="container bg-dark text-white">
    <?php
        if(isset($_SESSION["success"]) && isset($_SESSION["message"]))
        {
          $class = ($_SESSION["success"]==1)?"success":"ddanger";
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
    <!-- LOGIN FORM -->
      <div class="text-center" style="padding:50px 0">
        <div class="logo display-4">login</div>
        <!-- Main Form -->
        <div class="login-form-1 w-50 mx-auto">
          <form id="login-form" class="text-left" action="action/login_action.php" method="POST">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
              <div class="login-group">
                <div class="form-group">
                  <label for="lg_username" class="sr-only">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                </div>
                <div class="form-group">
                  <label for="lg_password" class="sr-only">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                </div>
                <div class="form-group login-group-checkbox mt-3">
                  <input type="radio" name="role" id="guest" value="U" requrired>
                  <label for="guest">guest</label>
                  
                  <input type="radio" name="role" id="guide" value="G" required>
                  <label for="guide">guide</label>
                </div>
              </div>
              <input type="submit" class="btn btn-outline-secondary mt-3" name="submit" value="submit">
							
            </div>
            <div class="etc-login-form mt-2">
              <p>new user? <a href="register.php">create new account</a></p>
              <p>About Us <a href="index.php">Home Page</a></p>
            </div>
          </form>
        </div>
        <!-- end:Main Form -->
      </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>