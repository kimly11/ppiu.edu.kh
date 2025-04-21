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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


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
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/About.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false">About</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">              
              <li class="has-dropright">
                      <a href="supportstaff.php" id="degree"><i class="fas fa-graduation-cap"></i>Support Staff</a>
                      <ul class="drop-right">
                      </ul>
                  </li>
              </ul>
            </li>
          
            <!-- Academic Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false"  >Academics</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="has-dropright">
                  <a href="#" id="degree"><i class="fas fa-graduation-cap"></i> DEGREE</a>
                    <ul class="drop-right">
                        <li><a href="degree.php" id="professional"><i class="fas fa-chalkboard-teacher"></i> PROFESSIONAL/ SHORT COURSE</a></li>                        
                        <li><a href="associate.php" id="associate"><i class="fas fa-user-graduate"></i> ASSOCIATE</a></li>                          
                        <li><a href="master_degree.php" id="masters-degree"><i class="fas fa-university"></i> MASTER'S DEGREE</a></li>                         
                        <li><a href="bachelor.php" id="bachelor"><i class="fas fa-user-graduate"></i> BACHELOR</a></li>                        
                        <li><a href="doctoral.php" id="doctoral"><i class="fas fa-award"></i> DOCTORAL</a></li>
                      </ul>
                  </li>
                  
                  
                  <li class="has-dropright">
                      <a href="faculties.php" id="faculties"><i class="fas fa-building"></i> FACULTIES</a>
                      <ul class="drop-right">
                          <li><a href="technology.php" id="faculty-science-it"><i class="fas fa-flask"></i> FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY</a></li>
                          
                          <li><a href="Business.php" id="faculty-business-tourism"><i class="fas fa-briefcase"></i> FACULTY OF BUSINESS AND TOURISM</a></li>
                     
                          <!-- <li><a href="law.php" id="faculty-law-economics"><i class="fas fa-balance-scale"></i> FACULTY OF LAW AND ECONOMICS</a></li>
                        
                          <li><a href="education.php" id="faculty-education"><i class="fas fa-book"></i> FACULTY OF EDUCATION SCIENCE</a></li>
                         
                          <li><a href="#" id="faculty-news-views"><i class="fas fa-newspaper"></i> FACULTY OF NEWS AND VIEWS</a></li> -->
                      </ul>
                  </li>
              </ul>
            </li>

            <!-- Alumni -->
            <!-- <li class="nav-item"><a href="<?php echo APPURL;?>/alumni.php" class="nav-link">Alumni</a></li> -->

            <!-- News Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/news.php"  id="navbarDropdownMenuLink" role="button" aria-expanded="false">News</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="has-dropright">
                  <a href="<?php echo APPURL;?>/event.php"><i class="fas fa-graduation-cap"></i>EVENTS</a>
                </li>
                <!-- <li><a href="news.php#v-pills-2" class="dropdown-item">EVENTS</a></li>
                <li><a href="news.php#v-pills-3" class="dropdown-item">SCHOLARSHIPS</a></li>
                <li><a href="news.php#v-pills-4" class="dropdown-item">Announcements</a></li>
                -->
              </ul>
            </li>

            <!-- Library -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="library.php"  id="navbarDropdownMenuLink" role="button" aria-expanded="false">Library</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="has-dropright">
                  <a href="reading.php"><i class=""></i> PPIU Reading Club</a>
                  <!-- <a href="#"><i class=""></i> LIBRARY MATERIALS</a> -->
                  <a href="library.php"><i class=""></i> ABOUT LIBRARY</a>
                </li>
              </ul>
            </li>

            <!-- Admission Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">Admission</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                <li class="has-dropright">
                  <a href="loan.php"><i class="drop-down"></i> Student Laon</a>
                </li>
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
    <!-- <script>
      document.querySelectorAll('.dropdown-submenu a.dropdown-toggle').forEach(function(element) {
        element.addEventListener('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          var submenu = this.nextElementSibling;
          submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        });
      });
    </script> -->