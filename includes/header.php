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
            
            <!-- Admission Dropdown -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/About.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false">About</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              
                <li><a href="supportstaff.php" class="dropdown-item">support staff</a></li>
              </ul>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/About.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false">About</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              
              <li class="has-dropright">
                      <a href="#" id="degree"><i class="fas fa-graduation-cap"></i>Support Staff</a>
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
                        <li><a href="professional.php" id="professional"><i class="fas fa-chalkboard-teacher"></i> PROFESSIONAL/ SHORT COURSE</a></li>                        
                        <li><a href="associate.php" id="associate"><i class="fas fa-user-graduate"></i> ASSOCIATE</a></li>                          
                        <li><a href="master_degree.php" id="masters-degree"><i class="fas fa-university"></i> MASTER'S DEGREE</a></li>                         
                        <li><a href="bachelor.php" id="bachelor"><i class="fas fa-user-graduate"></i> BACHELOR</a></li>                        
                        <li><a href="doctoral.php" id="doctoral"><i class="fas fa-award"></i> DOCTORAL</a></li>
                      </ul>
                  </li>
                  
                  
                  <li class="has-dropright">
                      <a href="faculty.php" id="faculties"><i class="fas fa-building"></i> FACULTIES</a>
                      <ul class="drop-right">
                          <li><a href="cse.php" id="faculty-science-it"><i class="fas fa-flask"></i> FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY</a></li>
                          
                          <li><a href="Business.php" id="faculty-business-tourism"><i class="fas fa-briefcase"></i> FACULTY OF BUSINESS AND TOURISM</a></li>
                     
                          <li><a href="law.php" id="faculty-law-economics"><i class="fas fa-balance-scale"></i> FACULTY OF LAW AND ECONOMICS</a></li>
                        
                          <li><a href="education.php" id="faculty-education"><i class="fas fa-book"></i> FACULTY OF EDUCATION SCIENCE</a></li>
                         
                          <li><a href="#" id="faculty-news-views"><i class="fas fa-newspaper"></i> FACULTY OF NEWS AND VIEWS</a></li>
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
                <li><a href="news.php#v-pills-2" class="dropdown-item">EVENTS</a></li>
                <li><a href="news.php#v-pills-3" class="dropdown-item">SCHOLARSHIPS</a></li>
                <li><a href="news.php#v-pills-4" class="dropdown-item">Announcements</a></li>
               
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
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false">Admission</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                <li><a href="loan.php" class="dropdown-item">Student Laon</a></li>
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
<!-- <style>
  .dropdown-menu a {
  padding: 10px;
  display: block;
  white-space: nowrap;
}
.dropdown:hover .dropdown-menu {
  display: block;
}
.drop-right {
  display: none;
  position: absolute;
  left: 100%;
  top: 0;
  background-color: white;
  min-width: 150px;
  box-shadow: 2px 2px 8px rgba(138, 255, 164, 0.2);
  z-index: 1;
}
.drop-right li {
  display: block;
}
.drop-right li a {
  padding: 10px;
  display: block;
}
.drop-right li a:hover {
  background-color: rgba(0, 0, 0, 0.1);
}
.has-dropright:hover .drop-right {
  display: block;
}
</style> -->
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