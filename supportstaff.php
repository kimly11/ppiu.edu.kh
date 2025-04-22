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
        margin-right: 2px;
      }
      
      /* Right position (default) */
      .lang-switcher-right {
        margin-left: 1px;
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
          width: 50%;
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
          <ul class="navbar-nav ml-auto" style="width: 770px; height: 50px;">
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
                        <li><a href="master_degree.php" id="masters-degree"><i class="fas fa-university"></i> <?php echo ($current_lang == 'kh') ? 'មាស្តរបត្រ' : 'MASTER\'S DEGREE'; ?></a></li>                         
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
              <a href="?lang=kh" class="lang-btn" style="width: 116px;"><i class="fas fa-language"></i>ភាសាខ្មែរ</a>
            <?php else: ?>
              <a href="?lang=en" class="lang-btn" style="width: 116px;"><i class="fas fa-language"></i>English</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
    <!-- END nav -->
     <style>
        .drop-right {
    display: none;
    position: absolute;
    left: 78%;
    top: 0;
    background-color: rgba(0, 0, 0, 0.2);
    min-width: 150px;
    box-shadow: 2px 2px 8px rgba(138, 255, 164, 0.2);
    z-index: 1;
}
     </style>
</body>

<link rel='stylesheet' id='contact-form-7-css' href='https://cam-ed.edu.kh/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='gdlr-core-google-font-css' href='https://fonts.googleapis.com/css?family=Maven+Pro%3Aregular%2C500%2C700%2C900&#038;subset=vietnamese%2Clatin-ext%2Clatin&#038;ver=6.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='https://cam-ed.edu.kh/wp-content/plugins/goodlayers-core/plugins/fontawesome/font-awesome.css?ver=6.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='elegant-font-css' href='https://cam-ed.edu.kh/wp-content/plugins/goodlayers-core/plugins/elegant/elegant-font.css?ver=6.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='gdlr-core-plugin-css' href='https://cam-ed.edu.kh/wp-content/plugins/goodlayers-core/plugins/style.css?ver=6.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='gdlr-core-page-builder-css' href='https://cam-ed.edu.kh/wp-content/plugins/goodlayers-core/include/css/page-builder.css?ver=6.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='widgetopts-styles-css' href='https://cam-ed.edu.kh/wp-content/plugins/widget-options/assets/css/widget-options.css?ver=4.0.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='tablepress-default-css' href='https://cam-ed.edu.kh/wp-content/tablepress-combined.min.css?ver=7' type='text/css' media='all' />
<link rel='stylesheet' id='kingster-style-core-css' href='https://cam-ed.edu.kh/wp-content/themes/kingster/css/style-core.css?v=168&#038;ver=6.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='kingster-custom-style-css' href='https://cam-ed.edu.kh/wp-content/uploads/kingster-style-custom.css?1742965093&#038;ver=6.7.2' type='text/css' media='all' />
<script type="text/javascript" src="https://cam-ed.edu.kh/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://cam-ed.edu.kh/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="https://cam-ed.edu.kh/wp-content/themes/kingster/js/html5.js?ver=6.7.2" id="kingster-html5js-js"></script>

<body class="page-template-default page page-id-6514 gdlr-core-body tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url(images/staff.jpeg) ;" >
        <div class="kingster-header-transparent-substitute" ></div>
        <div class="kingster-page-title-overlay"  ></div>
        <div class="kingster-page-title-bottom-gradient" ></div>
        <div class="kingster-page-title-container kingster-container" >
            <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 450px ;padding-bottom: 60px ;"  >
                <h1 class="kingster-page-title" style="font-size: 48px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;"  >Support Staff</h1>
            </div></div></div>	<div class="kingster-page-wrapper" id="kingster-page-wrapper" >
                <div class="gdlr-core-page-builder-body"><div class="gdlr-core-pbf-section" >
                    <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix" >
                        <div class="gdlr-core-pbf-element" >
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"  >
                                <div class="gdlr-core-title-item-title-wrap clearfix" >
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;"  >Office of the President</h3>
                                </div>
                                <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"  >
                                    <style>.gdlr-core-personnel-list-title{color:#76323f !important; text-transform: capitalize !important;}</style>
                                </span>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element" >
                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"  >
                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #4a0000 ;border-width: 5px;" >

                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element" >
                            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid"  >
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" >
                                    <div class="gdlr-core-personnel-list clearfix" >
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" >
                                            <img  src="images/presi.jpg" width="1240" height="797"   sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"  alt="" />
                        </div>
                        <div class="gdlr-core-personnel-list-content-wrap"  >
                            <h3 class="gdlr-core-personnel-list-title"  >HIM SAM ATH</h3>
                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >President</div>
                            <div class="gdlr-core-personnel-list-content" >
                                <p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=president@cam-ed.com " target="_blank">
                                    <span class="__cf_email__" data-cfemail="cebebcabbda7aaaba0ba8eadafa3e3abaae0ada1a3">[email&#160;protected]</span>
                                </a><br />ext:110</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-element" >
            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"  >
                <div class="gdlr-core-title-item-title-wrap clearfix" >
                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;"  >OFFICE OF THE SENIOR VICE PRESIDENT</h3>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-element" >
            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"  >
                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #4a0000 ;border-width: 5px;" >
                    
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-element" >
            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid"  >
                <div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" >
                    <div class="gdlr-core-personnel-list clearfix" >
                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" >
                            <img src="images/senir.jpg" alt="" width="478" height="325" title="31" />
                        </div><div class="gdlr-core-personnel-list-content-wrap"  >
                            <h3 class="gdlr-core-personnel-list-title"  >Hong Phearin</h3>
                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior Vice President</div>
                            <div class="gdlr-core-personnel-list-content" >
                                <p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=management@cam-ed.com " target="_blank">
                                    <span class="__cf_email__" data-cfemail="462b27282721232b2328320625272b6b23226825292b">[email&#160;protected]</span></a><br />ext:109</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="gdlr-core-pbf-element" >
                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"  >
                    <div class="gdlr-core-title-item-title-wrap clearfix" >
                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;"  >IT Department</h3>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element" >
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"  >
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #4a0000 ;border-width: 5px;" >
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element" >
                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid"  >
                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" >
                                <div class="gdlr-core-personnel-list clearfix" >
                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" >
                                        <img src="images/senir1.jpg" alt="" width="478" height="325" title="Oeung Phengly" />
                                    </div>
                                    <div class="gdlr-core-personnel-list-content-wrap"  >
                                        <h3 class="gdlr-core-personnel-list-title"  >Oeung Phengly</h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior IT Manager</div>
                                        <div class="gdlr-core-personnel-list-content" >
                                            <p>
                                                <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=ephengly@cam-ed.com " target="_blank">
                                                    <span class="__cf_email__" data-cfemail="5a3f2a323f343d36231a393b37773f3e74393537">[email&#160;protected]</span>
                                                </a><br />ext:301
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" >
                                    <div class="gdlr-core-personnel-list clearfix" >
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" >
                                            <img src="images/senir2.jpg" alt="" width="478" height="325" title="Mell_Radipaul" />
                                        </div>
                                        <div class="gdlr-core-personnel-list-content-wrap"  >
                                            <h3 class="gdlr-core-personnel-list-title"  >TAN SEREYVUTH</h3>
                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >IT Assistant Manager</div>
                                            <div class="gdlr-core-personnel-list-content" >
                                                <p>
                                                    <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=mradipaul@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="84e9f6e5e0edf4e5f1e8c4e7e5e9a9e1e0aae7ebe9">[email&#160;protected]</span></a><br />ext:301
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" >
                                    <div class="gdlr-core-personnel-list clearfix" >
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" >
                                            <img src="images/senir3.jpg" alt="" width="478" height="325" title="Bunchom_Ratanak" />
                                        </div>
                                        <div class="gdlr-core-personnel-list-content-wrap"  >
                                            <h3 class="gdlr-core-personnel-list-title"  >CHEAM SITHY</h3>
                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Registrar Assistant Manager</div>
                                            <div class="gdlr-core-personnel-list-content" >
                                                <p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=bratanak@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="d9bbabb8adb8b7b8b299bab8b4f4bcbdf7bab6b4">[email&#160;protected]</span></a><br />ext:302
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" >
                                <div class="gdlr-core-personnel-list clearfix" >
                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" >
                                        <img src="images/senir4.jpg" alt="" width="478" height="325" title="Sorn Borin" />
                                    </div>
                                    <div class="gdlr-core-personnel-list-content-wrap"  >
                                        <h3 class="gdlr-core-personnel-list-title"  >HOEM TOLA</h3>
                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Programmer Supervisor</div>
                                        <div class="gdlr-core-personnel-list-content" >
                                            <p>
                                                <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=sborin@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="2c5f4e435e45426c4f4d41014948024f4341">[email&#160;protected]</span></a><br />ext:301</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" >
                                    <div class="gdlr-core-personnel-list clearfix" >
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" >
                                            <img src="images/senir5.jpg" alt="" width="478" height="325" title="Nov_Solin_v2" />
                                        </div>
                                        <div class="gdlr-core-personnel-list-content-wrap"  >
                                            <h3 class="gdlr-core-personnel-list-title"  >Nov Solin</h3>
                                            <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >IT Technician Supervisor</div>
                                            <div class="gdlr-core-personnel-list-content" >
                                                <p>
                                                    <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=nsolin@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="c2acb1adaeabac82a1a3afefa7a6eca1adaf">[email&#160;protected]</span></a><br />ext:301
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" >
                                    <div class="gdlr-core-personnel-list clearfix" >
                                        <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" >
                                            <img src="images/senir6.jpg" alt="" width="478" height="325" title="pheara" />
                                    </div>
                                    <div class="gdlr-core-personnel-list-content-wrap"  >
                                        <h3 class="gdlr-core-personnel-list-title"  >Phon Pheara</h3>
                                    <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  > Programmer Assistant Supervisor </div>
                                    <div class="gdlr-core-personnel-list-content" >
                                        <p>
                                            <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=ppheara@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="a3d3d3cbc6c2d1c2e3c0c2ce8ec6c78dc0ccce">[email&#160;protected]</span></a><br />ext:301
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<style>
    .kingster-body a {
    color: #fff;
}
</style>
</body>

<footer class="ftco-footer ftco-section img" style="
    width: 2000px;
    height: 794px;
    margin-left: -300px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <!-- About Us Section -->
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p>The University was renamed as the "Phnom Penh International University - PPIU" In 2006, the Sub-Decree No. 111. Dated October 24, 2006 of the government and under the supervision of the Ministry of Education, Youth and Sports.</p>
                    <ul class="ftco-footer-social list-unstyled mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <!-- Recent Blog Section -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Blog</h2>

                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image1.png);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 20125</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 20</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image2.png);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates!</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> March 15, 2025</a></div>
                                <div><a href="#"><span class="icon-person"></span> casheer</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 20</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="col-lg-2 col-md-6 mb-5">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">provicer</a></li>
                        <li><a href="#" class="py-2 d-block">payment</a></li>
                        <li><a href="#" class="py-2 d-block">casheer</a></li>
                        <li><a href="#" class="py-2 d-block">IT support</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span>169 in Ppiu university, Czech Republic Blvd (169, Phnom Penh, Cambodia)</li>
                            <li><a href="#"><span class="icon icon-phone"></span>+855 78 985 163<br>+855 93 506 114<br>+855 71 260 6399</a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span> info@ppiu.edu.kh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script> 
                    All rights reserved | This template is made with 
                    <i class="icon-heart" aria-hidden="true"></i> by 
                    <a href="https://www.ppiu.edu.kh/" target="_blank">PPIU</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>
<!-- Scripts -->
<script src="<?php echo APPURL; ?>/js/jquery.min.js"></script>
<script src="<?php echo APPURL; ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo APPURL; ?>/js/popper.min.js"></script>
<script src="<?php echo APPURL; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo APPURL; ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo APPURL; ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo APPURL; ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo APPURL; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo APPURL; ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo APPURL; ?>/js/aos.js"></script>
<script src="<?php echo APPURL; ?>/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo APPURL; ?>/js/bootstrap-datepicker.js"></script>
<script src="<?php echo APPURL; ?>/js/jquery.timepicker.min.js"></script>
<script src="<?php echo APPURL; ?>/js/scrollax.min.js"></script>

<!-- Google Maps API -->
<script src="<?php echo APPURL; ?>/js/google-map.js"></script>
<script src="<?php echo APPURL; ?>/js/main.js"></script>
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

</html>