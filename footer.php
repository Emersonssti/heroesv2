
		<!-- Overlay -->
		<div class="site-overlay"></div>
		<!-- Overlay / End -->




		<!-- Menu Panel -->
		<div class="menu-panel">
			<ul class="menu-panel__mobile-bar list-unstyled d-md-none">

				<?//Menu Principal
					$sql_nav = "SELECT DESCRICAO, LINK, ID_NAVBAR FROM navbar ORDER BY SEQ";
					foreach ($db_confi->query($sql_nav) as $r_nav){ 
				?>
						<? if($r_nav[1]!='#'){?>
							<li class="mobile-bar-item">
								<a class="mobile-bar-item__header" href="<?=$r_nav[1]?>">
									<?=$r_nav[0]?>
								</a>
							</li>
						<?}else{?>
							<li class="mobile-bar-item mobile-bar-item--info">
								<a class="mobile-bar-item__header collapsed" data-toggle="collapse" href="#mobile_collapse_<?=$r_nav[2]?>" role="button" aria-expanded="false" aria-controls="mobile_collapse_3">
									<?=$r_nav[0]?>
									<span class="main-nav__toggle">&nbsp;</span>
								</a>
								<div id="mobile_collapse_<?=$r_nav[2]?>" class="collapse mobile-bar-item__body">
									<div class="mobile-bar-item__inner">
										<ul class="list-unstyled">
										
										<? $sql_nav_sub = "SELECT LINK, DESCRICAO FROM navbar_sub WHERE ID_NAVBAR = '".$r_nav[2]."'
											ORDER BY DESCRICAO";
											foreach ($db_confi->query($sql_nav_sub) as $r_nav_sub){?>
												<li><a href="<?=$r_nav_sub[0]?>"><span><?=$r_nav_sub[1]?></span></a></li>
												<?}?>

										</ul>
									</div>
								</div>
							</li>

						<?}?>
			<?}?>
			
			</ul>
			<div class="menu-panel__content d-none d-md-flex">
				<div class="menu-panel__navigation">
					<div id="dl-menu" class="dl-menuwrapper">
						<!-- <button class="dl-trigger">Open Menu</button> -->
						<ul class="dl-menu dl-menuopen">
						<?//Menu Principal
							$sql_nav = "SELECT DESCRICAO, LINK, ID_NAVBAR FROM navbar ORDER BY SEQ";
							foreach ($db_confi->query($sql_nav) as $r_nav){ 
						?>
							<li>
								<a href="<?=$r_nav[1]?>"><?=$r_nav[0]?></a>

								<?if($r_nav[1] == '#'){?>
									<ul class="dl-submenu">
											<? $sql_nav_sub = "SELECT LINK, DESCRICAO FROM navbar_sub WHERE ID_NAVBAR = '".$r_nav[2]."'
												ORDER BY DESCRICAO";
												foreach ($db_confi->query($sql_nav_sub) as $r_nav_sub){?>
													<li><a href="<?=$r_nav_sub[0]?>"><span><?=$r_nav_sub[1]?></span></a></li>
											<?}?>
									</ul>
								<?}?>
							</li>
						<?}?>
							<li><a href="parceiros.php">Parceiros</a>
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
