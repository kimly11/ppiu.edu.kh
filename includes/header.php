<?php 
    session_start();
    define("APPURL", "http://localhost/ppiu.edu.kh");
    define("IMAGEPRODUCTS", "http://localhost/ppiu.edu.kh/admin-panel/products-admins/images");
    
    // Language switching logic
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'en'; // Default language
    }
    if (isset($_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang'];
    }
    $current_lang = $_SESSION['lang'];
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">
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

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    
    <style>
      body {
        font-family: 'Noto Sans Khmer', Arial, sans-serif;
      }
      
      /* Language switcher styles */
      .lang-switcher-container {
        display: flex;
        align-items: center;
      }
      
      /* Left position */
      .lang-switcher-left {
        margin-right: 20px;
      }
      
      /* Right position (default) */
      .lang-switcher-right {
        margin-left: 20px;
      }
      
      .lang-btn {
        background: #f8b739;
        color: #000;
        border: none;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 500;
      }
      
      .lang-btn:hover {
        background: #e6a532;
        color: #fff;
        transform: translateY(-2px);
      }
      
      .lang-btn i {
        font-size: 16px;
      }
      
      /* Mobile responsive adjustments */
      @media (max-width: 991px) {
        .lang-switcher-container {
          padding: 10px 15px;
        }
        .lang-btn {
          width: 100%;
          justify-content: center;
        }
      }
    </style>
  </head>
  <body>
       <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <!-- Language switcher on LEFT side -->
        <div class="lang-switcher-container lang-switcher-left d-lg-none d-xl-none">
          <?php if ($current_lang == 'en'): ?>
            <a href="?lang=kh" class="lang-btn"><i class="fas fa-language"></i>ភាសាខ្មែរ</a>
          <?php else: ?>
            <a href="?lang=en" class="lang-btn"><i class="fas fa-language"></i>English</a>
          <?php endif; ?>
        </div>
        
        <img class="image-logo" src="images/logo.png" alt="" style="width: 112px; height: 98px;">
        <a class="navbar-brand" href="<?php echo APPURL; ?>">
            <?php echo ($current_lang == 'kh') ? 'សាកលវិទ្យាល័យ<small>ភ្នំពេញអន្តរជាតិ</small>' : 'Phnompenh<small>international university</small>'; ?>
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> <?php echo ($current_lang == 'kh') ? 'ម៉ឺនុយ' : 'Menu'; ?>
        </button>
        
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="<?php echo APPURL; ?>" class="nav-link"><?php echo ($current_lang == 'kh') ? 'ទំព័រដើម' : 'Home'; ?></a></li>            
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/About.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false"><?php echo ($current_lang == 'kh') ? 'អំពី' : 'About'; ?></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">              
              <li class="has-dropright">
                      <a href="supportstaff.php" id="degree"><i class="fas fa-graduation-cap"></i><?php echo ($current_lang == 'kh') ? 'បុគ្គលិកគាំទ្រ' : 'Support Staff'; ?></a>
                      <ul class="drop-right">
                      </ul>
                  </li>
              </ul>
            </li>
          
            <!-- Academic Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false"><?php echo ($current_lang == 'kh') ? 'អក្សរសាស្ត្រ' : 'Academics'; ?></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="has-dropright">
                  <a href="#" id="degree"><i class="fas fa-graduation-cap"></i> <?php echo ($current_lang == 'kh') ? 'សញ្ញាបត្រ' : 'DEGREE'; ?></a>
                    <ul class="drop-right">
                        <li><a href="degree.php" id="professional"><i class="fas fa-chalkboard-teacher"></i> <?php echo ($current_lang == 'kh') ? 'វគ្គខ្លី/វិជ្ជាជីវៈ' : 'PROFESSIONAL/SHORT COURSE'; ?></a></li>                        
                        <li><a href="associate.php" id="associate"><i class="fas fa-user-graduate"></i> <?php echo ($current_lang == 'kh') ? 'សញ្ញាបត្ររង' : 'ASSOCIATE'; ?></a></li>                          
                        <li><a href="#" id="masters-degree"><i class="fas fa-university"></i> <?php echo ($current_lang == 'kh') ? 'មាស្តរបត្រ' : 'MASTER\'S DEGREE'; ?></a></li>                         
                        <li><a href="bachelor.php" id="bachelor"><i class="fas fa-user-graduate"></i> <?php echo ($current_lang == 'kh') ? 'បរិញ្ញាបត្រ' : 'BACHELOR'; ?></a></li>                        
                        <li><a href="doctoral.php" id="doctoral"><i class="fas fa-award"></i> <?php echo ($current_lang == 'kh') ? 'បណ្ឌិត' : 'DOCTORAL'; ?></a></li>
                      </ul>
                  </li>
                  
                  <li class="has-dropright">
                      <a href="#" id="faculties"><i class="fas fa-building"></i> <?php echo ($current_lang == 'kh') ? 'មហាវិទ្យាល័យ' : 'FACULTIES'; ?></a>
                      <ul class="drop-right">
                          <li><a href="technology.php" id="faculty-science-it"><i class="fas fa-flask"></i> <?php echo ($current_lang == 'kh') ? 'មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងព័ត៌មានវិទ្យា' : 'FACULTY OF SCIENCE AND INFORMATION TECHNOLOGY'; ?></a></li>
                          
                          <li><a href="#" id="faculty-business-tourism"><i class="fas fa-briefcase"></i> <?php echo ($current_lang == 'kh') ? 'មហាវិទ្យាល័យពាណិជ្ជកម្ម និងទេសចរណ៍' : 'FACULTY OF BUSINESS AND TOURISM'; ?></a></li>
                      </ul>
                  </li>
              </ul>
            </li>

            <!-- News Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/news.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false"><?php echo ($current_lang == 'kh') ? 'ព័ត៌មាន' : 'News'; ?></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="has-dropright">
                  <a href="<?php echo APPURL;?>/event.php"><i class="fas fa-graduation-cap"></i><?php echo ($current_lang == 'kh') ? 'ព្រឹត្តិការណ៍' : 'EVENTS'; ?></a>
                </li>
              </ul>
            </li>

            <!-- Library -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="library.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false"><?php echo ($current_lang == 'kh') ? 'បណ្ណាល័យ' : 'Library'; ?></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="has-dropright">
                  <a href="reading.php"><i class=""></i> <?php echo ($current_lang == 'kh') ? 'ក្លឹបអានសៀវភៅ PPIU' : 'PPIU Reading Club'; ?></a>
                  <a href="library.php"><i class=""></i> <?php echo ($current_lang == 'kh') ? 'អំពីបណ្ណាល័យ' : 'ABOUT LIBRARY'; ?></a>
                </li>
              </ul>
            </li>

            <!-- Admission Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" aria-expanded="false"><?php echo ($current_lang == 'kh') ? 'ការចូលរៀន' : 'Admission'; ?></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="has-dropright">
                  <a href="loan.php"><i class="drop-down"></i> <?php echo ($current_lang == 'kh') ? 'ឥណទានសិស្ស' : 'Student Loan'; ?></a>
                </li>
              </ul>
            </li>

            <!-- Contact -->
            <li class="nav-item"><a href="<?php echo APPURL;?>/contact.php" class="nav-link"><?php echo ($current_lang == 'kh') ? 'ទំនាក់ទំនង' : 'Contact'; ?></a></li>
          </ul>
          
          <!-- Language switcher on RIGHT side (visible on desktop) -->
          <div class="lang-switcher-container lang-switcher-right d-none d-lg-block">
            <?php if ($current_lang == 'en'): ?>
              <a href="?lang=kh" class="lang-btn"><i class="fas fa-language"></i>ភាសាខ្មែរ</a>
            <?php else: ?>
              <a href="?lang=en" class="lang-btn"><i class="fas fa-language"></i>English</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
    <!-- END nav -->
</body>