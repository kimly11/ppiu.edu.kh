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
        <div class="collapse navbar-collapse" style=" width: 850px; " id="ftco-nav">
          <ul class="navbar-nav ml-auto">
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

</script>

<body class="page-template-default page page-id-9810 gdlr-core-body tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
<div class="kingster-body-outer-wrapper ">
		<div class="kingster-body-wrapper clearfix  kingster-with-transparent-header kingster-with-frame">
	<div class="kingster-header-background-transparent" >	
</div><div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url(https://cam-ed.edu.kh/wp-content/uploads/2020/11/application.jpg) ;" ><div class="kingster-header-transparent-substitute" ></div><div class="kingster-page-title-overlay"  ></div><div class="kingster-page-title-bottom-gradient" ></div><div class="kingster-page-title-container kingster-container" ><div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 468px ;padding-bottom: 60px ;"  ><h1 class="kingster-page-title" style="font-size: 48px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;color: #ffffff ;"  >Admissions</h1></div></div></div>	<div class="kingster-page-wrapper" id="kingster-page-wrapper" ><div class="gdlr-core-page-builder-body"><div class="gdlr-core-pbf-wrapper " style="padding: 60px 0px 10px 0px;"  id="applynow" ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-wrapper-content gdlr-core-js "   ><div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" ><div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first"  id="applications" ><div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 20px 0px;"   ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "   ><div class="gdlr-core-pbf-element" ><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 20px ;"  id="application"  ><div class="gdlr-core-title-item-title-wrap clearfix" ><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #752534 ;"  >APPLICATION FOR NEW STUDENT</h3></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;"  ><div class="gdlr-core-text-box-item-content" style="text-transform: none ;"  ><table class=" alignleft" style="text-align: left;" border="0" width="100%" cellspacing="3" cellpadding="4">
<thead>
<tr>
<th style="width:20%; background: #76323f; border-top-left-radius: 0.6em; padding: 10px; font-size: 20px;">Program</th>
<th style="width:20%; background: #76323f; padding: 10px; font-size: 20px;">Deadline</th>
<th style="width:20%; background: #76323f; border-top-right-radius: 0.6em; padding: 10px; font-size: 20px;">Application Form</th>
</tr>
</thead>
<tbody>
<tr>
<td style="padding-left: 10px;"><strong>MSc + ACCA Program / ACCA Qualification</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://web.cam-ed.com/beta/master-register" target="_blank" rel="noopener">Apply Here</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>BA + CAT Program</strong></td>
<td style="padding-left: 10px;"><strong>May 31, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://web.cam-ed.com/beta/ba-register" target="_blank" rel="noopener">Apply Here</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>CAT Qualification</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://web.cam-ed.com/beta/cat-register" target="_blank" rel="noopener">Apply Here</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>BA + CAT Exchange Program / Summer Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://web.cam-ed.com/beta/ba-register-exchange" target="_blank" rel="noopener">Apply Here</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>Diploma in Advanced Cambodian Tax Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://web.cam-ed.com/beta/advanced-tax-register" target="_blank" rel="noopener">Apply Here</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>Diploma in Cambodian Tax Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://web.cam-ed.com/beta/tax-register" target="_blank" rel="noopener">Apply Here</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>Diploma in Cambodian Business Law Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://web.cam-ed.com/beta/law-register" target="_blank" rel="noopener">Apply Here</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>Diploma in IFRS for SMEs Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://web.cam-ed.com/beta/ifrs-register" target="_blank" rel="noopener">Apply Here</a></strong></td>
</tr>
</tbody>
</table>
</div></div></div></div></div></div></div></div></div><div class="gdlr-core-pbf-wrapper " style="padding: 20px 0px 5px 0px;"  id="enrollment" ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-wrapper-content gdlr-core-js "   ><div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" ><div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first"  id="gdlr-core-column-66528" ><div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 5px 0px;"   ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "   ><div class="gdlr-core-pbf-element" ><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px ;"  ><div class="gdlr-core-title-item-title-wrap clearfix" ><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #76323f ;"  >ENROLLMENT FOR EXISTING STUDENT</h3></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;"  ><div class="gdlr-core-text-box-item-content" style="text-transform: none ;"  ><table class=" alignleft" style="text-align: left;" border="0" width="100%" cellspacing="3" cellpadding="4">
<thead>
<tr>
<th style="width:20%; background: #76323f; border-top-left-radius: 0.6em; padding: 10px; font-size: 20px;">Program</th>
<th style="width:20%; background: #76323f; padding: 10px; font-size: 20px;">Deadline</th>
<th style="width:20%; background: #76323f; border-top-right-radius: 0.6em; padding: 10px; font-size: 20px;">Enrollment Form</th>
</tr>
</thead>
<tbody>
<tr>
<td style="padding-left: 10px;"><strong>MSc + ACCA Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://apply.cam-ed.com/master-enrollment" target="_blank" rel="noopener">Enroll Now</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong> ACCA Qualification</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://apply.cam-ed.com/acca-enrollment-prompt" target="_blank" rel="noopener">Enroll Now</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>CAT Qualification</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://apply.cam-ed.com/cat-enrollment-prompt" target="_blank" rel="noopener">Enroll Now</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>Diploma in Advanced Cambodian Tax Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://apply.cam-ed.com/advanced-tax-enrollment" target="_blank" rel="noopener">Enroll Now</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>Diploma in Cambodian Tax Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://apply.cam-ed.com/tax-enrollment" target="_blank" rel="noopener">Enroll Now</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>Diploma in Cambodian Business Law Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://apply.cam-ed.com/law-enrollment" target="_blank" rel="noopener">Enroll Now</a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>Diploma in IFRS for SMEs Program</strong></td>
<td style="padding-left: 10px;"><strong>July 5, 2025</strong></td>
<td style="padding-left: 10px;"><strong><a href="https://apply.cam-ed.com/ifrs-enrollment" target="_blank" rel="noopener">Enroll Now</a></strong></td>
</tr>
</tbody>
</table>
</div></div></div></div></div></div></div></div></div><div class="gdlr-core-pbf-wrapper " style="padding: 20px 0px 5px 0px;" ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-wrapper-content gdlr-core-js "   ><div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" ><div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first"  id="exam-register" ><div class="gdlr-core-pbf-column-content-margin gdlr-core-js "   ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "   ><div class="gdlr-core-pbf-element" ><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px ;"  ><div class="gdlr-core-title-item-title-wrap clearfix" ><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #76323f ;"  >EXAM REGISTRATION</h3></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;"  ><div class="gdlr-core-text-box-item-content" style="text-transform: none ;"  ><table class=" alignleft" style="text-align: left;" border="0" width="100%" cellspacing="3" cellpadding="4">
<thead>
<tr>
<th style="width:20%; background:rgb(194, 172, 176); border-top-left-radius: 0.6em; padding: 10px; font-size: 20px;">Paper/Course</th>
<th style="width:20%; background: #76323f; border-top-right-radius: 0.6em; padding: 10px; font-size: 20px;">Form</th>
</tr>
</thead>
<tbody>
<tr>
<td style="padding-left: 10px;"><strong>ACCA</strong> (PM, FR, AA, FM, AFM, APM, SBR).  <strong>CBL, CTAX, CAT</strong> (FAU, FFM)</td>
<td style="padding-left: 10px;"><strong><a href="https://student.cam-ed.com/user/login" target="_blank" rel="noopener"><span style="color: #76323f;">Register Here</span></a></strong></td>
</tr>
<tr>
<td style="padding-left: 10px;"><strong>ACCA</strong> (BT, F2/MA, F3/FA)  &amp;  <strong>CAT</strong> (FA1, MA1, FA2, MA2, FFA, FBT, FMA)</td>
<td style="padding-left: 10px;"><strong><a href="https://student.cam-ed.com/user/login" target="_blank" rel="noopener"><span style="color: #76323f;">Register Here</span></a></strong> <b>|</b> <strong><a href="https://docs.google.com/forms/d/e/1FAIpQLSf-hO64XsSiXEmMxv79pULFYyrTSDW6KO5BUN6aAmDuKI_c1Q/viewform" target="_blank" rel="noopener"><span style="color: #76323f;">For Outsider</span></a></strong></td>
</tr>
</tbody>
</table>
</div></div></div></div></div></div></div></div></div><div class="gdlr-core-pbf-wrapper " style="padding: 20px 0px 30px 0px;" ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-wrapper-content gdlr-core-js "   ><div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" ><div class="gdlr-core-pbf-element" ><div class="gdlr-core-image-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px ;"  ><div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"  ><img  src="https://cam-ed.edu.kh/wp-content/uploads/2024/10/admission-processes-admission-page-800x252.jpg" width="2259" height="712"  srcset="https://cam-ed.edu.kh/wp-content/uploads/2024/10/admission-processes-admission-page-400x126.jpg 400w, https://cam-ed.edu.kh/wp-content/uploads/2024/10/admission-processes-admission-page-600x189.jpg 600w, https://cam-ed.edu.kh/wp-content/uploads/2024/10/admission-processes-admission-page-800x252.jpg 800w, https://cam-ed.edu.kh/wp-content/uploads/2024/10/admission-processes-admission-page.jpg 2259w"  sizes="(max-width: 767px) 100vw, (max-width: 1150px) 100vw, 1150px"  alt="" /></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"  ><div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;"  ><p style="padding: 14px;"><i><span style="font-weight: 400;">There is no entrance exam for Diploma Programs. However, entrance exams are required for ACCA and CAT qualifications, and candidates can schedule them any day during working hours. It is </span></i><b><i>FREE</i></b><i><span style="font-weight: 400;"> of charge for all programs.</span></i></p>
<div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align btnregister"><a id="gdlr-core-button-id-72126" class="gdlr-core-button gdlr-core-button-solid gdlr-core-button-no-border" style="border-radius: 3px!important; background-color: #7f0c0c; color: white; text-transform: uppercase;" href="https://cam-ed.edu.kh/request-information/" rel="noopener"><span class="gdlr-core-content">REQUEST INFORMATION</span></a></div>
</div></div></div></div></div></div><div class="gdlr-core-pbf-section" ><div class="gdlr-core-pbf-section-container gdlr-core-container clearfix" ><div class="gdlr-core-pbf-element" ><div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 10px ;"  ><div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #76323f ;border-width: 3px;" ></div></div></div></div></div><div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 30px 0px;" ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-wrapper-content gdlr-core-js "   ><div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container" ><div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first" ><div class="gdlr-core-pbf-column-content-margin gdlr-core-js "   ><div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "   ><div class="gdlr-core-pbf-element" ><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;"  ><div class="gdlr-core-title-item-title-wrap clearfix" ><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"  >How to make the payment?</h3></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"  ><div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;"  ><p><strong>The payment can be made via:</strong></p>
<ol>
<li>Finance Office at CamEd Business School</li>
<li>Bank Transfer
<ul style="margin-left: 5px;">
<li>ABA (900 008 900, CamEd Institute Co., Ltd.)</li>
<li>ACLEDA BANK (0001-04440065-12, CamEd Institute CO., LTD.)</li>
<li>SATHAPANA  (005 004 99, CamEd Institute CO., LTD.)</li>
<li>CIMB (1-01-0121-00001452-5, CamEd Institute)</li>
<li>WING (100 157 206, CamEd Institute CO., LTD.)</li>
<li style="list-style-type: none; font-size: 14px;"><em><b>In case you make payment via bank transfer, please help submit your payment reference via this </b></em><strong><i><a href="https://forms.gle/VLJs3H1rx9Ne83xA6" target="_blank" rel="noopener" data-saferedirecturl="https://www.google.com/url?q=https://forms.gle/VLJs3H1rx9Ne83xA6&amp;source=gmail&amp;ust=1623840410363000&amp;usg=AFQjCNHMljHTWD5H7YkK4387k0AlD_JuKg">link.</a></i></strong></li>
</ul>
</li>
<li>CamEd Online Payment <strong><a href="https://payment.cam-ed.com">https://payment.cam-ed.com</a></strong></li>
<li>Wing
<ul>
<li>Biller Code: 7050</li>
<li>Account Name: CamEd Institute</li>
</ul>
</li>
</ol>
<div><span style="font-family: arial, sans-serif;"><b><u>Note: ចំណាំ</u></b><br /></span></div>
<div><span style="font-family: arial, sans-serif;">រាល់ការទូទាត់ដែលធ្វើឡើងដោយកា<wbr />រផ្ទេរប្រាក់តាមធនាគារ ថ្លៃសេវាធនាគារជាការចំណាយរបស់<wbr />អតិថិជន<br />Student shall bear all the transfer fees and bank charges in use of the services.</span></div>
</div></div></div></div></div></div><div class="gdlr-core-pbf-column gdlr-core-column-20"  id="gdlr-core-column-67385" ><div class="gdlr-core-pbf-column-content-margin gdlr-core-js "   ><div class="gdlr-core-pbf-background-wrap"  ></div><div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "   ><div class="gdlr-core-pbf-element" ><div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;"  ><div class="gdlr-core-title-item-title-wrap clearfix" ><h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"  >Policy</h3></div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;"  ><div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;"  ><p><a href="https://cam-ed.com/admissions-policies-procedures/" target="_blank" rel="noopener">Admissions Policy</a><br /><a href="https://drive.google.com/file/d/1IVimo6Cp2GfeCZ3P0RTppKXLw0PkoOJr" target="_blank" rel="noopener">Student Orientation Policy</a></p>
</div></div></div><div class="gdlr-core-pbf-element" ><div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"  ><div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;color: #919191 ;"  ><p><span style="color: #000000;">More Info</span><br />
<span class="fa fa-phone icon-margin" style="color: #000000;" aria-hidden="true"><a style="color: #000000; font-family: poppins, sans-serif;" href="tel:078588886"> 078 588 886 </a></span>  <span class="fa fa-phone icon-margin" style="color: #000000;" aria-hidden="true"><a style="color: #000000; font-family: poppins, sans-serif;" href="tel:010 986 523"> 010 986 523</a></span> <span class="fa fa-phone icon-margin" style="color: #000000;" aria-hidden="true"><a style="color: #000000; font-family: poppins, sans-serif;" href="tel:010 986 523">  070 673 673</a></span><br />
<span style="color: #000000;"><i class="fa fa-envelope icon-margin" style="color: #000000;" aria-hidden="true"></i> <a style="color: #000000; font-family: poppins, sans-serif;" href="/cdn-cgi/l/email-protection#0b6a6f66627878626465784b686a66266e6f25686466" target="_blank" rel="noopener"><span class="__cf_email__" data-cfemail="0667626b6f75756f6968754665676b2b63622865696b">[email&#160;protected]</span></a></span></p>
<p>&nbsp;</p>
</div></div></div></div></div></div></div></div></div></div>

		<div class="ft">
                    <h4>Education Resources</h4>
        				<ul>
                            <li><a href="https://en.wikipedia.org/wiki/Education#">Wikipedia</a></li>
                            <li><a href="https://www.theidioms.com/#title">Theidioms.com</a></li>
                            <li><a href="https://www.britannica.com/topic/English-language#">English language</a></li>
                            <li><a href="https://twitter.com/shayari/#">Shayari</a></li>
                        </ul>
				</div>
    </div>
				</div></div>
<!-- start Simple Custom CSS and JS -->
<style type="text/css">
@import url('https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css');

div.chat-heading h1::before {
content: "";
    display: block;
	float: left;
    width: 30px;
    height: 30px;
    background: url("https://cam-ed.edu.kh/wp-content/uploads/2020/12/CamEd_Logo_web.png") no-repeat center;
    background-size: contain;
    margin-right: 10px;
	padding-top: 0.2em;
}

:root {
	--chat--color-primary: #601F21;
	--chat--color-primary-shade-50: #76323f;
	--chat--color-primary-shade-100: #601F21;
	--chat--color-secondary: #D9B628;
	--chat--color-secondary-shade-50: ##E8D38A;
	--chat--color-white: #ffffff;
	--chat--color-light: #f2f4f8;
	--chat--color-light-shade-50: #e6e9f1;
	--chat--color-light-shade-100: #c2c5cc;
	--chat--color-medium: #d2d4d9;
	--chat--color-dark: #601F21;
	--chat--color-disabled: #777980;
	--chat--color-typing: #404040;

	--chat--spacing: 1rem;
	--chat--border-radius: 0.25rem;
	--chat--transition-duration: 0.15s;

	--chat--window--width: 400px;
	--chat--window--height: 600px;

	--chat--header-height: auto;
	--chat--header--padding: var(--chat--spacing);
	--chat--header--background: var(--chat--color-dark);
	--chat--header--color: var(--chat--color-light);
	--chat--header--border-top: none;
	--chat--header--border-bottom: none;
	--chat--header--border-bottom: none;
	--chat--header--border-bottom: none;
	--chat--heading--font-size: 1.5em;
	--chat--header--color: var(--chat--color-light);
	--chat--subtitle--font-size: inherit;
	--chat--subtitle--line-height: 1.8;

	--chat--textarea--height: 50px;

	--chat--message--font-size: 1rem;
	--chat--message--padding: var(--chat--spacing);
	--chat--message--border-radius: var(--chat--border-radius);
	--chat--message-line-height: 1.8;
	--chat--message--bot--background: var(--chat--color-white);
	--chat--message--bot--color: var(--chat--color-dark);
	--chat--message--bot--border: none;
	--chat--message--user--background: var(--chat--color-secondary);
	--chat--message--user--color: var(--chat--color-white);
	--chat--message--user--border: none;
	--chat--message--pre--background: rgba(0, 0, 0, 0.05);

	--chat--toggle--background: var(--chat--color-primary);
	--chat--toggle--hover--background: var(--chat--color-primary-shade-50);
	--chat--toggle--active--background: var(--chat--color-primary-shade-100);
	--chat--toggle--color: var(--chat--color-white);
	--chat--toggle--size: 64px;
}

.chat-message-markdown ol, .chat-message-markdown ul{
	margin-left: 0.8rem;
}

.chat-message-markdown dl dl, .chat-message-markdown dl ol, .chat-message-markdown dl ul, .chat-message-markdown ol dl, .chat-message-markdown ul dl, .chat-message-markdown ol ol, .chat-message-markdown ol ul, .chat-message-markdown ul ol, .chat-message-markdown ul ul{
	margin-left: 0.8rem;
}


.chat-message-markdown{
	font-size: 100%;
}

.chat-layout .chat-header{
	gap: 0em;
}

.chat-layout .chat-header p{
	margin-bottom: 0px;
}

</style>
<!-- end Simple Custom CSS and JS -->

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9275a1937a215859","version":"2025.1.0","r":1,"token":"a1329217d4264f56b3a3660c8f98463e","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
</body>
<footer class="ftco-footer ftco-section img">
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
<!-- end Simple Custom CSS and JS -->