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
	<meta name="author" content="Emerson Santos">
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

<body class="site-layout--horizontal preloader-is--active">

	<div class="site-wrapper">

		<!-- Header 
		================================================== -->
		<header id="header" class="site-header site-header--bottom">
		
			<!-- Logo - Image Based -->
			<div class="header-logo header-logo--img">
				<a href="index.html"><img src="assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt="Necromancers"></a>
			</div>
			<!-- Logo - Image Based / End -->
		
		
	
		<!-- Main Navigation -->
			<nav class="main-nav">
				<ul class="main-nav__list">
					<li><a href="index.php">Home</a></li>
					<li><a href="inicio.php">Torneios</a></li>
					<li><a href="noticias.php">Notícias</a></li>
					<li><a href="videos.php">Vídeos</a></li>
					<li>
						<a href="#">Streamer</a>
						<ul class="main-nav__sub">
								<li><a href="streamer.php?streamer=1"><span>BRUNA7CR</span></a></li>
								<li><a href="streamer.php?streamer=2"><span>FERNANDON</span></a></li>
								<li><a href="streamer.php?streamer=5"><span>MARKIN CLASH</span></a></li>
								<li><a href="streamer.php?streamer=3"><span>NIKITA</span></a></li>
								<li><a href="streamer.php?streamer=6"><span>RAFACOCBR</span></a></li>
						</ul>
					</li>
					<li><a href="parceiros.php">Parceiros</a></li>
					<li><a href="comunidade.php">Comunidade</a></li>

				</ul>
			</nav>
			<!-- Main Navigation / End -->
				<!-- Header Actions -->
				<div class="header-actions">
				<div class="header-account hide">
					<div class="header-account__icon">
						<a href="shop-account-settings.html">
							<svg role="img" class="df-icon df-icon--account">
								<use xlink:href="assets/img/necromancers.svg#account"/>
							</svg>
						</a>
						<a href="login-register.html">
							<svg role="img" class="df-icon df-icon--logout">
								<use xlink:href="assets/img/necromancers.svg#logout"/>
							</svg>
						</a>
					</div>
				</div>
				<div class="header-menu-toggle">
					<div class="header-menu-toggle__inner">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</div>
				</div>
			</div>
	
			<!-- Header Actions / End -->
		</header>
		<!-- Header / End -->

		<!-- Content
		================================================== -->
		<main class="site-content" id="wrapper">
			
			<div class="page-heading page-heading--loop page-heading--partners bg-image bg--ph-01">
				<div class="page-heading__subtitle h5 color-primary">Heroes Tournaments</div>
				<h1 class="page-heading__title h2">Parceiros</h1>
				<div class="page-heading__body">
					<div class="h6 text-sm color-primary">Quer se tornar um parceiro?</div>
					<div class="h6"><a href="mailto:#">contato@torneioheroes.com</a></div>
				</div>
			</div>

			<div class="content partners-layout">
		
		<?
		 $sql = "SELECT
		 LOGO,
		 NOME,
		 TITULO,
		 LINK_TITULO,
		 DESCRICAO,
		 ID_PARCEIRO
		 FROM parceiro
		 ORDER BY ID_PARCEIRO";
		 foreach ($db_heroes->query($sql) as $result){ 
	 	 ?>
				<article class="partner">
					<div class="partner__logo">
						<img src="assets/img/parceiro/<?=$result[0]?>" alt="Honeycomb">
					</div>
					<div class="partner__header">
						<h2 class="partner__title h4"><?=$result[1]?></h2>
						<a href="<?=$result[3]?>" class="partner__info"><?=$result[2]?></a>
					</div>
					<p class="partner__excerpt"><?=$result[4]?></p>
					<ul class="social-menu social-menu--links">
						<?
							$sql_ = "SELECT
							LINK
							FROM parceiro_contato
								WHERE ID_PARCEIRO = '".$result[5]."'
							ORDER BY REDE_SOCIAL";
							foreach ($db_heroes->query($sql_) as $result_){ 
						?>
							<li><a href="<?=$result_[0]?>"></a></li>

						<?}?>
					</ul>
				</article>
				<?}?>
			</div>
			
		</main>
		<?php include "footer.php"; ?>
