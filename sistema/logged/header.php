<?  include "db_/db.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="Heroes Administração">
    <meta name="description" content="Heroes Administração">
    <meta name="keywords" content="Heroes Administração">
    <meta name="author" content="Heroes Administração">
    <link rel="shortcut icon" href="../assets/images/logo.png">
	  <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/logo.png">
	  <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/logo.png">
    <title>Heroes Administração</title>
   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <!--Custom-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">


  </head>
  <style>
    option{
    font-size:10px;}
  </style>
  <body class="dark-only">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">    </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.php"><img class="img-fluid" src="../assets/images/logo/.png" alt=""></a></div>
          </div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"></i></div>
       
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
            
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown p-0">
                <div class="media profile-media"><img class="b-r-10" src="../assets/images/<? echo $img;?>" alt="">
                  <div class="media-body"><span>Olá, <?php echo $nome_user ?></span>
                    <p class="mb-0 font-roboto">Opções <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <!-- <li><i data-feather="user"></i><span>Account </span></li> -->
                  <!-- <li><i data-feather="mail"></i><span>Inbox</span></li>
                  <li><i data-feather="file-text"></i><span>Taskboard</span></li>
                  <li><i data-feather="settings"></i><span>Settings</span></li> -->
                  <li><i data-feather="log-in"> </i><span id="sair">Sair</span></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
        <div class="logo-wrapper"><a href="index.html"><h4>HEROES ADMIN</h4></a></div>
          <div class="logo-icon-wrapper"><a href="index.html"><h5>ADMIN</h5></a></div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn">
                    <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="torneio_list.php"><i data-feather="award"></i><span>Torneio</span></a>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="noticias_list.php" target="_blank"><i data-feather="volume"></i><span>Notícias</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="assista_list.php" target="_blank"><i data-feather="youtube"></i><span>Assista</span></a></li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="comunidade_list.php" target="_blank"><i data-feather="instagram"></i><span>Comunidade</span></a></li>
                  </li>

                  <!-- <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="maximize"></i><span>Torneio</span></a>
                    <ul class="nav-submenu menu-content">
                      <li><a href="index.html">Ca</a></li>
                    </ul>
                  </li> -->
              
              
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <style>
        input{ text-transform: uppercase;}
        .centraliza{text-align: center;}
        </style>

