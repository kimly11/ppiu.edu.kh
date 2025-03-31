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
          <ul class="navbar-nav ml-auto" style="width: 850px; height: 55px;">
            <li class="nav-item active"><a href="<?php echo APPURL; ?>" class="nav-link">Home</a></li>
            
            <!-- Admission Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo APPURL;?>/About.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false">About</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a href="academicstaff.php" class="dropdown-item">academic staff</a></li>
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
                    <li><a href="test.php" class="dropdown-item">PROFESSIONAL/SHORT COURSE</a></li>
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
                <li><a href="#" class="dropdown-item">EVENTS</a></li>
                <li><a href="#" class="dropdown-item">SCHOLARSHIPS</a></li>
                <li><a href="announcement.php" class="dropdown-item">Announcements</a></li>
                <li><a href="loan.php" class="dropdown-item">Student Loan</a></li>
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
<! lt IE 9]>
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
                            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid"  ><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img  src="https://cam-ed.edu.kh/wp-content/uploads/2020/10/Casey-1-800x514.jpg" width="1240" height="797"  srcset="https://cam-ed.edu.kh/wp-content/uploads/2020/10/Casey-1-400x257.jpg 400w, https://cam-ed.edu.kh/wp-content/uploads/2020/10/Casey-1-600x385.jpg 600w, https://cam-ed.edu.kh/wp-content/uploads/2020/10/Casey-1-800x514.jpg 800w, https://cam-ed.edu.kh/wp-content/uploads/2020/10/Casey-1.jpg 1240w"  sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"  alt="" />
                        </div>
                        <div class="gdlr-core-personnel-list-content-wrap"  >
                            <h3 class="gdlr-core-personnel-list-title"  >Casey Barnett</h3>
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
                            <img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/31.png" alt="" width="478" height="325" title="31" />
                        </div><div class="gdlr-core-personnel-list-content-wrap"  >
                            <h3 class="gdlr-core-personnel-list-title"  >Sam Sokuntheary</h3>
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
                    </div></div></div><div class="gdlr-core-pbf-element" >
                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"  ><div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #4a0000 ;border-width: 5px;" ></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid"  ><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Oeung-Phengly.jpg" alt="" width="478" height="325" title="Oeung Phengly" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Oeung Phengly</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior IT Manager</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=ephengly@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="5a3f2a323f343d36231a393b37773f3e74393537">[email&#160;protected]</span></a><br />
ext:301</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Mell_Radipaul.jpg" alt="" width="478" height="325" title="Mell_Radipaul" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Mell Radipaul</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >IT Assistant Manager</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=mradipaul@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="84e9f6e5e0edf4e5f1e8c4e7e5e9a9e1e0aae7ebe9">[email&#160;protected]</span></a><br />
ext:301</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Bunchom_Ratanak.jpg" alt="" width="478" height="325" title="Bunchom_Ratanak" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Bunchhom Ratanak</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Registrar Assistant Manager</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=bratanak@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="d9bbabb8adb8b7b8b299bab8b4f4bcbdf7bab6b4">[email&#160;protected]</span></a><br />
ext:302</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Sorn-Borin.jpg" alt="" width="478" height="325" title="Sorn Borin" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Sorn Borin</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Programmer Supervisor</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=sborin@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="2c5f4e435e45426c4f4d41014948024f4341">[email&#160;protected]</span></a><br />
ext:301</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Nov_Solin_v2.jpg" alt="" width="478" height="325" title="Nov_Solin_v2" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Nov Solin</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >IT Technician Supervisor</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=nsolin@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="c2acb1adaeabac82a1a3afefa7a6eca1adaf">[email&#160;protected]</span></a><br />
ext:301</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/pheara.png" alt="" width="478" height="325" title="pheara" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Phon Pheara</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  > Programmer Assistant Supervisor </div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=ppheara@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="a3d3d3cbc6c2d1c2e3c0c2ce8ec6c78dc0ccce">[email&#160;protected]</span></a><br />
ext:301</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Phally_Visal.jpg" alt="" width="478" height="325" title="Phally_Visal" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Phally Visal</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior Registrar Officer</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=pvisal@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="5d2d2b342e3c311d3e3c30703839733e3230">[email&#160;protected]</span></a><br />
ext:302</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img  src="https://cam-ed.edu.kh/wp-content/uploads/2023/01/Chou-Chantha-scaled-800x533.jpg" width="2560" height="1707"  srcset="https://cam-ed.edu.kh/wp-content/uploads/2023/01/Chou-Chantha-scaled-400x266.jpg 400w, https://cam-ed.edu.kh/wp-content/uploads/2023/01/Chou-Chantha-scaled-600x400.jpg 600w, https://cam-ed.edu.kh/wp-content/uploads/2023/01/Chou-Chantha-scaled-800x533.jpg 800w, https://cam-ed.edu.kh/wp-content/uploads/2023/01/Chou-Chantha-scaled.jpg 2560w"  sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"  alt="" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Chou Chantha</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior IT Programmer</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=cchantha@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="e685858e8788928e87a685878bcb8382c885898b">[email&#160;protected]</span></a><br />
ext:301</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img  src="https://cam-ed.edu.kh/wp-content/uploads/2023/02/Sousday-Sereyrot-scaled-800x533.jpg" width="2560" height="1707"  srcset="https://cam-ed.edu.kh/wp-content/uploads/2023/02/Sousday-Sereyrot-scaled-400x266.jpg 400w, https://cam-ed.edu.kh/wp-content/uploads/2023/02/Sousday-Sereyrot-scaled-600x400.jpg 600w, https://cam-ed.edu.kh/wp-content/uploads/2023/02/Sousday-Sereyrot-scaled-800x533.jpg 800w, https://cam-ed.edu.kh/wp-content/uploads/2023/02/Sousday-Sereyrot-scaled.jpg 2560w"  sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"  alt="" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Sousday Seyreyrot</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior IT Registrar Officer</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=sseyreyrot@cam-ed.com" target="_blank"><span class="__cf_email__" data-cfemail="a6d5d5c3dfd4c3dfd4c9d2e6c5c7cb8bc3c288c5c9cb">[email&#160;protected]</span></a><br />
ext:303</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img  src="https://cam-ed.edu.kh/wp-content/uploads/2023/02/IM-Kenkethya-scaled-800x533.jpg" width="2560" height="1707"  srcset="https://cam-ed.edu.kh/wp-content/uploads/2023/02/IM-Kenkethya-scaled-400x266.jpg 400w, https://cam-ed.edu.kh/wp-content/uploads/2023/02/IM-Kenkethya-scaled-600x400.jpg 600w, https://cam-ed.edu.kh/wp-content/uploads/2023/02/IM-Kenkethya-scaled-800x533.jpg 800w, https://cam-ed.edu.kh/wp-content/uploads/2023/02/IM-Kenkethya-scaled.jpg 2560w"  sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"  alt="" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Im Kenkethya</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior IT Registrar Officer</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=Ikenkethya@cam-ed.com" target="_blank"><span class="__cf_email__" data-cfemail="7a33111f14111f0e12031b3a191b17571f1e54191517">[email&#160;protected]</span></a><br />
ext:303</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2024/09/lyminh-.png" alt="" width="478" height="325" title="lyminh" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Lim Lyminh</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >IT Assistant and Entrance Exam Officer</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=Ikenkethya@cam-ed.com" target="_blank"><span class="__cf_email__" data-cfemail="a9c5c5d0c4c0c7c1e9cac8c484cccd87cac6c4">[email&#160;protected]</span></a><br />
ext:303</p>
</div></div></div></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"  ><div class="gdlr-core-title-item-title-wrap clearfix" ><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;"  >Finance Department</h3></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"  ><div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #4a0000 ;border-width: 5px;" ></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid"  ><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Keat-Marath.jpg" alt="" width="478" height="325" title="Keat Marath" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Keat Marath</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior Vice President And CFO </div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=kmarath@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="a6cdcbc7d4c7d2cee6c5c7cb8bc3c288c5c9cb">[email&#160;protected]</span></a><br />
ext:206</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/chan-sokleakna_Photo.jpg" alt="" width="478" height="325" title="chan sokleakna_Photo" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Chan Sokleakena</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior Finance Manager</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=csokleakena@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="0e6d7d6165626b6f656b606f4e6d6f63236b6a206d6163">[email&#160;protected]</span></a><br />
ext:203</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/49.png" alt="" width="478" height="325" title="49" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Khut Sophanna</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Accounting Manager</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=ksophanna@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="9cf7eff3ecf4fdf2f2fddcfffdf1b1f9f8b2fff3f1">[email&#160;protected]</span></a><br />
ext:203</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Bou_Chansonita.jpg" alt="" width="478" height="325" title="Bou_Chansonita" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Bou Chansonita</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Receivable Supervisor</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=bchansonita@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="3250515a535c415d5c5b46537251535f1f57561c515d5f">[email&#160;protected]</span></a><br />
ext:204</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Sorn-Tithynika.jpg" alt="" width="478" height="325" title="Sorn-Tithynika" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Sorn Tithynika</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Account Payable And Tax Supervisor</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=stithynika@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="aedddac7dac6d7c0c7c5cfeecdcfc383cbca80cdc1c3">[email&#160;protected]</span></a><br />
ext:204</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Prom_Sothida.jpg" alt="" width="478" height="325" title="Prom_Sothida" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Prum Sothida</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Procurement Assistant Supervisor</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=psothida@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="8dfdfee2f9e5e4e9eccdeeece0a0e8e9a3eee2e0">[email&#160;protected]</span></a><br />
ext:204</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Heng_Sopanha.jpg" alt="" width="478" height="325" title="Heng_Sopanha" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Heng Sopanha</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Cashier and Stock Assistant Supervisor</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=hsopanha@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="bfd7ccd0cfded1d7deffdcded292dadb91dcd0d2">[email&#160;protected]</span></a><br />
ext:205</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2021/09/CHANTHOEUN-LEAKNA.jpg" alt="" width="478" height="325" title="CHANTHOEUN-LEAKNA" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Chanthoeun Leakna</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior Account Payable</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=cleakna@cam-ed.com" target="_blank"><span class="__cf_email__" data-cfemail="c8aba4ada9a3a6a988aba9a5e5adace6aba7a5">[email&#160;protected]</span></a><br />
ext:205</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2024/09/Thida-1.png" alt="" width="478" height="304" title="Thida" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Sok Rathnakthyda</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior Cashier and Account Receivable</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=cleakna@cam-ed.com" target="_blank"><span class="__cf_email__" data-cfemail="e7949586938f89868c938f9e8386a784868aca8283c984888a">[email&#160;protected]</span></a><br />
ext:204</p>
</div></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"  ><div class="gdlr-core-title-item-title-wrap clearfix" ><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;"  >International Engagement Department</h3></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"  ><div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #4a0000 ;border-width: 5px;" ></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid"  ><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2022/01/Cheng-Somala.jpg" alt="" width="478" height="325" title="Cheng Somala" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Chheng Somala</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >International Engagement Supervisor</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=csomala@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="b7d4c4d8dad6dbd6f7d4d6da9ad2d399d4d8da">[email&#160;protected]</span></a><br />
ext:801</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img  src="https://cam-ed.edu.kh/wp-content/uploads/2024/02/Neath-scaled-800x538.jpg" width="2560" height="1722"  srcset="https://cam-ed.edu.kh/wp-content/uploads/2024/02/Neath-scaled-400x269.jpg 400w, https://cam-ed.edu.kh/wp-content/uploads/2024/02/Neath-scaled-600x403.jpg 600w, https://cam-ed.edu.kh/wp-content/uploads/2024/02/Neath-scaled-800x538.jpg 800w, https://cam-ed.edu.kh/wp-content/uploads/2024/02/Neath-scaled.jpg 2560w"  sizes="(max-width: 767px) 100vw, (max-width: 1150px) 25vw, 287px"  alt="" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Toun Saysovichneat</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >International Engagement Officer </div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=csomala@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="2c585f4d555f435a454f4442494d586c4f4d41014948024f4341">[email&#160;protected]</span></a><br />
ext:801</p>
</div></div></div></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"  ><div class="gdlr-core-title-item-title-wrap clearfix" ><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 26px ;"  >Internal Quality Assurance and Internal Audit Department</h3></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"  ><div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #4a0000 ;border-width: 5px;" ></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid"  ><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/Uttara.jpg" alt="" width="478" height="325" title="Uttara" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Sok Uttara</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Vice President for IQA-IA</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=suttara@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="e192949595809380a182808ccc8485cf828e8c">[email&#160;protected]</span></a><br />
ext:502</p>
</div></div></div></div><div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2020/11/28.png" alt="" width="478" height="325" title="28" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Mean Udam</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >Senior IQA Manager</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=mudam@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="412c3425202c0122202c6c24256f222e2c">[email&#160;protected]</span></a><br />
ext:502</p>
</div></div></div></div>
<div class="gdlr-core-personnel-list-column  gdlr-core-column-15 gdlr-core-item-pdlr" ><div class="gdlr-core-personnel-list clearfix" ><div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" ><img src="https://cam-ed.edu.kh/wp-content/uploads/2023/01/27.png" alt="" width="478" height="325" title="27" /></div><div class="gdlr-core-personnel-list-content-wrap"  ><h3 class="gdlr-core-personnel-list-title"  >Khin Kanika</h3><div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;"  >IQA Supervisor</div><div class="gdlr-core-personnel-list-content" ><p><a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=kkanika@cam-ed.com " target="_blank"><span class="__cf_email__" data-cfemail="e68d8d87888f8d87a685878bcb8382c885898b">[email&#160;protected]</span></a><br />
ext:502</p>
</div></div></div></div></div></div>
</div>
</body>

<footer class="ftco-footer ftco-section img" style="
    width: 2000px;
    height: 794px;
    margin-left: -300px;
">
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