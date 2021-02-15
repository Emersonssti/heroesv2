<?php include "db/db.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>Heroes Tournaments</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Heroes Tournaments">
	<meta name="author" content="Dan Fisher">
	<meta name="keywords" content="esports team news HTML template">
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="assets/img/logo.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/logo.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/logo.png">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- Google Web Fonts
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet">

	<!-- CSS
	================================================== -->
	<!-- Vendor CSS -->
	<link href="assets/vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/vendor/slick/css/slick.css" rel="stylesheet">
	<link href="assets/vendor/nanoscroller/css/nanoscroller.css" rel="stylesheet">
	<link href="assets/vendor/fontawesome/css/brands.css" rel="stylesheet">

	<!-- Template CSS-->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- Custom CSS-->
	<link href="assets/css/custom.css" rel="stylesheet">

</head>

<body class="preloader-is--active preloader--no-transform">

	<div class="site-wrapper site-layout--classic">

		<!-- Header
		================================================== -->
		<header id="header" class="site-header site-header--top">
		
			<!-- Logo - Image Based -->
			<div class="header-logo header-logo--img">
				<a href="index.php"><img src="assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt="Necromancers"></a>
			</div>
			<!-- Logo - Image Based / End -->
		
		
				<!-- Main Navigation -->
			<nav class="main-nav">
				<ul class="main-nav__list">
					<li><a href="index.php">Home</a></li>
					<li><a href="inicio.php">Torneio</a></li>
					<li><a href="noticias.php">Notícias</a></li>
					<li><a href="videos.php">Vídeos</a></li>
					<li>
						<a href="#">Streamer</a>
						<ul class="main-nav__sub">
							<li><a href="streamer.php?streamer=1">BRUNA7CR</a></li>
							<li><a href="streamer.php?streamer=2">FERNANDON</a></li>
						</ul>
					</li>
					<li><a href="comunidade.php">Comunidade</a></li>
		
					<!-- <li class="">
						<a href="#">Shop</a>
						<ul class="main-nav__sub">
							<li class=""><a href="shop.html">Shop Page v1</a></li>
							<li class=""><a href="shop-2.html">Shop Page v2</a></li>
							<li class=""><a href="shop-product.html">Product Page</a></li>
							<li class=""><a href="shop-checkout.html">Checkout Page</a></li>
						</ul>
					</li> -->
				</ul>
			</nav>
			<!-- Main Navigation / End -->
		
			<!-- Header Actions -->
			<div class="header-actions">
				<div class="header-account hide">
				</div>
				<div class="header-menu-toggle">
					<div class="header-menu-toggle__inner">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</div>
				</div>
			</div>
		</header>
		<!-- Header / End -->

		<!-- Site Heading
		================================================== -->
		<div class="page-header page-header--has-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header__title">Comunidade</h1>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Content
		================================================== -->
		<main class="site-content blog-layout--classic" id="wrapper">
		
			<div class="site-content__inner">
				<div class="site-content__holder">
		
					<div class="container">
						<div class="row">

<!--Notícias principais-->

<?
	 	$sql = "SELECT
		TITULO,
		TEXTO,
		LINK_FOTO,
		DATA
		 FROM comunidade
		 ORDER BY DATA LIMIT 30";
		 foreach ($db_heroes->query($sql) as $result){ 
		
?>
<div class="col-lg-6" style="padding-top: 30px;">
		

<article class="post has-post-thumbnail ">
	<div class="post__thumbnail">

		<img src="<?= $result[2]; ?>" alt="">

	</div>
	<div class="post__body">
		<div class="post__header">
			<h2 class="post__title h4"><?= $result[0]; ?></h2>
			<ul class="post__meta list-unstyled">
				<li class="post__meta-item post__meta-item--date">
					<?= $data;?>
				</li>
			</ul>
		</div>
		<div class="post__excerpt">
		<?= $result[1]; ?>
		</div>
	</div>
</article>

</div>
		<?}?>		


									</div>
								</div>
								<!-- Latest Posts / End -->
		
		
							</div>
		
						</div>
					
		</main>

		<?php include "footer.php"; ?>
