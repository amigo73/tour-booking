<?php
	include 'class/user_class.php';
	
	$fullname = $_SESSION["fullname"];
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<style>
			p{
				border: solid; 
				border-radius: 8px;
				font-size: 20px;
			}
			label{
				font-size: 30px;
			}
		</style>

  </head>
  <body class="container bg-dark text-white">
    <!-- BOOKING FORM -->
		<div class="text-center" style="padding:50px 0">
			<div class="logo display-5 mb-3">booking</div>
			<!-- Main Form -->
			<div class="login-form-1">
				<form id="booking-form" class="text-left w-50 mx-auto" action="calendar.php" method="POST"> 
						<div class="booking-form-main-message"></div>
						<div class="main-book-form">
							<div class="book-group">
									<div class="form-group">
										<label for="reg_fullname" class="sr-only">Full Name</label>
										<p><?php echo "$fullname";?></p>	
									</div>
									<div class="form-group">
										<label for="discription" class="sr-only">Discription</label>
										<p><?php echo "$discription";?></p>	
									</div>
									<div class="form-group">
										<label for="price" class="sr-only">Price</label>
										<p><?php echo "$price";?></p>	
									</div>
                  <div class="form-group">
										<label for="reg_date" class="sr-only">Date</label>
										<input type="date" class="form-control" id="date" name="date" placeholder="date" required>
									</div>
							</div>

							<input type="submit" class="btn btn-outline-secondary mt-3" name="booking" value="book">
													
						</div>

				</form>
				<!-- end:Main Form -->
			</div>
		</div>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>