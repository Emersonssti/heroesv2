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
		
						<!-- Section: Regras -->
						<div class="team-carousel__item" data-icon="lineups">
							<div class="row">
								<div class="col-lg-6">
									<h2 class="player-info-title h1">Regras</h2>

									<h3 class="player-info-subtitle h4 text-uppercase">Fair Play</h3>
									<p>O nosso torneio é Fair play e todos devem seguir as regras de jogo limpo/Fair Play, bem como os Termos de Serviço da Supercell.</p>
									
									<h3 class="player-info-subtitle h4 text-uppercase">INSCRIÇÃO</h3>
									<p>Será feita através do site www.torneioheroes.com, na aba "Em Breve".</p>
								
								</div>
							</div>
						</div>
						<!-- Section: Regras / End -->
		
						<!-- Section: Stats -->
						<div class="team-carousel__item" data-icon="achievements">
							<div class="row">
								<div class="col-lg-6">
									<h2 class="player-info-title text-uppercase">Prêmios</h2>
									<h3 class="player-info-subtitle h4 text-uppercase">Primeiro Lugar</h3>
									<p>123,00.</p>
									
								</div>
							</div>
						</div>
						<!-- Section: Stats / End -->
		
						<!-- Section: Achievements -->
						<div class="team-carousel__item" data-icon="stats">
							<div class="row">
								<div class="col-lg-6">
									<h2 class="player-info-title text-uppercase">Agenda</h2>
									<h3 class="player-info-subtitle h5">Início inscrição</h3>
									<p>12/11/2029</p>
								</div>
							</div>
						</div>
						<!-- Section: Achievements / End -->
		
						<!-- Section: Hardware -->
						<div class="team-carousel__item" data-icon="hardware">
							<div class="row">
								<div class="col-lg-6">
									<h2 class="player-info-title text-uppercase">Participantes</h2>

									<div class="row">
		
										<div class="col-6 col-md-6">
											<div class="player-info-detail player-info-detail--icon">
												<!-- <div class="player-info-detail__icon player-info-detail__icon--lg">
													<svg role="img" class="df-icon df-icon--gamer-mouse">
														<use xlink:href="assets/img/necromancers.svg#gamer-mouse"/>
													</svg>
												</div> -->
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">ChuqNorriz</div>
													<div class="player-info-detail__label color-primary">Emerson</div>
												</div>
											</div>
										</div>

										
										<div class="col-6 col-md-6">
											<div class="player-info-detail player-info-detail--icon">
												<!-- <div class="player-info-detail__icon player-info-detail__icon--lg">
													<svg role="img" class="df-icon df-icon--gamer-mouse">
														<use xlink:href="assets/img/necromancers.svg#gamer-mouse"/>
													</svg>
												</div> -->
												<div class="player-info-detail__body">
													<div class="player-info-detail__title">ChuqNorriz</div>
													<div class="player-info-detail__label color-primary">Emerson</div>
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
									<h2 class="player-info-title text-uppercase">Inscrições</h2>
									<h3 class="player-info-subtitle h5">Clique abaixo pra se inscrever!</h3>
		
								</div>
							</div>
						</div>
						<!-- Section: Replay / End -->

						<!-- Section: Replay -->
						<div class="team-carousel__item" data-icon="replay">
							<div class="row">
								<div class="col-lg-6">
									<h2 class="player-info-title text-uppercase">Bracked</h2>
									<h3 class="player-info-subtitle h5">Abaixo ficará o bracked!</h3>

		
		
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
		