<?php include "header.php"; ?>
<? $id_torneio = $_GET["torneio"];


$sql_temporada = $db_heroes->prepare("SELECT 
	ID_TEMPORADA, 
	NOME_TEMPORADA,
	NUMERO_TEMPORADA
FROM temporada 
WHERE STATUS = 'ATIVO' ");
$sql_temporada->execute();
$row_torneio = $sql_temporada->fetch(PDO::FETCH_NUM);




?>


	<!-- Content
		================================================== -->
		<main class="site-content player-info-page" id="wrapper">
			<div class="container container--large">
				<div class="team-carousel">
					<div class="team-carousel__content">
		
						<!-- Section: Lineups -->
						<div class="team-carousel__item" data-icon="lineups">
							<div class="row">
								<div class="col-lg-6">
									<h3 class="player-info-subtitle h4 text-uppercase">James Spiegel</h3>
									<h2 class="player-info-title h1">DaVikinger90</h2>
									<div class="row">
										<div class="col-6 col-md-6 col-xl-4">
											<div class="player-info-detail">
												<div class="player-info-detail__label">Age</div>
												<div class="player-info-detail__title">22 Years</div>
											</div>
										</div>
										<div class="col-6 col-md-6 col-xl-4">
											<div class="player-info-detail">
												<div class="player-info-detail__label">Since</div>
												<div class="player-info-detail__title">March 2015</div>
											</div>
										</div>
										<div class="col-6 col-md-6 col-xl-4">
											<div class="player-info-detail">
												<div class="player-info-detail__label">Born</div>
												<div class="player-info-detail__title">Los Angeles, USA</div>
											</div>
										</div>
										<div class="col-6 col-md-6 col-xl-4">
											<div class="player-info-detail">
												<div class="player-info-detail__label">Team</div>
												<div class="player-info-detail__title">Xenowatch</div>
											</div>
										</div>
										<div class="col-6 col-md-6 col-xl-4">
											<div class="player-info-detail">
												<div class="player-info-detail__label">Role</div>
												<div class="player-info-detail__title">Support</div>
											</div>
										</div>
										<div class="col-6 col-md-6 col-xl-4">
											<div class="player-info-detail">
												<div class="player-info-detail__label">Social</div>
												<ul class="social-menu social-menu--default">
													<li><a href="https://www.facebook.com/danfisher.dev/" target="_blank"></a></li>
													<li><a href="https://twitter.com/danfisher_dev" target="_blank"></a></li>
													<li><a href="https://twitch.com" target="_blank"></a></li>
													<li><a href="https://www.instagram.com/dan.fisher.dev/" target="_blank"></a></li>
												</ul>
											</div>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</div>
						<!-- Section: Lineups / End -->
		
						<!-- Section: Stats -->
						<div class="team-carousel__item" data-icon="stats">
							<div class="row">
								<div class="col-lg-6">
									<h3 class="player-info-subtitle h5">DaVikinger90</h3>
									<h2 class="player-info-title text-uppercase">Statistics</h2>
									<div class="row">
		
										<div class="col-6 col-md-4 col-lg-6 col-xl-4">
											<div class="player-info-detail player-info-detail--value">
												<div class="player-info-detail__value h3">5.2</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__label">AVG Game</div>
													<div class="player-info-detail__title">Kills</div>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-4 col-lg-6 col-xl-4">
											<div class="player-info-detail player-info-detail--value">
												<div class="player-info-detail__value h3">7.1</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__label">Avg Game (k)</div>
													<div class="player-info-detail__title">Damage</div>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-4 col-lg-6 col-xl-4">
											<div class="player-info-detail player-info-detail--value">
												<div class="player-info-detail__value h3">9.2</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__label">Avg Game (k)</div>
													<div class="player-info-detail__title">Healing</div>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-4 col-lg-6 col-xl-4">
											<div class="player-info-detail player-info-detail--value">
												<div class="player-info-detail__value h3">98</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__label">Games</div>
													<div class="player-info-detail__title">Won</div>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-4 col-lg-6 col-xl-4">
											<div class="player-info-detail player-info-detail--value">
												<div class="player-info-detail__value h3">14</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__label">Games</div>
													<div class="player-info-detail__title">Lost</div>
												</div>
											</div>
										</div>
		
										<div class="col-6 col-md-4 col-lg-6 col-xl-4">
											<div class="player-info-detail player-info-detail--bar">
												<div class="player-info-detail__bar" data-value="87.5" data-id="progress-path-1">
													<svg width="61" height="61" viewBox="0 0 61 61">
														<path fill-opacity="0" stroke-width="6" d="M3.008,29.000 L29.009,3.009 L55.009,29.000 L29.009,54.991 L3.008,29.000 Z"/>
														<path fill-opacity="0" id="progress-path-1" stroke-width="6" stroke-linecap="square" d="M3.008,29.000 L29.009,3.009 L55.009,29.000 L29.009,54.991 L3.008,29.000 Z"/>
													</svg>
													<i class="fa fa-star">&nbsp;</i>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__label">Win ratio</div>
													<div class="player-info-detail__title">87.5%</div>
												</div>
											</div>
										</div>
									</div>
									<div class="player-info-page__statistics-footer">
										<div class="player-info-detail player-info-detail--hero">
											<div class="player-info-detail__hero">
												<img src="assets/img/samples/player-info-hero-photo.png" alt="">
											</div>
											<div class="player-info-detail__body">
												<div class="player-info-detail__title">Simmelia</div>
												<div class="player-info-detail__label">Most played hero</div>
											</div>
										</div>
										<div class="player-info-detail ml-sm-auto text-sm-right clearfix">
											<div class="player-info-detail__title">Support</div>
											<div class="player-info-detail__label">Hero role</div>
										</div>
										<div class="player-info-detail text-right">
											<div class="player-info-detail__title">
												<span class="color-gold">12</span> /
												<span class="color-silver">10</span> /
												<span class="color-bronze">5</span>
											</div>
											<div class="player-info-detail__label">Medals won</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Section: Stats / End -->
		
						<!-- Section: Achievements -->
						<div class="team-carousel__item" data-icon="achievements">
							<div class="row">
								<div class="col-lg-6">
									<h3 class="player-info-subtitle h5">DaVikinger90</h3>
									<h2 class="player-info-title text-uppercase">Achievements</h2>
									<div class="row">
										<div class="col-sm-12 col-md-8 col-xl-8">
											<div class="player-info-carousel" id="player-info-carousel-1">
		
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--award-medal">
															<use xlink:href="assets/img/necromancers.svg#award-medal"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Fastest kill in the league</div>
														<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
														<div class="player-info-detail__label">August 28th, 2015</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--achievements-trophy">
															<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Xenowatch World League</div>
														<div class="player-info-detail__label color-primary">1st place</div>
														<div class="player-info-detail__label">February 14th, 2017</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--award-medal">
															<use xlink:href="assets/img/necromancers.svg#award-medal"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Fastest kill in the league</div>
														<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
														<div class="player-info-detail__label">August 28th, 2015</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--achievements-trophy">
															<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Xenowatch World League</div>
														<div class="player-info-detail__label color-primary">1st place</div>
														<div class="player-info-detail__label">February 14th, 2017</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--award-medal">
															<use xlink:href="assets/img/necromancers.svg#award-medal"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Fastest kill in the league</div>
														<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
														<div class="player-info-detail__label">August 28th, 2015</div>
													</div>
												</div>
											</div>
		
											<div class="player-info-carousel" id="player-info-carousel-2">
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--achievements-trophy">
															<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Xenowatch World League</div>
														<div class="player-info-detail__label color-primary">1st place</div>
														<div class="player-info-detail__label">February 14th, 2017</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--award-medal">
															<use xlink:href="assets/img/necromancers.svg#award-medal"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Fastest kill in the league</div>
														<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
														<div class="player-info-detail__label">August 28th, 2015</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--achievements-trophy">
															<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Xenowatch World League</div>
														<div class="player-info-detail__label color-primary">1st place</div>
														<div class="player-info-detail__label">February 14th, 2017</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--award-medal">
															<use xlink:href="assets/img/necromancers.svg#award-medal"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Fastest kill in the league</div>
														<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
														<div class="player-info-detail__label">August 28th, 2015</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--achievements-trophy">
															<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Xenowatch World League</div>
														<div class="player-info-detail__label color-primary">1st place</div>
														<div class="player-info-detail__label">February 14th, 2017</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--award-medal">
															<use xlink:href="assets/img/necromancers.svg#award-medal"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Fastest kill in the league</div>
														<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
														<div class="player-info-detail__label">August 28th, 2015</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--achievements-trophy">
															<use xlink:href="assets/img/necromancers.svg#achievements-trophy"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Xenowatch World League</div>
														<div class="player-info-detail__label color-primary">1st place</div>
														<div class="player-info-detail__label">February 14th, 2017</div>
													</div>
												</div>
												<div class="player-info-detail player-info-detail--icon">
													<div class="player-info-detail__icon player-info-detail__icon--lg">
														<svg role="img" class="df-icon df-icon--award-medal">
															<use xlink:href="assets/img/necromancers.svg#award-medal"/>
														</svg>
													</div>
													<div class="player-info-detail__body">
														<div class="player-info-detail__title">Fastest kill in the league</div>
														<div class="player-info-detail__label color-primary">Killed an opponent in 0.23sec</div>
														<div class="player-info-detail__label">August 28th, 2015</div>
													</div>
												</div>
											</div>
										</div>
									</div>
		
									<div class="row row-between-xl-2col">
										<div class="col-md-4 col-xl-4">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon">
													<svg role="img" class="df-icon df-icon--kills">
														<use xlink:href="assets/img/necromancers.svg#kills"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">29 Kills</div>
													<div class="player-info-detail__label">Record kills</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-xl-4">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon">
													<svg role="img" class="df-icon df-icon--damage">
														<use xlink:href="assets/img/necromancers.svg#damage"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">38.456</div>
													<div class="player-info-detail__label">Record damage</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-xl-4">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon">
													<svg role="img" class="df-icon df-icon--healing">
														<use xlink:href="assets/img/necromancers.svg#healing"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">58.607</div>
													<div class="player-info-detail__label">Record healing</div>
												</div>
											</div>
										</div>
		
									</div>
								</div>
							</div>
						</div>
						<!-- Section: Achievements / End -->
		
						<!-- Section: Hardware -->
						<div class="team-carousel__item" data-icon="hardware">
							<div class="row">
								<div class="col-lg-6">
									<h3 class="player-info-subtitle h5">DaVikinger90</h3>
									<h2 class="player-info-title text-uppercase">Hardware</h2>
									<div class="row">
		
										<div class="col-6 col-md-6">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon player-info-detail__icon--lg">
													<svg role="img" class="df-icon df-icon--gamer-mouse">
														<use xlink:href="assets/img/necromancers.svg#gamer-mouse"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">RAPTOR RM-2569</div>
													<div class="player-info-detail__label color-primary">Raxor</div>
													<a href="#" class="player-info-detail__link">Get it now!</a>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-6">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon player-info-detail__icon--lg">
													<svg role="img" class="df-icon df-icon--headset">
														<use xlink:href="assets/img/necromancers.svg#headset"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">SOUNDMASTER X5</div>
													<div class="player-info-detail__label color-primary">Sorny</div>
													<a href="#" class="player-info-detail__link">Get it now!</a>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-6">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon player-info-detail__icon--lg">
													<svg role="img" class="df-icon df-icon--keyboard">
														<use xlink:href="assets/img/necromancers.svg#keyboard"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">CARBON Z81 RGB</div>
													<div class="player-info-detail__label color-primary">Buccaneer</div>
													<a href="#" class="player-info-detail__link">Get it now!</a>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-6">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon player-info-detail__icon--lg">
													<svg role="img" class="df-icon df-icon--screen">
														<use xlink:href="assets/img/necromancers.svg#screen"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">GLX 0019 4K</div>
													<div class="player-info-detail__label color-primary">Sangsteen</div>
													<a href="#" class="player-info-detail__link">Get it now!</a>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-6">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon player-info-detail__icon--lg">
													<svg role="img" class="df-icon df-icon--gaming-chair">
														<use xlink:href="assets/img/necromancers.svg#gaming-chair"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">BOTTOMS DELUXE 5</div>
													<div class="player-info-detail__label color-primary">Swordfish</div>
													<a href="#" class="player-info-detail__link">Get it now!</a>
												</div>
											</div>
										</div>
										<div class="col-6 col-md-6">
											<div class="player-info-detail player-info-detail--icon">
												<div class="player-info-detail__icon player-info-detail__icon--lg">
													<svg role="img" class="df-icon df-icon--mousepad-and-mouse">
														<use xlink:href="assets/img/necromancers.svg#mousepad-and-mouse"/>
													</svg>
												</div>
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">IRON SERIES GQ+</div>
													<div class="player-info-detail__label color-primary">GQ Solutions</div>
													<a href="#" class="player-info-detail__link">Get it now!</a>
												</div>
											</div>
										</div>
		
									</div>
								</div>
							</div>
						</div>
						<!-- Section: Hardware / End -->
		
						<!-- Section: Replay -->
						<div class="team-carousel__item" data-icon="replay">
							<div class="row">
								<div class="col-lg-6">
									<h3 class="player-info-subtitle h5">DaVikinger90</h3>
									<a href="" class="btn btn-twitch float-right">
										<i class="fab fa-twitch">&nbsp;</i>Follow Me!
									</a>
									<h2 class="player-info-title text-uppercase">Livestream</h2>
		
									<!-- Video -->
									<article class="stream has-post-thumbnail" data-id="playhearthstone" data-controls="true" data-provider="twitch" data-thumbnail="assets/img/samples/stream-img-01.jpg" data-setsize="true" data-easy-embed>
										<div class="stream__thumbnail">
											<img src="assets/img/samples/stream-img-01.jpg" alt="">
										</div>
										<div class="stream__icon"></div>
										<div class="stream__header">
											<div class="stream__info">
												<div class="stream__avatar">
													<img src="assets/img/samples/streams-archive-avatar-01.jpg" alt="">
												</div>
												<h6 class="stream__title">Davikinger plays &quot;Clash of eternity&quot; <span class="badge badge-danger badge-live">Live</span></h6>
												<div class="stream__date">August 3rd, 2018</div>
											</div>
										</div>
									</article>
									<!-- Video / End -->
		
								</div>
							</div>
						</div>
						<!-- Section: Replay / End -->
		
					</div>
				</div>
				<div class="team-player">
					<div class="team-player__photo">
						<img src="assets/img/th/th13.png" alt="">
					</div>
					<div class="team-player__base">
						<!-- Decoration -->
						<div class="ncr-page-decor ncr-page-decor--color-1">
							<div class="ncr-page-decor__layer-1">
								<div class="ncr-page-decor__layer-bg"></div>
							</div>
							<div class="ncr-page-decor__layer-2"></div>
							<div class="ncr-page-decor__layer-3">
								<div class="ncr-page-decor__layer-bg"></div>
							</div>
							<div class="ncr-page-decor__layer-4"></div>
							<div class="ncr-page-decor__layer-5"></div>
						</div>
						<!-- Decoration / End -->
					</div>
				</div>
			</div>
		</main>

<? include "footer.php"; ?>
		