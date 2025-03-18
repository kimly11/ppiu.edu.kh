<?php 
    session_start();
    define("APPURL", "http://localhost/ppiu.edu.kh");
    define("IMAGEPRODUCTS", "http://localhost/ppiu.edu.kh/admin-panel/products-admins/images");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PPIU</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <!-- CSS Links -->
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo APPURL; ?>/css/style.css">
    
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
      <img class="image-logo" src="images/logo.png" alt="" style="width: 112px; height: 98px;">
        <a class="navbar-brand" href="<?php echo APPURL; ?>">Phnompenh<small>international university</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="<?php echo APPURL; ?>" class="nav-link">Home</a></li>
            
            <!-- Admission Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/About.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false">About</a>
            </li>

            <!-- Academic Dropdown -->
            <li class="nav-item dropdown">
              <a href="<?php echo APPURL;?>/academic.php" class="nav-link" id="navbarDropdownMenuLink" role="button" aria-expanded="false">Academic</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <!-- DEGREE Dropdown -->
                <li class="dropdown-submenu">
                  <a href="#" class="dropdown-item dropdown-toggle">DEGREE</a>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">PROFESSIONAL/SHORT COURSE</a></li>
                    <li><a href="#" class="dropdown-item">ASSOCIATE</a></li>
                    <li><a href="#" class="dropdown-item">MASTER'S DEGREE</a></li>
                  </ul>
                </li>

                <!-- FACULTIES Dropdown -->
                <li class="dropdown-submenu">
                  <a href="faculties.php" class="dropdown-item dropdown-toggle">FACULTIES</a>
                  <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">FACULTY OF SCIENCE AND TECHNOLOGY</a></li>
                    <li><a href="#" class="dropdown-item">FACULTY OF BUSINESS AND TOURISM</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <!-- Alumni -->
            <li class="nav-item"><a href="<?php echo APPURL;?>/alumni.php" class="nav-link">Alumni</a></li>

            <!-- News Dropdown -->
            <li class="nav-item dropdown">
              <a href="<?php echo APPURL;?>/news.php" class="nav-link" id="navbarDropdownMenuLink" role="button" aria-expanded="false">News</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a href="#" class="dropdown-item">EVENTS</a></li>
                <li><a href="#" class="dropdown-item">SCHOLARSHIPS</a></li>
                <li><a href="#" class="dropdown-item">Announcements</a></li>
                <li><a href="#" class="dropdown-item">Student Loan</a></li>
              </ul>
            </li>

            <!-- Library -->
            <li class="nav-item dropdown">
              <a href="<?php echo APPURL;?>/services.php" class="nav-link" id="navbarDropdownMenuLink" role="button" aria-expanded="false">Library</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a href="#" class="dropdown-item">PPIU Reading Club</a></li>
                <li><a href="#" class="dropdown-item">LIBRARY MATERIALS</a></li>
                <li><a href="#" class="dropdown-item">ABOUT LIBRARY</a></li>
              </ul>
            </li>

            <!-- Admission Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/admission.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false">Admission</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a href="#" class="dropdown-item">ASSOCIATE</a></li>
                <li><a href="#" class="dropdown-item">MASTER</a></li>
                <li><a href="#" class="dropdown-item">BACHELOR</a></li>
                <li><a href="#" class="dropdown-item">DOCTORAL</a></li>
              </ul>
            </li>


            <!-- Contact -->
            <li class="nav-item"><a href="<?php echo APPURL;?>/contact.php" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
</body>
    <!-- JavaScript for Dropdown Menu Behavior -->
    <script>
      document.querySelectorAll('.dropdown-submenu a.dropdown-toggle').forEach(function(element) {
        element.addEventListener('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          var submenu = this.nextElementSibling;
          submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        });
      });
    </script>
