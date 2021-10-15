<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  </head>
  <body class="container bg-dark text-white">
		<?php
			if(isset($_SESSION["success"]) && isset($_SESSION["message"]))
			{
				//input
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
    <!-- REGISTRATION FORM -->
		<div class="text-center" style="padding:50px 0">
			<div class="logo display-5 mb-3">register</div>
			<!-- Main Form -->
			<div class="login-form-1">
				<form id="register-form" class="text-left w-50 mx-auto" action="action/register_action.php" method="POST"> 
						<div class="login-form-main-message"></div>
						<div class="main-login-form">
							<div class="login-group">
									<div class="form-group">
										<label for="reg_username" class="sr-only">Username</label>
										<input type="text" class="form-control" id="username" name="username" placeholder="username" required>
									</div>
									<div class="form-group">
										<label for="reg_password" class="sr-only">Password</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="password" required>
									</div>
									<div class="form-group">
										<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
										<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="confirm password" required>
									</div>
									<div class="form-group">
										<label for="reg_fullname" class="sr-only">Full Name</label>
										<input type="text" class="form-control" id="fullname" name="fullname" placeholder="full name" required>
									</div>
									<div class="form-group">
										<label for="reg_email" class="sr-only">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="email" required>
									</div>
									<div class="form-group">
										<label for="reg_contact_number" class="sr-only">Contact Number</label>
										<input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="contact Number" required>
									</div>
									<div class="form-group">
										<label for="reg_address" class="sr-only">Address</label>
										<input type="text" class="form-control" id="address" name="address" placeholder="address" required>
									</div>
									
									<div class="form-group login-group-checkbox mt-3">
										<input type="radio" class="" name="gender" id="male" value="M" required>
										<label for="male">male</label>
										<input type="radio" class="" name="gender" id="female" value="F" required>
										<label for="female">female</label>
									</div>
									
									<label for="role" class="mt-3">Role</label>
									<div class="form-group login-group-checkbox">
										<input type="radio" class="" name="role" id="guest" value="U" required>
										<label for="guest">guest</label>
										<input type="radio" name="role" id="guide" value="G" required>
										<label for="guide">guide</label>
									</div>

									<div class="form-group login-group-checkbox mt-3">
										<input type="checkbox" class="" id="reg_agree" name="reg_agree" required>
										<label for="reg_agree">i agree with <a href="#">terms</a></label>
									</div>
							</div>

							<input type="submit" class="btn btn-outline-secondary mt-3" name="register" value="register">
							

							
						</div>

						<div class="etc-login-form mt-2">
							<p>already have an account? <a href="login.php">login here</a></p>
							<p>About Us <a href="index.php">Home Page</a></p>
						</div>
				</form>
				<!-- end:Main Form -->
			</div>
		</div>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>