<?php
  session_start();
?>
<!DOCTYPE html>
<html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Club ANSI</title>

    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="Miracle | Responsive Multi-Purpose HTML5 Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="components/owl-carousel/owl.carousel.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/owl-carousel/owl.transitions.css" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="components/magnific-popup/magnific-popup.css">

    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">


</head>
<body>
    <div id="page-wrapper">
        <header id="header">
            <div class="container">
                <div class="header-inner">
                    <div class="branding">
                        <h1 class="logo">
                          <a href="index.php">Club
                            <img src="images/ansi\logo.png" style = "max-width: 63%; width:70px">
                          </a>
                         </h1>
                    </div>
                    <nav id="nav">
                        <ul class="header-top-nav">

                            <li class="mini-search">
                                <a href="#"><i class="fa fa-search has-circle"></i></a>
                                <div class="main-nav-search-form">
                                    <form method="get" role="search">
                                        <div class="search-box">
                                            <input type="text" id="s" name="s" value="">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="visible-mobile">
                                <a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
                            </li>
                        </ul>
                        <ul id="main-nav" class="hidden-mobile">
                            <li class="menu-item-has-children">
                                <a href="admin.php">Inicio</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="planes.php">Planes</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="https://www.ansi.cl/">Productos</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Contacto</a>
                                <ul class="sub-nav">
                                    <li><a href="#">Contacto 1</a></li>
                                    <li><a href="#">Contacto 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="dashboard.php">Mi Cuenta</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
                <ul class="mobile-nav">
                  <li class="menu-item-has-children">
                      <a href="admin.php">Inicio</a>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="planes.php">Planes</a>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="#">Productos</a>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="#">Contacto</a>
                      <ul class="sub-nav">
                          <li><a href="#">Contacto 1</a></li>
                          <li><a href="#">Contacto 2</a></li>
                      </ul>
                  </li>
                  <li class="menu-item-has-children">
                      <a href="dashboard.php">Mi Cuenta</a>
                  </li>
                </ul>
             </div>

        </header>
