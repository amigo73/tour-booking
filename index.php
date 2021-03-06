<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Your Travel</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/lclogo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700|EB+Garamond" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Fontawesome -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Minimal
    Template URL: https://templatemag.com/minimal-bootstrap-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="0" data-target="#theMenu">

  <!-- Menu -->
  <nav class="menu" id="theMenu">
    <div class="menu-wrap">
      <h1 class="logo"><a href="#top">TOP</a></h1>
      <i class="fa fa-times-circle menu-close"></i>
      <a href="#home" class="smoothscroll">Home</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="#about" class="smoothscroll">About</a>
      <a href="#contact" class="smoothscroll">Contact</a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-facebook-square"></i></a>
      <a href="#"><i class="fab fa-twitter-square"></i></a>
    </div>

    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
  </nav>

  <!-- ========== HEADER SECTION ========== -->
  <section id="home" name="home"></section>
  <div id="headerwrap">
    <div class="container">
      <div class="logo">
        <!-- <img src="img/lclogo.png" class=""> -->
      </div>
      <br>
      <div class="row">
        <h1>CREATE YOUR OWN TRAVEL</h1>
        <br>
        <h3>Hello, Make your amazing journey.</h3>
        <br>
        <br>
        <div class="col-lg-6 col-lg-offset-3">
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->

  <!-- ========== CAROUSEL SECTION ========== -->
  <section id="photos" name="photos"></section>
  <div id="f">
    <div class="container">
      <div class="row centered">
        <h3>PHOTOS</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <div class="col-lg-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active centered">
                <img class="img-responsive" src="img/Bantayan.jpeg" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="img/Ayala.jpeg" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="img/Tops.jpeg" alt="">
              </div>
            </div>
            <br>
            <br>
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
        <!-- col-lg-8 -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- f -->
  

  <!-- ========== LOGIN REGISTER SECTION ========== -->
  <section id="login" name="login"></section>
  <div id="f">
    <div class="container">
      <div class="row">
        <h3><a href="login.php">LOGIN</a></h3>
  <section id="register" name="register"></section>
        <h3><a href="register.php">REGISTER</a></h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
      </div>

  
  <!-- ========== ABOUT SECTION ========== -->

      <section id="about" name="about"></section>
      <div id="f">
        <div class="container">
          <div class="row">
            <h3>ABOUT US</h3>
            <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
    
            <!-- INTRO INFORMATIO-->
            <div class="col-lg-6 col-lg-offset-3">
              <p>We can connect with Guest and Local Tour Guide.</p>
              <p>You can create your own travel, itinerary and the local tour guide can take you anywhere you want to go.</p>
              <p>The local tour guide will take you to different places  where onle local people know.</p>
              <p>Make your amazing journey. Please contact us now.</p>
              <p><button type="button" class="btn btn-warning"><a href="#contact">CONTACT US</a></button></p>
            </div>
          </div>
        </div>
        <!-- /container -->
      </div>
      <!-- /f -->
      
 
    <!-- ========== CONTACT SECTION ========== -->
    <section id="contact" name="contact"></section>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
            <p>CONTACT US</p>
            <div class="form-group">
              <label for="contact-name">Your Name</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Your Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <label for="contact-message">Your Message</label>
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send mb-5">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>  

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53810.12855092864!2d123.90437410593871!3d10.302953650279003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999258dcd2dfd%3A0x4c34030cdbd33507!2z44OV44Kj44Oq44OU44OzIOOCu-ODlg!5e0!3m2!1sja!2sjp!4v1635414472707!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="mt-5"></iframe>

  <div id="copyrights">
    <div class="container">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-facebook-square"></i></a>
      <a href="#"><i class="fab fa-twitter-square"></i></a>
      <p>OUR SNS</p>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
