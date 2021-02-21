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

		
		<!-- Site Heading
		================================================== -->
		<div class="page-header page-header--has-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header__title">Notícias</h1>
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
							<div class="col-lg-8">
		


<!--Notícias principais-->

<?
	 	$sql = "SELECT
		 ID_NOTICIA,
		 TITULO,
		 NOME_GERADOR,
		 RESUMO,
		 TEMA,
		 URL_FONTE,
		 URL_IMG,
		 DATA_POSTAGEM
		 FROM noticia
		 ORDER BY DATA_POSTAGEM DESC";
		 foreach ($db_heroes->query($sql) as $result){ 

			setlocale(LC_TIME, 'portuguese'); 
			date_default_timezone_set('America/Sao_Paulo');
			$data_ = $result[7];
			$data = strftime("%d de %B de %Y", strtotime($data_));
	  ?>

<article class="post has-post-thumbnail ">
	<div class="post__thumbnail">

		<a href="<?= $result[5]; ?>"><img src="<?= $result[6]; ?>" alt=""></a>


	</div>
	<div class="post__body">
		<div class="post__header">
			<ul class="post__cats list-unstyled">
				<li class="post__cats-item color-warning">
					<a href="<?= $result[5]; ?>"><?= $result[4]; ?></a>
				</li>
			</ul>
			<h2 class="post__title h4"><a href="<?= $result[5]; ?>"><?= $result[1]; ?></a></h2>
			<ul class="post__meta list-unstyled">
				<li class="post__meta-item post__meta-item--date">
					<?= $data;?>
				</li>
			</ul>
		</div>
		<div class="post__excerpt">
		<?= $result[3]; ?>
		</div>
	</div>
</article>

<?}?>

		
							</div>
		
		

<div class="col-lg-4">
								
							
<div class="widget widget--sidebar ncr-popular-posts">
	<div class="widget-content">
		<h3 class="widget-title">Notícias Populares</h3>

		<ul class="ncr-posts-list list-unstyled">

	<?
	$sql = "SELECT
		ID_NOTICIA,
		TITULO,
		NOME_GERADOR,
		RESUMO,
		TEMA,
		URL_FONTE,
		URL_IMG,
		DATA_POSTAGEM
		FROM noticia
		WHERE TIPO_NOTICIA = 'P'
		ORDER BY DATA_POSTAGEM LIMIT 20";
		foreach ($db_heroes->query($sql) as $result){ 

		setlocale(LC_TIME, 'portuguese'); 
		date_default_timezone_set('America/Sao_Paulo');
		$data_ = $result[7];
		$data = strftime("%d de %B de %Y", strtotime($data_));
	  ?>
						<li class="ncr-posts-list__item has-post-thumbnail post">
							<div class="post__thumbnail">
								<a href="<?= $result[5]; ?>"><img src="<?= $result[6]; ?>" alt=""></a>
							</div>
							<div class="post__body">
								<div class="post__header">
									<ul class="post__cats list-unstyled">
										<li class="post__cats-item color-success">
											<a href="<?= $result[5]; ?>"><?= $result[4]; ?></a>
										</li>
									</ul>
									<h2 class="post__title h6"><a href="<?= $result[5]; ?>"><?= $result[1]; ?></a></h2>
									<ul class="post__meta list-unstyled">
										<li class="post__meta-item post__meta-item--date">
										<?= $data; ?>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<?}?>
					</ul>
				</div>
			</div>
		
								<!-- Latest Posts -->
								<div class="widget widget--sidebar ncr-popular-posts">
									<div class="widget-content">
										<h3 class="widget__title">Últimos vídeos</h3>
										<ul class="ncr-posts-list ncr-posts-list--thumb-on-bg list-unstyled">

	<?
	$sql = "SELECT
		LINK
		FROM assista
		ORDER BY DATA DESC LIMIT 3;";
		foreach ($db_heroes->query($sql) as $result){ 

	  ?>
			<li class="ncr-posts-list__item has-post-thumbnail post">
				<div class="post__thumbnail">
				<iframe width="853" height="480" src="<?= $result[0];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="post__body">
					<div class="post__header">
						<ul class="post__cats list-unstyled">
							<li class="post__cats-item color-warning">
								<a href="<?= $result[0];?>"> &nbsp;</a>
							</li>
						</ul>
						<h2 class="post__title h6"><a href="<?= $result[0];?>" class="stretched-link"> &nbsp;</a></h2>
						<ul class="post__meta list-unstyled">
							<li class="post__meta-item post__meta-item--date"></li>
						</ul>
					</div>
				</div>
			</li>

			<?}?>
										</ul>
									</div>
								</div>
								<!-- Latest Posts / End -->
		
		
							</div>
		
						</div>
					</div>
		
				</div>
		
			</div>
		</main>

		<?php include "footer.php"; ?>
