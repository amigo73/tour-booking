<?php
    include 'class/packages_class.php';
    include 'class/booking_class.php';
    include 'class/user_class.php';

    $fullname = $_SESSION["fullname"];
    
    $packages = new Packages();
    $bookings = new Bookings();
    $user = new User();
     
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Update</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/lclogo.png"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <style>
            th{
                color: grey
            }
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Update</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome, <?php echo "$fullname"; ?></a>
                        </li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      
        <!-- Content section-->
        <section class="py-5" id="package">
            <div class="container my-5">
                <h2 class="text-center mb-3">Packages</h2>
                <div class="row">
                    <?php
                       $user->displayUpdate(NULL, $_SESSION["account_id"]); 
                    ?>
                </div>
            </div>
        </section>
      
        <!-- Footer-->
        <footer class="py-5 bg-dark text-center text-white">
            <div class="container">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <p>OUR SNS</p>
              </div>
             
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
