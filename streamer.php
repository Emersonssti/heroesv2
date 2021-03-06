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
		
			<? include "navbar.php"; ?>
		
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


		<? $id = $_GET["streamer"]; 
		
		$sql = $db_heroes->prepare("SELECT
			NOME_CANAL
		FROM streamer
		WHERE ID_STREAMER = '".$id."'");
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_NUM);
		
		
		?>


		<!-- Site Heading
		================================================== -->
		<div class="page-header page-header--has-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header__title"><?= $result[0];?></h1>
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


<?
	 	$sql = "SELECT
		*
		 FROM assista
		 WHERE ID_ASSISTA AND ID_STREAMER = '".$id."'
		 ORDER BY DATA LIMIT 16";
		 foreach ($db_heroes->query($sql) as $result){ 
		
?>
<div class="col-lg-6" style="padding-top: 30px;">
		

	<article class="post has-post-thumbnail ">

		<iframe width="853" height="480" src="<?= $result[1];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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
