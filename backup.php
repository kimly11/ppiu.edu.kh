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
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              
                <li><a href="supportstaff.php" class="dropdown-item">support staff</a></li>
              </ul>
            </li>
          
            <!-- Academic Dropdown -->
            <li class="nav-item dropdown">
              <a href="<?php echo APPURL;?>/academic.php" class="nav-link" id="navbarDropdownMenuLink" role="button" aria-expanded="false">Academic</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <!-- DEGREE Dropdown -->
                <li class="dropdown-submenu">
                  <a href="#" class="dropdown-item dropdown-toggle">DEGREE</a>
                  <ul class="dropdown-menu">
                    <li><a href="degree.php" class="dropdown-item">PROFESSIONAL/SHORT COURSE</a></li>
                    <li><a href="#" class="dropdown-item">ASSOCIATE</a></li>
                    <li><a href="#" class="dropdown-item">MASTER'S DEGREE</a></li>
                    <li><a href="bachelor.php" class="dropdown-item">BACHELOR</a></li>
                    <li><a href="doctoral.php" class="dropdown-item">DOCTORAL</a></li>

                  </ul>
                </li>

                <!-- FACULTIES Dropdown -->
                <li class="dropdown-submenu">
                  <a href="faculties.php" class="dropdown-item dropdown-toggle">FACULTIES</a>
                  <ul class="dropdown-menu">
                    <li><a href="technology.php" class="dropdown-item">FACULTY OF SCIENCE AND TECHNOLOGY</a></li>
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