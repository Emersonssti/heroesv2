
		<!-- Overlay -->
		<div class="site-overlay"></div>
		<!-- Overlay / End -->

		<!-- Menu Panel -->
		<div class="menu-panel">
			<ul class="menu-panel__mobile-bar list-unstyled d-md-none">
				<li class="mobile-bar-item">
				
					<div id="mobile_collapse_1" class="collapse mobile-bar-item__body">
						<!-- Mobile Navigation -->
						<nav class="mobile-nav">
							
							<ul class="main-nav__list">
							<li class=""><a href="index.php">Home</a></li>
							<li class=""><a href="torneio.php">Torneio</a></li>
							<li class=""><a href="noticias.php">Notícias</a></li>
							<li class=""><a href="videos.php">Vídeos</a></li>
							
							<li class=""><a href="comunidade.php">Comunidade</a></li>
						</ul>
						</nav>
						<!-- Mobile Navigation / End -->
					</div>
				</li>
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header" href="index.php">
						Home
					</a>
				</li>
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header" href="inicio.php">
						Torneio
					</a>
				</li>
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header" href="noticias.php">
						Notícias
					</a>
				</li>
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header" href="videos.php">
						Vídeos
					</a>
				</li>
				<li class="mobile-bar-item mobile-bar-item--info">
					<a class="mobile-bar-item__header collapsed" data-toggle="collapse" href="#mobile_collapse_3" role="button" aria-expanded="false" aria-controls="mobile_collapse_3">
						Streamers
						<span class="main-nav__toggle">&nbsp;</span>
					</a>
					<div id="mobile_collapse_3" class="collapse mobile-bar-item__body">
						<div class="mobile-bar-item__inner">
							<ul class="list-unstyled">
									<li><a href="streamer.php?streamer=1"><span>BRUNA7CR</span></a></li>
									<li><a href="streamer.php?streamer=2"><span>FERNANDON</span></a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header" href="comunidade.php">
						Comunidade
					</a>
				</li>
			</ul>

	
			<div class="menu-panel__content d-none d-md-flex">
				<div class="menu-panel__navigation">
					<div id="dl-menu" class="dl-menuwrapper">
						<!-- <button class="dl-trigger">Open Menu</button> -->
						<ul class="dl-menu dl-menuopen">
							<li><a href="index.php">Home</a></li>
							<li><a href="inicio.php">Torneio</a></li>
							<li><a href="noticias.php">Notícias</a></li>
							<li><a href="videos.php">Vídeos</a></li>
							<li class="">
										<a href="#">Streamers</a>
										<ul class="dl-submenu">
											<li><a href="streamer.php?streamer=1">BRUNA7CR</a></li>
											<li><a href="streamer.php?streamer=2">FERNANDON</a></li>
										</ul>
									</li>
							<li><a href="comunidade.php">Comunidade</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Menu Panel / End -->

	</div>

	<div class="preloader-overlay">
		<div id="js-preloader" class="preloader">
			<div class="preloader-inner fadeInUp">
				<div class="pong-loader"></div>
				<svg role="img" class="df-icon df-icon--preloader-arcade">
					<use xlink:href="assets/img/necromancers.svg#preloader-arcade"/>
				</svg>
			</div>
		</div>
	</div>

	<!-- The cursor elements -->
	<div class="df-custom-cursor-wrap">
		<div id="df-custom-cursor"></div>
	</div>

	<!-- Javascript Files
	================================================== -->
	<!-- Core JS -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/core.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<!-- Vendor JS -->
	
	<!-- Template JS -->
	<script src="assets/js/init.js"></script>
	<script src="assets/js/custom.js"></script>
	
	<!-- Duotone SVG color filter -->
	<svg xmlns="http://www.w3.org/2000/svg" class="svg-filters">
		<filter id="duotone_base">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" />
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone_base_filter">
				<feFuncR type="table" tableValues="0.082352941176471 0.419607843137255"></feFuncR>
				<feFuncG type="table" tableValues="0.090196078431373 0.443137254901961"></feFuncG>
				<feFuncB type="table" tableValues="0.125490196078431 0.6"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
	</svg>

</body>

</html>
