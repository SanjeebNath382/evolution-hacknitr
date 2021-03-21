<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="MedIOT​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Dashboard</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="AI-tool.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.9.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <script src="./iot.js"></script>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "../index.html",
		"logo": "../images/5g-internet-wifi-technology-15-512.png"
}</script>
    <meta property="og:title" content="AI tool">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <?php
    // $uid = $_SESSION['id'];
    session_start();
    require_once("../config.php");
    $uid = $_SESSION['id'];
    $query = "SELECT * FROM users WHERE uid = '$uid'";
    $result = $con->query($query);
    $row= $result->fetch_array();
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    // var_dump($_SESSION);
  ?>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-1573"><div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">
          <span class="u-text-palette-1-base">MedIOT</span>
          <span class="u-text-palette-1-base"></span>
        </h2>
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="512" data-image-height="512">
          <img src="../images/5g-internet-wifi-technology-15-512.png" class="u-logo-image u-logo-image-1" data-image-width="64">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../healthChecker/index.php" target="_blank" style="padding: 10px 20px;">AI tool</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./connectDoctors.php" style="padding: 10px 20px;">Consult</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./iot.php" style="padding: 10px 20px;">RealTime Monitoring</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="./index.php" style="padding: 10px 20px;">Dasboard</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="../healthChecker/index.php" style="padding: 10px 20px;">AI tool</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="./iot.php" style="padding: 10px 20px;">RealTime Monitoring</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    
    <div class="content" style="width:600px;height:230px;overflow:none;justify-content:center;background:rgba(105, 136, 221, 0.623);margin-left:400px;margin-bottom:50px;margin-top:50px">
    <div class="header-content" style="margin-left:150px;">
      <h1>User Details</h1>
    </div>
    <div class="detail" style="font-weight:bold;margin-left:150px;">
      <h4>First Name:-<?php echo " $fname" ?></h4>
    </div>
    <div class="detail" style="font-weight:bold;margin-left:150px;">
    <h4>Last Name:- <?php echo " $lname" ?></h4>
    </div>
    <div class="detail" style="font-weight:bold;margin-left:150px;">
      <h4>Email:- <?php echo " $email"?></h4>
    </div>
  </div>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-924e"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Made By Team Evolution<br>
          <br>
        </p>
        <a href="https://github.com/amandewatnitrr" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1" target="_blank">Aman Dewangan</a>
        <a href="https://github.com/aryansarkar13" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-2" target="_blank">Aryan Sarkar</a>
        <a href="https://github.com/SanjeebNath382" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3" target="_blank">Sanjeeb Nath</a>
      </div></footer>
    
  </body>
</html>
